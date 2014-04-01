<?php get_header(); ?>
  <div class="section">
    <div class="innerWrapper">
      <div class="left">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h3 class="entry-title"><?php the_title(); ?></h3>

            <div class="entry-content singlePostContent">
              <?php the_content(); ?>
              <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->

    	      <p class="posted">Posted on <?php the_time('F, j Y '); ?> in <?php the_category(', ');?></p>
          </div><!-- #post-## -->

          <div id="nav-below" class="navigation clearfix">
            <div class="nav-previous">
  	          <p>Previous Post:</p>
  	          <?php previous_post_link('%link'); ?>
            </div>

            <div class="nav-next">
  	          <p>Next Post:</p>
  	       		<?php next_post_link('%link'); ?>
  	        </div>
          </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

      </div>
      <?php get_sidebar(); ?>
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
<?php get_footer(); ?>