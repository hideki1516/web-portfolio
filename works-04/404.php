<?php get_header(); ?>

<article class="p-error">
  <div class="p-error__content">
    <div class="p-error__inner">
      <h2 class="p-error__title">404 Not Found</h2>
      <p class="p-error__message">ページが見つかりませんでした</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="p-error__link">トップページへ戻る</a>
    </div>
  </div>
</article>

<?php get_footer(); ?>