<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header -->
  <header class="l-header js-header">
    <div class="l-header__inner">
      <h1 class="l-header__title effectOnLoad fadeDownAnime">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__title-link"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_logo.svg" alt="藤岡行政書士事務所" class="l-header__title-logo"></a>
      </h1>
      <?php
      // メニューID（term_id）を取得する
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <nav class="l-header__nav js-header-nav">
        <ul class="l-header__nav-list">
          <?php foreach ($menu_items as $item) : ?>
            <li class="l-header__nav-item effectOnLoad fadeDownAnime"><a href="<?php echo esc_attr($item->url); ?>" class="l-header__nav-link"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <button class="l-header__menu is-sp js-header-burger">
        <span class="l-header__menu-inline"></span>
        <span class="l-header__menu-inline"></span>
        <span class="l-header__menu-inline"></span>
      </button>
    </div>
  </header>
  <!-- // header -->

  <!-- entry -->
  <?php if (!is_front_page() && !is_single()) : ?>
    <div class="c-entry">
      <div class="c-entry__wrap">
        <h2 class="c-entry__title"><span class="anime-slideIn js-leftAnime"><span class="anime-slideIn-inner js-leftAnime-inner"><?php echo get_main_title(); ?></span></span></h2>
      </div>
      <?php if (is_page('about')) : ?>
        <figure class="c-entry__thumb -about"><img src="<?php echo get_template_directory_uri(); ?>/images/about/img_about-entry.png" alt="" class="c-entry__image"></figure>
      <?php elseif (is_page('service')) : ?>
        <figure class="c-entry__thumb -service"><img src="<?php echo get_template_directory_uri(); ?>/images/service/img_service-entry.png" alt="" class="c-entry__image"></figure>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <!-- // entry -->