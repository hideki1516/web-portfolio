<?php
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('w410', 410, 9999, false);

  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション'
  ]);
});

// CSS & JS
function my_enqueue_scripts()
{
  wp_enqueue_style('style_swiper_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css', array());
  wp_enqueue_style('styles_base', get_template_directory_uri() . '/assets/css/style.css', array());

  wp_enqueue_script('jquery');
  wp_enqueue_script('js_swiper_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array());
  wp_enqueue_script('js_map', get_template_directory_uri() . '/assets/js/map_api.js', array());
  wp_enqueue_script('js_swiper', get_template_directory_uri() . '/assets/js/swiper.js', array());
  wp_enqueue_script('js_base', get_template_directory_uri() . '/assets/js/common.js', array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// entry タイトル表示
function get_main_title()
{
  if (is_page()) :
    return get_the_title();
  elseif (is_404()) :
    return 'Not Found';
  endif;
}

// アイキャッチ画像のwidth/height属性を削除
add_filter('post_thumbnail_html', 'custom_attribute');
function custom_attribute($html)
{
  $html = preg_replace('/class=".*\w+"\s/', '', $html);
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  return $html;
}

// 投稿リストを取得
function get_blog_archive($post_number)
{
  $paged = (int) get_query_var('paged');
  $args = array(
    'post_type' => "post",
    'posts_per_page' => $post_number,
    'paged' => $paged,
  );
  $blog_archives = new WP_Query($args);
  return $blog_archives;
}

// ページネーション設定
function my_pagenavi($args = array())
{
  if (!function_exists('wp_pagenavi')) return;

  $defaults = array(
    'before' => '<nav id="pager" class="c-pager effect fadeUpAnime is-animated">',
    'after' => '</nav>',
  );
  $args = is_array($args) ? array_merge($defaults, $args) : $args;
  wp_pagenavi($args);
}

// 抜粋文 設定
function cms_excerpt_more()
{
  return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

function cms_excerpt_length()
{
  return 80;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

function get_flexible_excerpt($number)
{
  $value = get_the_excerpt();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}
