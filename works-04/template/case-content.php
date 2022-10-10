<?php
if (has_post_thumbnail()) :
  $id = get_post_thumbnail_id();
  $img = wp_get_attachment_image_src($id, 'large');
else :
  $img = array(get_template_directory_uri() . '/images/common/dummy.png');
endif;
?>
<div class="p-detail">
  <div class="p-detail__contents">
    <div class="p-detail__header effect fadeUpAnime">
      <div class="p-detail__header-case">
        <!-- タクソノミーの一覧リンクを取得 -->
        <a href="<?php echo esc_url(get_term_link(get_the_terms(get_the_ID(), 'genre')[0], 'genre')); ?>">
          <!-- タクソノミーを表示 -->
          <?php echo esc_html(get_the_terms(get_the_ID(), 'genre')[0]->name); ?>
        </a>
      </div>
      <h1 class="p-detail__header-title"><?php the_title(); ?></h1>
    </div>
    <div class="p-detail__intro effect fadeUpAnime">
      <figure><img src="<?php echo $img[0]; ?>" alt="" class="p-detail__eyecatch"></figure>
    </div>
    <div class="p-detail__body effect fadeUpAnime">
      <?php the_content(); ?>

      <h2>抱えていた問題点</h2>
      <p><?php the_field('problem'); ?></p>

      <h2>当事務所を知っていただいた経緯</h2>
      <p><?php the_field('background'); ?></p>

      <h2>ご提供した解決策</h2>
      <p><?php the_field('solution'); ?></p>

      <h2>解決策を実行した成果</h2>
      <p><?php the_field('result'); ?></p>

      <?php if (get_field('voice')) : ?>
        <h2>お客様の声</h2>
        <p><?php the_field('voice'); ?></p>
      <?php endif; ?>

      <?php if (get_field('comment')) : ?>
        <h2>コメント</h2>
        <p><?php the_field('comment'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>