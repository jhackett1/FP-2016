<?php get_header(); ?>
<?php if(have_posts()) :
  while(have_posts()) :
    the_post();

    $feat = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

  <section class="featured-header" style="background-image:url(<?php echo $feat; ?>)">
    <div class="grad"></div>
    <div class="overlay">
      <div class="meta">
              <h4><?php the_category(", ") ?></h4>
              <h2><?php the_title(); ?></h2>
              <hr>
              <h4><?php the_excerpt(); ?></h4>
      </div>
    </div>
  </section>
  <section class="featured-bar">
    <div>
      <h4>
        By
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

        <?php  the_author_posts_link(); ?> | <i class="fa fa-calendar"></i> Posted <?php the_date('d M Y'); ?> at <?php the_time('g:i a'); ?> | <span class="mobilehide">Topics         <?php
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
              ?></span>
      </h4>
    </div>
  </section>

<section class="single">

  <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">

  <article id="post-<?php the_id(); ?>">


    <img class="speechmark" src="http://localhost/wp/wp-content/themes/FP-Test/img/speech.svg" style="position: absolute;
opacity: 0.1;
width: 20%;"/>

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
