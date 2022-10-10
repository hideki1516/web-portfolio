<?php get_header(); ?>

<article>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>
            <?php get_template_part('template/case-content'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<div class="p-detail__appeal">
    <div class="p-detail__recommend effect fadeUpAnime">
        <p class="p-detail__recommend-title">関連記事</p>
        <ul class="p-top__blog-list">
            <?php
            $term = array_shift(get_the_terms($post->ID, 'genre'));

            $args = array(
                'post__not_in' => array($post->ID), // 今読んでいる記事を除外
                'posts_per_page' => 3, // 表示させたい記事数
                'post_type' => 'case', // カスタム投稿タイプ
                'taxonomy' => 'genre', // カスタム投稿タイプのタクソノミー
                'orderby' => 'rand', // ランダム表示
                'term' => $term->slug, // タームスラッグを取得
            );

            $wp_query = new WP_Query($args);
            ?>
            <?php if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <?php get_template_part('template/case-archive-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p>関連の記事はありません</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>