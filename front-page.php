<?php get_header(); ?>

<!-- An article element with class "front" represents a full-width strip which can have a background colour added to it. A child container div limits the max-width of post boxes. -->

<article id="front">
  <div class="container">

      <div class="heros">
        <?php
          //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
          $heroPost = new WP_Query('cat=32&posts_per_page=2');
          if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
        ?>
        <?php
          //This instantiates a variable $feat for the post featured image for use in the markup later on
          $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $feat = $feat[0];
        ?>
        <a href="<?php the_permalink() ?>">
          <div class="hero-box">
            <img class="hero-image" src="<?php echo $feat; ?>"/>
            <div class="overlay"></div>
            <div class="title">
              <h4><?php the_category("  ") ?></h4>
              <h2><?php the_title();?></h2>
            </div>
          </div>
        </a>
        <?php
          //Close the loop here
          endwhile;
          else:
          //No content fallback message
        ?>
        <p>No content to show.</p>
        <?php
          endif;
        ?>
      </div>
      <div class="heros" id="triplet">
        <?php
          //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
          $heroPost = new WP_Query('cat=32&posts_per_page=3&offset=2');
          if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
        ?>
        <?php
          //This instantiates a variable $feat for the post featured image for use in the markup later on
          $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $feat = $feat[0];
        ?>
        <a href="<?php the_permalink() ?>">
          <div class="hero-box">
            <img class="hero-image" src="<?php echo $feat; ?>"/>
            <div class="overlay"></div>
            <div class="title">
              <h4><?php the_category("  ") ?></h4>
              <h2><?php the_title();?></h2>
            </div>
          </div>
        </a>
        <?php
          //Close the loop here
          endwhile;
          else:
          //No content fallback message
        ?>
        <p>No content to show.</p>
        <?php
          endif;
        ?>
      </div>


  </div>
</article>

<article id="front">
  <div class="container mobilehide" id="specials">
    <h3>Quick links</h3>
    <nav>
      <?php
      $args = array(
      'theme_location' => 'specials',
      );
      wp_nav_menu( $args);
      ?>
    </nav>
  </div>
</article>

<article id="front">
  <div class="container">
    <h2 id="section">Latest News</h2>
    <div class="tile-row">

      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=30&posts_per_page=2');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
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


      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>

      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=31&posts_per_page=1');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
        $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
        $feat = $feat[0];
      ?>


        <div class="past-issue-tile mobilehide">
          <a href="<?php the_permalink() ?>">
          <div class="post-image" style="background-image:url(<?php echo $feat; ?>)"/></div></a>
          <div class="overlay">
            <h2><?php the_title(); ?></h2>
            <p>Published <?php the_date(); ?></p>
          </div>
        </div>

      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>

    </div>
    <div class="tile-row">

      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=30&posts_per_page=3&offset=2');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
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


      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>

    </div>

    <a href="#" id="more">More news <i class="fa fa-arrow-right"></i></a>

  </div>
</article>

<article id="front">
  <div class="container">
    <h2 id="section" style="color: #fafafa">Latest Reviews</h2>


    <div class="tile-row">

      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=11,18&posts_per_page=4');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
        $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
        $feat = $feat[0];
      ?>

        <div class="review-tile">
          <a href="<?php the_permalink() ?>"></a>
          <div class="post-image" style="background-image:url(<?php echo $feat; ?>)"/></div>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <i class="fa fa-arrow-circle-right"></i>
        </div>

      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>
    </div>
  </div>

  </div>
</article>

<article id="front">
  <div class="container">
    <h2 id="section">Opinion</h2>

    <div class="tile-row">
      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=34&posts_per_page=3');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>

        <div class="comment-tile">
          <img class="speechmark" src="wp-content/themes/FP-Test/img/speech.svg"/>
          <div>
            <h2><?php the_title(); ?></h2>
            <p>By <?php the_author(); ?></p>
          </div>
          <a href="<?php the_permalink() ?>"></a>
        </div>

      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>
    </div>
    <div class="tile-row" id="mobilehide">
      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=4,4275,4272,4256,4263,4264,4270,1,3,2,4&posts_per_page=3&offset=3');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>


        <div class="comment-tile">
          <img class="speechmark" src="wp-content/themes/FP-Test/img/speech.svg"/>
          <div>
            <h2><?php the_title(); ?></h2>
            <p>By <?php the_author(); ?></p>
          </div>
          <a href="<?php the_permalink() ?>"></a>
        </div>

      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>
    </div>

        <a href="#" id="more">More comment <i class="fa fa-arrow-right"></i></a>

  </div>
</article>

<article id="front">
  <div class="container">
    <h2 id="section">In Depth</h2>


    <div class="heros" id="triplet">
      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=32&posts_per_page=3');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
        $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
        $feat = $feat[0];
      ?>
      <a href="<?php the_permalink() ?>">
        <div class="hero-box">
          <img class="hero-image" src="<?php echo $feat; ?>"/>
          <div class="overlay"></div>
          <div class="title">
            <h4><?php the_category("  ") ?></h4>
            <h2><?php the_title();?></h2>
          </div>
        </div>
      </a>
      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>
    </div>
    <div class="heros">
      <?php
        //This is a WP_Query selecting the two most recent posts in the PROMOTED category, for the twin top-line hero boxes.
        $heroPost = new WP_Query('cat=32&posts_per_page=2&offset=3');
        if ($heroPost->have_posts()) :
        while ($heroPost->have_posts()) : $heroPost->the_post ();
      ?>
      <?php
        //This instantiates a variable $feat for the post featured image for use in the markup later on
        $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
        $feat = $feat[0];
      ?>
      <a href="<?php the_permalink() ?>">
        <div class="hero-box">
          <img class="hero-image" src="<?php echo $feat; ?>"/>
          <div class="overlay"></div>
          <div class="title">
            <h4><?php the_category("  ") ?></h4>
            <h2><?php the_title();?></h2>
          </div>
        </div>
      </a>
      <?php
        //Close the loop here
        endwhile;
        else:
        //No content fallback message
      ?>
      <p>No content to show.</p>
      <?php
        endif;
      ?>
    </div>

  </div>
</article>

<?php get_footer(); ?>
