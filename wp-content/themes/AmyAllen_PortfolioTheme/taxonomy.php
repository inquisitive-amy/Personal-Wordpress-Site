<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="blogcontent">
    	<h6><?php printf( __( 'Project Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h6>
  


           <?php while ( have_posts() ) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

                    <section class="entry-content">

                        <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                    </section><!-- .entry-content -->

                    <footer>
                    </footer>
                        
                </article><!-- #post-## -->

                <?php comments_template( '', true ); ?>


           <?php endwhile; // End the loop. Whew. ?>

	
    </div> <!-- /.blogcontent -->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerwrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>