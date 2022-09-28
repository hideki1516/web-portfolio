  <!-- map -->
  <div class="c-map effect fadeUpAnime">
    <?php if (is_home() || is_front_page()) : ?>
      <div id="js-map" class="c-map__top"></div>
    <?php elseif (is_page('about')) : ?>
      <div id="js-map" class="c-map__about"></div>
    <?php endif; ?>
    <script>
      const path = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx2fs--fb2s9X_oF4_g10fTuYez_aaEik&callback=initMap" async defer></script>
  </div>
  <!-- // map -->

  <!-- contact -->
  <?php if (!is_page('contact')) : ?>
    <div class="c-contact effect fadeUpAnime">
      <p class="c-contact__text">まずはメールで<br class="is-sp">お気軽にお問い合わせください</p>
      <div class="c-contact__link"><a href="<?php echo esc_url(home_url('contact')); ?>" class="c-contact__btn slideInBtnAnime">CONTACT</a></div>
    </div>
  <?php endif; ?>
  <!-- // contact -->

  <!-- footer -->
  <footer class="l-footer">
    <div class="l-footer__bottom"></div>
  </footer>
  <!-- // footer-->

  <?php wp_footer(); ?>
  </body>

  </html>