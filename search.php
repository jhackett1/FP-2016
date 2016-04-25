<?php
get_header(); ?>

<section class="pagePaneArchive">


  <div class="triangle"></div><h2 class="sectionTitleHome">
    Search: <span style="color:#505050; font-weight:700; text-transform:capitalize;"><?php the_search_query(); ?></span>
  </h2><div class="triangleReverse"></div>

  <section class="row group featuredHome archiveRow">

    <?php

    //Use this line to select the FEATURED and LIVE categories, to ensure that the most recent live post will receive priority

    global $query_string;

    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
    	$query_split = explode("=", $string);
    	$search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $search = new WP_Query($search_query);
    
    		//Instantiates a count variable with an initial value of 1
		
		$count=0;


      if ($search->have_posts()) :
        while ($search->have_posts()) : $search->the_post ();
          ?>

  		            <?php
		            	//Instantiates a variable $url, for the post featured image
		            	
		            	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		            
		
		            if($count===0){
		            
		           	//The first post displays like so
		            ?>
		            
		            	            
					<div class="col span-8 postObject">
					
						<a href="<?php the_permalink() ?>">
							<div class="postImage Hero" style="background-image:url(<?php echo $url; ?>)"></div>
						</a>
			                   
			                        <h4 class="relatedDate">
			                       		 <?php the_time('d M Y'); ?>
			                        </h4>
					</div>
					
					
			 		<div class="col span-4 postObject">
			                   
			                   <h2 class="relate"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
			
			                   <p><?php the_excerpt(); ?></p>
			
			                </div>
		            	
		            	</section><section class="group row">
		            
		            
		            <?php
		            
		            
		            ;} else { ?> 
		            
		            	<!--All other posts display like so-->
		            
		            
		            
		            	<div class="col span-4 postObject">

					<a href="<?php the_permalink() ?>">
						<div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div>
					</a>
		                   
		                        <h4 class="relatedDate">
						<?php the_time('d M Y'); ?>
		                        </h4>
		
		                   
					<h2>
						<a href="<?php the_permalink() ?>"><?php the_title();?></a>
					</h2>
			
					<p><?php the_excerpt(); ?></p>
		                   
		                 </div>
		            
		             <?php
		            };
				
		  
		  //Adds grid row elements after every third post
		  
		   if ( 0 == $count%3 ) {
		        echo '</section><section class="group row">';
		    };
		    
		    
			//Has the counting variable increase after every post
			
			$count++;
			 endwhile; 
		
		else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php
          endif;
          wp_reset_postdata();
          ?>

</section>





</section>

<?php get_footer('front'); ?>