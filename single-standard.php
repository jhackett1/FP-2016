<?php get_header(); ?>

<section class="single">

<?php if(have_posts()) :
  while(have_posts()) :
    the_post();

    $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

  <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">



    <article id="post-<?php the_id(); ?>">



      <div class="post-meta">


        <?php
        if ( get_the_tags() ){} else {echo ''; };
        ?>
        <?php
        $count = 0;
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            $count++;
            if ($count <= 3 ) {
              echo '<a id="tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a> ';
            }
          }
        };
        ?>

        <h2><?php the_title(); ?></h2>
        <hr>
        <?php  if( !get_the_term_list( $post->ID, 'byline', '', ', ', '' ) ){ ?>
          <div class="bylineCircle">
          <?php
            $args = array(
              'class'  => 'bylineCircle',
            );
            echo get_wp_user_avatar( get_the_author_meta( 'ID' ), thumbnail, $default, $alt, $args );
          ?>
        </div>
        <?php }; ?>
        <h4>By  <?php  the_author_posts_link(); ?>  |  <?php the_category(", ") ?> | <i class="fa fa-calendar"></i> <?php the_date('d M Y'); ?></h4>
      </div>

      <img src="<?php echo $feat; ?>" class="featured"/>

      <?php the_content(); ?>
      <?php comments_template( $file, $separate_comments ); ?>

    </article>

  <?php endwhile ?>
  <?php endif; ?>

</section>

<?php
get_template_part(related);
get_footer("posts");
?>
