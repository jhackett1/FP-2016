<?php
get_header(); ?>

<article id="front" class="related">
  <div class="container">

<h2 class="archive">
<?php
  if (is_category()) {
    single_cat_title();
		?></h2><h5 class="archive"><?php
		echo category_description(); ?></h5><?php
  }
  else if (is_tag()){
		echo 'Topic: ';
    single_tag_title();
    ?></h2><?php
  }
  else if (is_author()){
    echo get_the_author();
    ?></h2><?php
  }
  else if (is_year()){
    echo get_the_date();
    ?></h2><?php
  }
  else if (is_month()){
    echo get_the_date('F Y');
    ?></h2><?php
  }
  else if (is_year()){
    echo get_the_date('Y');
    ?></h2><?php
  }
  else {
    echo 'Archives';
    ?></h2><?php
  }
?>

    <div class="tile-row archive">

		<?php
		//Instantiates a count variable with an initial value of 1
		$count=0;
		// Check if there are any posts to display
		if ( have_posts() ) :

		// The Loop
		while ( have_posts() ) : the_post();

		$feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$feat = $feat[0];

    if($count===0){

	?>

	<a href="<?php the_permalink() ?>">
		<div class="featured-box">
			<img class="feature-image" src="<?php echo $feat; ?>"/>
			<div class="title">
			  <h5><i class="fa fa-calendar"></i> <?php the_date(); ?></h5>
				<h2><?php the_title();?></h2>
				<h4><?php the_excerpt("  ") ?></h4>
			</div>
		</div>
	</a>

    <?php
    ;} else { ?>
    	<!--All other posts display like so-->
			<div class="post-tile">
			  <a href="<?php the_permalink() ?>"></a>
			  <div class="post-image" style="background-image:url(<?php echo $feat; ?>)"/></div>
			  <h5><i class="fa fa-calendar"></i> <?php the_date(); ?></h5>
			  <h2><?php the_title(); ?></h2>
			  <p><?php the_excerpt(); ?></p>
			</div>

     <?php
    };

		  //Adds grid row elements after every third post

		   if ( 0 == $count%3 ) {
		        echo '</div><div class="tile-row">';
		    };

			//Has the counting variable increase after every post

			$count++;
			 endwhile;

		else: ?>
		<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

	</div>
</div>
</article>




	<div class="pagination">
		<?php
		$pags = array(

			'prev_text'          => __('< Previous'),
			'next_text'          => __('Next >'),
		);
		echo paginate_links( $pags ); ?>
	</div>

<?php get_footer(); ?>
