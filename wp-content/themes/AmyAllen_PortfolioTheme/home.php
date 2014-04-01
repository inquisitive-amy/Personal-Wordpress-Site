<?php get_header(); ?>
	<div class="section">
		<div class="innerWrapper">

	  		<div class="blogcontent">
	  		<h3 class="page-title">Blog</h3>

		      <?php // Start the loop ?>
		      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="article">
			        <h3><?php the_title(); ?></h3>
		  	      <?php the_excerpt(); ?>
		  	      <p class="posted">Posted on <?php the_time('F, j Y '); ?> in <?php the_category(', ');?></p>
				</div> <!-- /.article -->
		      <?php endwhile; // end the loop?>	 

		      <div class="pageNav"><p><?php posts_nav_link('','prev','next'); ?></p></div>
		      <div class="pnavi"><?php wp_pagenavi(); ?></div>

		      </div><!-- /.blog content -->

		   <?php get_sidebar(); ?>
	  
	  </div> <!-- /.innerWrapper -->
	</div> <!-- /.section -->
<?php get_footer(); ?>