<?php
/*
 * Archive Case
 */
?>

<?php get_header(); ?>

<div class="c-entry">
  <div class="c-entry__wrap">
    <h2 class="c-entry__title"><span class="anime-slideIn js-leftAnime"><span class="anime-slideIn-inner js-leftAnime-inner">Case</span></span></h2>
  </div>
</div>

<!-- article -->
<article class="p-list">
  <div class="p-list__contents">
    <ul class="p-list__list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('template/case-archive-card'); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <p>最新の記事はありません</p>
      <?php endif; ?>
    </ul>

    <?php
    if (function_exists('my_pagenavi')) {
      my_pagenavi(array());
    }
    ?>

  </div>
</article>
<!-- // article -->

<?php get_footer(); ?>