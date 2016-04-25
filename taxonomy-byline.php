<?php
get_header(); ?>

<section class="pagePaneArchive">

	  <h2 class="sectionTitleHome">
    <?php


		$contributor = get_the_term_list( $post->ID, 'byline', '', ', ', '' );
		echo strip_tags( $contributor );

		 ?>
	</h2>


<hr class="dark">

	<section class="group row">

		<?php

		//Instantiates a count variable with an initial value of 1

		$count=0;

		// Check if there are any posts to display

		if ( have_posts() ) :



		// The Loop
		while ( have_posts() ) : the_post(); ?>


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


		<?php endif; ?>
		</div>


	</section>

	<div class="pagination">
		<?php

		$pags = array(

			'prev_text'          => __('< Previous'),
			'next_text'          => __('Next >'),
		);

		echo paginate_links( $pags ); ?>

	</div>

</section>

<?php get_footer('front'); ?>
