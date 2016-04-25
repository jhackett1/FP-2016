<?php
/* Template Name: Standard Page */
get_header(); ?>




    <?php
    if ( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();

    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

        ?>

        <?php
        
        
        
          if ( $url ){
            ?>
              <section class="pageHeader" style="background-image:url(<?php echo $url; ?>)">
              	<section class="darkener"></section>
		 <h2 class="pageTitleOverlay"><?php the_title(); ?></h2>
             </section>
                            
              
              <section class="pagePane">
	
	        <?php
	
	        the_content();

          } else { ?>
          
          
                  <section class="pagePane">

        <h2 class="pageTitle"><?php the_title(); ?></h2>
        <hr class="dark">

        <?php

        the_content();
          
          
          };
          
          
          
          
          
        


    	} // end while
    }; // end if
    ?>

</section>

<?php get_footer('front'); ?>