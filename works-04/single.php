<?php get_header(); ?>

<article>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>
            <?php get_template_part('template/single-content'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<div class="p-detail__appeal">
    <div class="p-detail__share effect fadeUpAnime">
        <figure class="p-detail__share-thumb">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/images/common/dummy.png" alt="ダミー画像" />
            <?php endif; ?>
        </figure>
        <ul class="p-detail__share-list">
            <li class="p-detail__share-item">
                <a class="p-detail__share-item-text" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
                    Facebookでシェアする
                </a>
            </li>
            <li class="p-detail__share-item">
                <a class="p-detail__share-item-text" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
                    Twitterでこの記事をつぶやく
                </a>
            </li>
        </ul>
    </div>

    <div class="p-detail__recommend effect fadeUpAnime">
        <p class="p-detail__recommend-title">最近の記事</p>
        <ul class="p-top__blog-list">
            <?php
            $blog_archive = get_blog_archive(3);
            if ($blog_archive->have_posts()) : while ($blog_archive->have_posts()) : $blog_archive->the_post();
            ?>
                    <?php get_template_part('template/common-archive'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p>最新の記事はありません</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <?php wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>