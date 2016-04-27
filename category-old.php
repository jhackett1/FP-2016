<?php
get_header(); ?>

<section class="pagePaneArchive">

	<h2 class="sectionTitleHome"><?php single_cat_title(); ?></h2><hr class="dark">
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

		            	$url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );           $url = $url1[0];


		            if($count===0){

		           	//The first post displays like so
		            ?>


		            	<div class="col span-7 postObject">

					<a href="<?php the_permalink() ?>">
						<div class="postImage Hero" style="background-image:url(<?php echo $url; ?>)"></div>
					</a>

		                        <h4 class="relatedDate">
						<?php the_time('d M Y'); ?>
		                        </h4>


					<h2>
						<a href="<?php the_permalink() ?>"><?php the_title();?></a>
					</h2>

					<p><?php the_excerpt(); ?></p>

		                 </div>


		<div class="col span-5" style="padding:10px; box-sizing:border-box;">
			<div class="authorSingleMeta">

			        <div class="authorName" style="font-size:2em;">
			        	<?php single_cat_title() ?>
			        </div>

				<hr class="authorDivider">

				<div class="authorBio">
					<?php echo category_description(); ?>
					<div style="height:5px;"></div>
					<?php if (!is_category('Past issues')){ ?>Contact us:<?php } ?>
				</div>


				<div class="authorContact">
					<?php
						if (is_category('Past issues')){
						} else { ?>

													<a href="<?php
									if ( is_category('News') ) {
					   				     echo 'mailto:press.news@forgetoday.com';
					   				 } else if (is_category('Comment') ) {
					   				     echo 'mailto:press.comment@forgetoday.com';
					   				 } else if (is_category('Features') ) {
					   				     echo 'mailto:press.features@forgetoday.com';
					   				 } else if (is_category('Arts') ) {
					   				     echo 'mailto:press.arts@forgetoday.com';
					   				 } else if (is_category('Games') ) {
					   				     echo 'mailto:press.games@forgetoday.com';
					   				 } else if (is_category('Music') ) {
					   				     echo 'mailto:press.music@forgetoday.com';
					   				 } else if (is_category('Screen') ) {
					   				     echo 'mailto:press.screen@forgetoday.com';
					   				 } else if (is_category('Lifestyle') ) {
					   				     echo 'mailto:press.lifestyle@forgetoday.com';
					   				 } else if (is_category('Sport') ) {
					   				     echo 'mailto:press.sport@forgetoday.com';
					   				 } else {
					   				 };
								?>">
								<i class="fa fa-envelope"></i>
							</a>


						<?php };
					?>
				</div>


















			</div>
		</div>




				</section>

				<div style="height:10px;"></div>

				<section class="group row">


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
