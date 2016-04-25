<?php

//Initial addition of responsive styling and jQuery

	wp_enqueue_style( 'Primary styles', get_stylesheet_uri() );
	wp_enqueue_style( 'FontAwesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');

//Adds in Google Web fonts

	function load_fonts() {
		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700');
		wp_enqueue_style( 'googleFonts');
		}

		add_action('wp_print_styles', 'load_fonts');

//Hide visual editor for everyone

add_filter('user_can_richedit' , create_function('' , 'return false;') , 50);

//Menu registration

	 register_nav_menus(array(
	   'top' => __('Top Bar Menu'),
		 'primary' => __('Header Menu'),
		 'social' => __('Social Icon Menu'),
	   'footer' => __('Footer Menu'),
	   'specials' => __('Specials'),
	 ));

//Allows featured images

	 add_theme_support( 'post-thumbnails' );

//Allows logo to be used as site header

	 function themeslug_theme_customizer( $wp_customize ) {

				 $wp_customize->add_section( 'themeslug_logo_section' , array(
						 'title'       => __( 'Logo', 'themeslug' ),
						 'priority'    => 30,
						 'description' => 'Upload a small horizontal logo for the site header',
				 ) );

				 $wp_customize->add_setting( 'themeslug_logo' );

				 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
						 'label'    => __( 'Logo', 'themeslug' ),
						 'section'  => 'themeslug_logo_section',
						 'settings' => 'themeslug_logo',
				 ) ) );

	 }
	 add_action( 'customize_register', 'themeslug_theme_customizer' );

//Reduce excerpt length

			 function custom_excerpt_length( $length ) {
			return 15;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 15 );


//Custom read more

	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

//Sets up popular post view tracking

	function wpb_set_post_views($postID) {
	    $count_key = 'wpb_post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	    }else{
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}

	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

	function wpb_track_post_views ($post_id) {
	    if ( !is_single() ) return;
	    if ( empty ( $post_id) ) {
	        global $post;
	        $post_id = $post->ID;
	    }
	    wpb_set_post_views($post_id);
	}
	add_action( 'wp_head', 'wpb_track_post_views');

//Hide the "featured" category and others on the front-end

			add_filter('get_the_terms', 'hide_categories_terms', 10, 3);
			function hide_categories_terms($terms, $post_id, $taxonomy){

			    $exclude = array('promoted', 'uncategorized', 'sport-news', 'screen-review', 'screen-news', 'sport-feature', 'lifestyle-news', 'lifestyle-feature', 'uni-news', 'lifestyle-review', 'arts-review', 'arts-feature', 'arts-news', 'arts-short-fuse', 'music-review', 'music-feature', 'music-short-fuse', 'music-news', 'games-review', 'games-feature', 'games-news', 'games-short-fuse', 'local-news');

			    if (!is_admin()) {
			        foreach($terms as $key => $term){
			            if($term->taxonomy == "category"){
			                if(in_array($term->slug, $exclude)) unset($terms[$key]);
			            }
			        }
			    }

			    return $terms;
			};

// Register our sidebars and widgetized areas.


		function footer_widget_1() {

			register_sidebar( array(
				'name'          => 'Left footer',
				'id'            => 'footer_1',
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			) );

		}
		add_action( 'widgets_init', 'footer_widget_1' );

		function footer_widget_2() {

			register_sidebar( array(
				'name'          => 'Centre footer',
				'id'            => 'footer_2',
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			) );

		}
		add_action( 'widgets_init', 'footer_widget_2' );

		function footer_widget_3() {

			register_sidebar( array(
				'name'          => 'Right footer',
				'id'            => 'footer_3',
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			) );

		}
		add_action( 'widgets_init', 'footer_widget_3' );


//Prevent default image links

		function wpb_imagelink_setup() {
			$image_set = get_option( 'image_default_link_type' );

			if ($image_set !== 'none') {
				update_option('image_default_link_type', 'none');
			}
		}
		add_action('admin_init', 'wpb_imagelink_setup', 10);


			register_sidebar( $args );



//Register the star shortcodes

add_shortcode('0star', function() {
	return '<i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('1star', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('2star', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('3star', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('4star', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('5star', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i>';
});

add_shortcode('star rating=”1″', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('star rating=”2″', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('star rating=”3″', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('star rating=”4″', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star-o"></i>';
});

add_shortcode('star rating=”5″', function() {
	return '<i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i><i class="fa fa-2x fa-star"></i>';
});


//Fiddling with meta

function custom_get_excerpt($post_id) {
    $temp = $post;
    $post = get_post( $post_id );
    setup_postdata( $post );

    $excerpt = get_the_excerpt();

    wp_reset_postdata();
    $post = $temp;

    return $excerpt;
}


function fbogmeta_header() {
  if (is_single()) {
    ?>
    	<!-- Open Graph Meta Tags for Facebook and LinkedIn Sharing !-->
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'large'); ?>
		<?php if ($fb_image) : ?>
			<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
			<?php endif; ?>
		<meta property="og:type" content="<?php
			if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
		/>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<!-- End Open Graph Meta Tags !-->


		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@ForgePress">
		<meta name="twitter:creator" content="Forge Press">
		<meta name="twitter:title" content="<?php the_title(); ?>">
		<meta name="twitter:image" content="<?php echo $fb_image[0]; ?>">




    <?php
  }
}
add_action('wp_head', 'fbogmeta_header');



//Author contact info

function add_remove_contactmethods( $contactmethods ) {
        $contactmethods['twitter'] = 'Twitter handle (&commat; will be automatically added)';
        $contactmethods['contactEmail'] = 'Contact Email (publicly visible)';
        // this will remove existing contact fields
        return $contactmethods;
}
add_filter('user_contactmethods','add_remove_contactmethods',10,1);




//Pretty display names

	// class myUsers {
	// 	static function init() {
	// 		// Change the user's display name after insertion
	// 		add_action( 'user_register', array( __CLASS__, 'change_display_name' ) );
	// 	}
	//
	// 	static function change_display_name( $user_id ) {
	// 		$info = get_userdata( $user_id );
	//
	// 		$args = array(
	// 			'ID' => $user_id,
	// 			'display_name' => $info->first_name . ' ' . $info->last_name
	// 		);
	//
	// 		wp_update_user( $args ) ;
	// 	}
	// }
	//
	// myUsers::init();




	//Insert ads after second paragraph of single post content.

	add_filter( 'the_content', 'prefix_insert_post_ads' );

	function prefix_insert_post_ads( $content ) {

		$ad_code = '';

		if ( is_single() && ! in_category(4255) ) {
			return prefix_insert_after_paragraph( $ad_code, 2, $content );
		}

		return $content;
	}

	// Parent Function that makes the magic happen

	function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
		$closing_p = '</p>';
		$paragraphs = explode( $closing_p, $content );
		foreach ($paragraphs as $index => $paragraph) {

			if ( trim( $paragraph ) ) {
				$paragraphs[$index] .= $closing_p;
			}

			if ( $paragraph_id == $index + 1 ) {
				$paragraphs[$index] .= $insertion;
			}
		}

		return implode( '', $paragraphs );
	}
