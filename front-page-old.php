<?php get_header(); ?>

  <div class="frontPage">

    <section class="row group heroHome">

      <?php

      //Use this line to select the FEATURED and LIVE categories, to ensure that the most recent live post will receive priority

        $heroPost = new WP_Query('cat=57,10&posts_per_page=1');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

                              <!-- Post markup here -->
            <?php     $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>

                    <?php if ( in_category('57') ) { ?>

                  <div class="col span-8 postObject">

			<a href="<?php the_permalink() ?>"><div class="postImage Hero" style="background-image:url(<?php echo $url; ?>)"></div></a>

                        <h4 class="live">Live Blog<i class="fa fa-circle rec-flash"></i></h4>

                  </div>

                  <div class="col span-4 postObject liveMeta">

                    <h2><a href="<?php the_permalink(); ?>"><span style="font-weight:400; color:#B51800">Live:</span> <?php the_title();?></a></h2>
                    <p><?php the_excerpt();?></p>
                    </div>

        <?php } else { ?>



                              <!-- Post markup here -->
            <?php

          $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];

            ?>



		<div class="col span-8 postObject">

			<a href="<?php the_permalink() ?>"><div class="postImage Hero" style="background-image:url(<?php echo $url; ?>)"></div></a>

                        <h4>
                       		 <?php the_category(", ") ?>
                        </h4>
		</div>


 		<div class="col span-4 postObject">

                   <h2 class="hero"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                </div>


                          <?php } ?>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>



    <section class="row group featuredHome mobileHide">

      <?php

      //Use this line to select the FEATURED and LIVE categories, to ensure that the most recent live post will receive priority

        $heroPost = new WP_Query('cat=57,10&posts_per_page=3&offset=1');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php               $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-4 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>

    <?php get_template_part(homead); ?>

    <h2 class="sectionTitleHome">Latest</h2><hr class="dark">

    <section class="row group featuredHome">

      <?php

      //Use this line to select the LATEST categories, including News proper, Lifestyle and Sport news, plus ents news from Fuse

        $heroPost = new WP_Query('cat=4,4275,4272,4256,4263,4264,4270&posts_per_page=3');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php     $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-4 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>


        <section class="row group featuredHome">

          <?php


      //Use this line to select the LATEST categories, including News proper, Lifestyle and Sport news, plus ents news from Fuse

            $heroPost = new WP_Query('cat=4,4275,4272,4256,4263,4264,4270&posts_per_page=3&offset=3');

            if ($heroPost->have_posts()) :
              while ($heroPost->have_posts()) : $heroPost->the_post ();
                ?>

            <!-- Post markup here -->
            <?php     $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-4 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

                <?php
                    endwhile;
                    else:
                ?><p>No content to show.</p><?php
                endif;
                ?>

        </section>

    <h2 class="sectionTitleHome" id="sectiontitle1">Reviews</h2><hr class="dark">

    <section class="row group featuredHome">

      <?php

      //Use this line to select the five REVIEW categories from Lifesytle and Fuse

        $heroPost = new WP_Query('cat=4259,4260,4266,4268,4273&posts_per_page=2');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php     $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>



		<div class="col span-6 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>

 <section class="row group featuredHome">

      <?php

      //Use this line to select the five REVIEW categories from Lifesytle and Fuse

        $heroPost = new WP_Query('cat=4259,4260,4266,4268,4273&posts_per_page=3&offset=2');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php     $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-4 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>





  </div>

    <section class="homepageBanner mobileHide">
      <div class="homepageBannerInner">

        <?php get_template_part(homepagebanner); ?>

      </div>
    </section>

  <div class="frontPage">

    <h2 class="sectionTitleHome">Opinion</h2><hr class="dark">

        <section class="row group featuredHome">

          <?php

          //Use this line to select the OPINION categories from Fuse and Comment

            $heroPost = new WP_Query('cat=5,4258,4262,4267,4271&posts_per_page=2');

            if ($heroPost->have_posts()) :
              while ($heroPost->have_posts()) : $heroPost->the_post ();
                ?>

                <!-- Post markup here -->
                      <div class="col span-6 commentItem">

                        <object type="image/svg+xml" data="/wp/wp-content/themes/FP%202016/images/speech.svg" class="commentIcon">
                        </object>

                        <div class="commentText">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                          <p>By <?php the_author_posts_link(); ?></p>
                        </div>

                      </div>






                <?php
                    endwhile;
                    else:
                ?><p>No content to show.</p><?php
                endif;
                ?>

        </section>
        <section class="row group featuredHome" style="margin-bottom:30px;">

          <?php

          //Use this line to select the OPINION categories from Fuse and Comment

            $heroPost = new WP_Query('cat=5,4258,4262,4267,4271&posts_per_page=2&offset=2');

            if ($heroPost->have_posts()) :
              while ($heroPost->have_posts()) : $heroPost->the_post ();
                ?>

                <!-- Post markup here -->
                      <div class="col span-6 commentItem">

                        <object type="image/svg+xml" data="/wp/wp-content/themes/FP%202016/images/speech.svg" class="commentIcon">
                        </object>

                        <div class="commentText">
                          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                          <p>By <?php the_author_posts_link(); ?></p>
                        </div>

                      </div>






                <?php
                    endwhile;
                    else:
                ?><p>No content to show.</p><?php
                endif;
                ?>

        </section>


    <h2 class="sectionTitleHome">In depth</h2><hr class="dark">

    <section class="row group heroHome mobileHide">

      <?php

      //Use this line to select the IN DEPTH categories from Lifestyle, Sport, Fuse and Features

        $heroPost = new WP_Query('cat=4257,4261,4265,4269,6,4274,4276&posts_per_page=1');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

                               <!-- Post markup here -->
            <?php    $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-8 postObject">

			<a href="<?php the_permalink() ?>"><div class="postImage Hero" style="background-image:url(<?php echo $url; ?>)"></div></a>

                        <h4>
                       		 <?php the_category(", ") ?>
                        </h4>
		</div>


 		<div class="col span-4 postObject">

                   <h2 class="hero"><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                </div>


            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

    </section>

    <section class="row group featuredHome">

      <?php

      //Use this line to select the FEATURED and LIVE categories, to ensure that the most recent live post will receive priority

        $heroPost = new WP_Query('cat=4257,4261,4265,4269,6,4274,4276&posts_per_page=2&offset=1');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php    $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



		<div class="col span-6 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

     </section>

    <section class="row group featuredHome">

      <?php

      //Use this line to select the FEATURED and LIVE categories, to ensure that the most recent live post will receive priority

        $heroPost = new WP_Query('cat=4257,4261,4265,4269,6,4274,4276&posts_per_page=3&offset=3');

        if ($heroPost->have_posts()) :
          while ($heroPost->have_posts()) : $heroPost->the_post ();
            ?>

            <!-- Post markup here -->
            <?php     $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>



	               <div class="col span-4 postObject">



                   <a href="<?php the_permalink() ?>"><div class="postImage" style="background-image:url(<?php echo $url; ?>)"></div></a>

                      <h4>
                        <?php the_category(", ") ?>
                      </h4>


                   <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>

                   <p><?php the_excerpt(); ?></p>

                 </div>

            <?php
                endwhile;
                else:
            ?><p>No content to show.</p><?php
            endif;
            ?>

  </section>

  <section class="row group">
          <div class="col span-4" style="padding:10px; box-sizing:border-box;">

            <!-- Loop begins -->
            <?php

                $latestIssue = new WP_Query('cat=2886&posts_per_page=1');

                if ($latestIssue->have_posts()) :
                  while ($latestIssue->have_posts()) : $latestIssue->the_post ();


                $url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          $url = $url1[0];
            ?>

            <!-- Tile markup begins -->
            <div class="issue">

                <a href="<?php the_permalink(); ?>">
                  <section class="latestIssue" style="background-image:url(<?php echo $url; ?>)">
                  </section>
                </a>

      	        <div class="buffer">
                    <h4>Read online</h4>
      	             <h3><a href="<?php the_permalink(); ?>"><?php the_title( );?></a></h3>
                     <h4>Published <?php the_time('d M Y'); ?></h4>
                </div>

            </div>

              <!-- Tile markup ends -->

            <?php endwhile ?>
            <?php endif; ?>

          </div>

          <div class="col span-8" style="padding:10px; box-sizing:border-box;">
          </div>

      </section>










       </div>


<?php get_footer("front"); ?>
