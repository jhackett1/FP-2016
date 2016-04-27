<article id="front" class="related">
  <div class="container">
    <h2 id="section">Related</h2>

    <div class="tile-row">

<?php

  $orig_post = $post;
  global $post;
  $categories = get_the_category($post->ID);

  if ($categories) {
  $category_ids = array();
  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
  $args=array(
  'category__in' => $category_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=> 3, // Number of related posts that will be displayed.
  'caller_get_posts'=>1,
  'orderby'=>'post_date' // Randomize the posts
  );

  $my_query = new wp_query( $args );
  if( $my_query->have_posts() ) {
  while( $my_query->have_posts() ) {
  $my_query->the_post();

  $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
  $feat = $feat[0];

?>

<div class="post-tile">
  <a href="<?php the_permalink() ?>"></a>
  <div class="post-image" style="background-image:url(<?php echo $feat; ?>)"/></div>
  <h5><i class="fa fa-calendar"></i> <?php the_date(); ?></h5>
  <h2><?php the_title(); ?></h2>
  <p><?php the_excerpt(); ?></p>
</div>

<?php }
} }
$post = $orig_post;
wp_reset_query();
?>

</div>
<div class="tile-row">
<?php

  $orig_post = $post;
  global $post;
  $categories = get_the_category($post->ID);

  if ($categories) {
  $category_ids = array();
  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
  $args=array(
  'category__in' => $category_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=> 3, // Number of related posts that will be displayed.
  'orderby'=>'post_date', // Randomize the posts
  'offset'=> 3
  );

  $my_query = new wp_query( $args );
  if( $my_query->have_posts() ) {
  while( $my_query->have_posts() ) {
  $my_query->the_post();

  $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
  $feat = $feat[0];

?>

<div class="post-tile">
  <a href="<?php the_permalink() ?>"></a>
  <div class="post-image" style="background-image:url(<?php echo $feat; ?>)"/></div>
  <h5><i class="fa fa-calendar"></i> <?php the_date(); ?></h5>
  <h2><?php the_title(); ?></h2>
  <p><?php the_excerpt(); ?></p>
</div>

<?php }
} }
$post = $orig_post;
wp_reset_query();
?>

</div>




</div>

</div>
</article>
