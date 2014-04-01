<?php

/*
	Template Name: Custom Scrolling Page
*/ 

get_header();  ?>

  <div class="section" id="home">
    <div class="profile">
      <div class="innerWrapper">
        <div class="full clearfix">
          <?php // Start the loop ?>

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
            <div class="siteHeading">
              <?php the_content(); ?>
              <img class="laptopHoriz"src="<?php bloginfo('stylesheet_directory');?>/i/laptop_horiz.jpg" alt="laptop">
            </div><!-- site Heading --> 
            
            <img class="laptop" src="<?php bloginfo('stylesheet_directory');?>/i/laptop.jpg" alt="laptop">
            
              <div class="profileB clearfix">
                <img class="amp" src="<?php bloginfo('stylesheet_directory');?>/i/ampersand.jpg" alt="metal ampersand">
                <div class="skills clearfix">
                  <?php while(has_sub_field('skills')): ?> 
                    <div class="skill">
                      <?php $skill_icon = get_sub_field('skill_icon') ?>
                      <img class="icon" src="<?php echo $skill_icon['sizes']['thumbnail']; ?> " alt="icon">
                      <h6>
                        <?php $skill_title = get_sub_field('skill_title') ?>
                        <?php echo $skill_title; ?>
                      </h6>
                      <div class="skillText">
                          <?php $skill_text = get_sub_field('skill_text') ?>
                          <p><?php echo $skill_text; ?></p>
                      </div>
                    </div><!-- skill -->
                  <?php endwhile; ?>
                </div><!-- skills -->

              </div><!-- profileB -->
          <?php endwhile; // end the loop ?>
        </div><!-- /.full skills -->
      </div> <!-- /.innerWrapper -->
    </div><!-- profile -->

  <!-- ==================ABOUT SECTION STARTS========== -->    
    <img class="amyMq" src="<?php bloginfo('stylesheet_directory');?>/i/amy_mq.jpg" alt="amy">

    <div class="about clearfix full" id="about">
         <div class="innerWrapper">
            <?php $about = new WP_Query(array(
              'post_type' => 'page',
              'page_id' => 213
            )); ?>
          
          <?php if($about->have_posts()) while($about->have_posts()) : $about->the_post(); ?>
          
            <div class="aboutText">
              <h3><?php the_title();  ?></h3>
              <?php the_content(); ?>
            </div><!-- about text -->
         
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div> <!-- /.innerWrapper --> 
    </div><!-- about -->

  <!-- ==================ABOUT SECTION ENDS========== -->    

  <!-- ==================CONTACT SECTION STARTS========== -->    
    <div class="contact" id="contact">
       <div class="innerWrapper full">
         <?php $contact = new WP_Query(array(
          'post_type' => 'page',
          'page_id' => 222
         )); ?>

         <div class="contactMe clearfix">

           <?php if($contact->have_posts()) while($contact->have_posts()) : $contact->the_post(); ?>
            <h3><?php the_title();  ?></h3>

              <div class="contactParent clearfix">
                <?php while(has_sub_field('social_media_links')): ?> 

                <div class="group">
                    <?php $icon = get_sub_field('icon') ?>
                    <img class="icon" src="<?php echo $icon['sizes']['thumbnail']; ?> " alt="icon">

                    <p class="action">
                      <?php the_sub_field('call_to_action') ?>
                    </p>

                    <div class="smLink">
                      <?php $social_media_link = get_sub_field('social_media_link') ?>
                      <?php $social_media_url = get_sub_field('social_media_url') ?>
                      <a href="<?php echo $social_media_url; ?>"><?php echo $social_media_link; ?></a>
                    </div>

                </div><!-- group -->
                <?php endwhile; ?>
              </div><!-- contact parent -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div><!-- contactMe -->
        </div><!-- innerwrapper -->
      </div><!-- contact -->
  <!-- ==================CONTACT SECTION END========== -->    

  </div> <!-- /.section -->
<?php get_footer(); ?>