<?php get_header(); ?>
    <div class="section">
      <div class="innerWrapper">
        <div class="blogcontent">
        	<h6><?php printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h6>
        	<?php
        		$category_description = category_description();
        		if ( ! empty( $category_description ) )
        			echo '' . $category_description . '';
        	   get_template_part( 'loop', 'index' ); ?>
    	
        </div> <!-- /.blogcontent -->
        <?php get_sidebar(); ?>
      </div> <!-- /.innerwrapper -->
    </div> <!-- /.section -->
<?php get_footer(); ?>