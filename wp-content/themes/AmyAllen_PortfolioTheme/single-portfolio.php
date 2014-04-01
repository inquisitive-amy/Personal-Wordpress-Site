<?php get_header(); ?>
	<div class="section">
		<div class="innerWrapper">
				<div class="full clearfix portfolio">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<div>
							<div class="flexslider">
								<ul class="slides"> 
									<?php while(has_sub_field('images')) : ?>
										<li>
											<figure>
											<?php $image = get_sub_field('image'); ?>

											<img src="<?php echo $image['sizes']['full']; ?>">           
											</figure> 
										</li>        
									<?php endwhile; //end of images?>
								</ul> 
							</div> <!-- flexslider -->
						</div>

						<div class="details clearfix">
							<div class="left">
								<h3 class="projectTitle"><?php the_title(); ?></h3>
								<p><?php the_field('short_desc'); ?></p>
							</div><!-- /.left -->
							<div class="taxes">

								<?php the_taxonomies('before=<p>&after=</p>&sep=<br>'); ?>

								<?php $technologies = get_the_terms($post->ID, 'technologies');?>

									<?php foreach($technologies as $tech){
									
									$url = get_bloginfo('url') . "/" . $tech->taxonomy . "/" . $tech->slug;
									
									// echo "$tech->name". ", ";
									
									}; ?>
									<?php wp_reset_postdata(); ?>

								<p class="credit"><?php the_field('design_credit'); ?></p>
								<p class="credit"><?php the_field('dev_credit'); ?></p>
									
									<?php while(has_sub_field('website_url')): ?> 
					             	<?php $url = get_sub_field('url') ?>
					             	<?php $check_it_out = get_sub_field('check_it_out') ?>
					            	 <a href="<?php echo $url; ?>"><?php echo $check_it_out; ?></a>
					         		<?php endwhile; ?>

								<!-- /.mainContent -->

							</div><!-- /.taxes -->
						</div> <!-- /.details -->
			
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div><!-- /.mainContent -->
		</div> <!-- /.innerWrapper -->
	</div> <!-- /.section -->
<?php get_footer(); ?>