<?php get_header(); ?>
  <div class="section">

    <div class="innerWrapper">      
      <div class="full clearfix">
		<?php
			if ( is_post_type_archive() ) {
				?>
				<h3 class="page-title"><?php post_type_archive_title(); ?></h3>
				<?php
			}
		?>
		<div class="mainContent clearfix">
	       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	          <div class="portfolioPosts">
				<?php the_post_thumbnail('portfolio'); ?>

				<a href="<?php the_permalink() ?>">
					<div class="short">
						<h5><?php the_title(); ?></h5>
						<p class="description"><?php the_field('short_desc'); ?></p>
					</div>
				</a>
				
	          </div><!-- end of portfolio posts -->
	        <?php endwhile; // end of the loop. ?>
		</div>
		
      </div> <!-- /.full clearfix -->
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->
<?php get_footer(); ?>