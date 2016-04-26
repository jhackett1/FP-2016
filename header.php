<!doctype html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
        <?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
      </title>
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
      <?php wp_head(); ?>
    </head>

    <body>

      <header>
        <section id="top-bar">
          <div id="container">
            <nav>
              <?php
              $args = array(
              'theme_location' => 'top',
              );
              wp_nav_menu( $args);
              ?>
            </nav>
            <nav>
              <?php
              $args = array(
              'theme_location' => 'social',
              );
              wp_nav_menu( $args);
              ?>
            </nav>
          </div>
        </section>
        <section id="main-bar">
          <div id="container">
            <nav>
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                        <img class="site-logo" src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
            <?php else : ?>
                <h1 class='site-title'>
                  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
                </h1>
            <?php endif; ?>
              <?php
              $args = array(
              'theme_location' => 'primary',
              );
              wp_nav_menu( $args);
              ?>
            </nav>
            <i class="fa fa-bars fa-2x" id="hamburger"></i>
          </div>
        </section>
      </header>


      <nav id="mobile">
        <nav>
          <?php
          $args = array(
          'theme_location' => 'primary',
          );
          wp_nav_menu( $args);
          ?>
        </nav>
        <nav>
          <?php
          $args = array(
          'theme_location' => 'social',
          );
          wp_nav_menu( $args);
          ?>
        </nav>
      </nav>





<script>
  jQuery('.hamburger').css("cursor", "pointer");


  jQuery(document).ready(function() {
    var navpos = jQuery('#main-bar').offset();
    console.log(navpos.top);
      jQuery(window).bind('scroll', function() {
        if (jQuery(window).scrollTop() > navpos.top) {
          jQuery('#main-bar').addClass('fixed');
          jQuery('.site-logo').addClass('smaller');
          jQuery('body').css("margin-top", "34px");
         }
         else {
           jQuery('#main-bar').removeClass('fixed');
          jQuery('.site-logo').removeClass('smaller');
          jQuery('body').css("margin-top", "0px");
         }
      });
  });

  jQuery(document).ready(function(){
    jQuery('#hamburger').click(function(){
      jQuery(this).toggleClass('open');
      console.log("Open class toggle on bars icon");
      jQuery('#mobile').toggleClass('on');
    });
  });




</script>
