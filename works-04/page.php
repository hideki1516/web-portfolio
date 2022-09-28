<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post();  ?>
    <!-- article -->
    <article class="p-contact">
      <div class="c-entry">
        <div class="c-entry__wrap">
          <h2 class="c-entry__title"><span class="anime-slideIn js-leftAnime"><span class="anime-slideIn-inner js-leftAnime-inner"><?php the_title(); ?></span></span></h2>
        </div>
      </div>
      <?php the_content(); ?>
    </article>
    <!-- // article -->
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>