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
        <p class="c-card__category-text">
          <!-- タクソノミーを表示 -->
          <?php echo esc_html(get_the_terms(get_the_ID(), 'genre')[0]->name); ?>
        </p>
      </div>
      <h3 class="c-card__title"><?php the_title(); ?></h3>
    </a>
  </li>