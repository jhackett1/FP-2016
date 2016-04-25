<footer>
  <div id="container">
    <div class="widgets">
      <div class="widget">
        <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
            <?php dynamic_sidebar( 'footer_1' ); ?>
        <?php endif; ?>
      </div>
      <div class="widget">
        <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
            <?php dynamic_sidebar( 'footer_2' ); ?>
        <?php endif; ?>
      </div>
      <div class="widget mobilehide">
        <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
            <?php dynamic_sidebar( 'footer_3' ); ?>
        <?php endif; ?>
      </div>
    </div>

  <div>
    &copy;
    <?php bloginfo(title); ?> <?php echo date('Y'); ?>. Site by <a href="http://joshuahackett.com/">Joshua Hackett</a>.
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
