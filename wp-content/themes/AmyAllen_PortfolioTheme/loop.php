<?php /* If there are no posts to display, such as an empty archive page */ ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<section class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php /* if there are posts, Start the Loop. */ ?>

<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

			<section class="entry-content">

				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</section><!-- .entry-content -->

			<footer>
	  	      
	  	      <p class="posted">Posted on <?php the_time('F, j Y '); ?> in <?php the_category(', ');?></p>
			</footer>
				
		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // page navigation ?>
<div class="pageNav"><p><?php posts_nav_link('','prev','next'); ?></p></div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <?php /* If we have the wp-pagenavi plugin installed */  ?>
  <?php if(function_exists('wp_pagenavi')) : ?>
     <div class="pnavi"><?php wp_pagenavi(); ?></div>
  <?php /* Otherwise just give me regular next/prev links ?> */ ?>
  
  <?php else : ?>
          <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')); ?></div>
          <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')); ?></div>
  <?php endif; ?>

<?php endif; ?>
