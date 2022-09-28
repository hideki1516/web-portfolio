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
      <div class="p-detail__header-meta"><time><?php the_date(); ?></time></div>
      <h1 class="p-detail__header-title"><?php the_title(); ?></h1>
    </div>
    <div class="p-detail__intro effect fadeUpAnime">
      <figure><img src="<?php echo $img[0]; ?>" alt="" class="p-detail__eyecatch"></figure>
    </div>
    <div class="p-detail__body effect fadeUpAnime">
      <?php the_content(); ?>
    </div>
  </div>
</div>