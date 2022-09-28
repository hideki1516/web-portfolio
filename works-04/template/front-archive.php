<li class="c-card effect fadeUpAnime">
  <a href="<?php the_permalink(); ?>" class="c-card__link">
    <figure class="c-card__thumb">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php bloginfo('template_url'); ?>/images/common/dummy.png" alt="ダミー画像" />
      <?php endif; ?>
    </figure>
    <div class="c-card__category">
      <p class="c-card__category-text"><?php the_category(', '); ?></p>
    </div>
    <p class="c-card__data is-pc"><time datetime=""><?php the_time(get_option('date_format')); ?></time></p>
    <h3 class="c-card__title"><?php the_title(); ?></h3>
    <p class="c-card__text"><?php echo get_flexible_excerpt(42); ?></p>
  </a>
</li>