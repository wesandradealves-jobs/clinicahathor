<?php /* Template Name: Tratamentos */ ?>
<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last clearfix">

						<div class="widget clearfix">

							<?php the_content(); ?>

						</div>

						<div class="fancy-title title-center title-dotted-border topmargin-sm">
							<h3>Casos Clínicos</h3>
						</div>

						<div class="owl-carousel image-carousel carousel-widget flip-card-wrapper clearfix" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3" style="overflow: visible;">

			               	<?php 
				                $_casos = new WP_Query( array(
				                    'post_type'         => 'casos-clinicos',
				                    'order' => 'ASC',
				                    'posts_per_page'    => -1
				                ));

				                while ( $_casos->have_posts() ) : $_casos->the_post();
			               	?>								
								<div class="flip-card">
									<div class="flip-card-front dark" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>')">
										<div class="flip-card-inner">
											<div class="card nobg noborder">
												<div class="card-body">
													<h3 class="card-title mb-0"><?php the_title(); ?></h3>
													<!-- <span class="font-italic">Chiang Mai</span> -->
												</div>
											</div>
										</div>
									</div>
									<div class="flip-card-back bg-danger no-after">
										<div class="flip-card-inner">
											<p class="mb-2 text-white"><?php the_excerpt(); ?></p>
											<a href="<?php the_permalink(); ?>" class="btn btn-outline-light mt-2">View Details</a>
										</div>
									</div>
								</div> 
							<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?> 

						</div>

						<div class="fancy-title title-center title-dotted-border topmargin-sm">
							<h3>Depoimentos</h3>
						</div>

<!-- 'tax_query' => array(
    array(
        'taxonomy' => 'video_type',
        'terms' => 'episode',
        'field' => 'slug',
        'include_children' => true,
        'operator' => 'IN'
    )
),	 -->					

						<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-sm="1" data-items-md="1" data-items-xl="2">

							<?php 
							 $args = array(
							    'post_type' => array( 'depoimentos' ),
							    'posts_per_page' => -1,
							    'order' => 'ASC',
							    'orderby' => 'menu_order'
							 );
							 $_depoimentos = new WP_Query( $args );
							?>	
							<?php while ($_depoimentos->have_posts()) : $_depoimentos->the_post();  ?>
								<div class="oc-item">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p><?php echo get_the_content(); ?></p>
											<div class="testi-meta">
												<?php the_title(); ?>
												<span><?php echo get_field('role'); ?></span>
											</div>
										</div>
									</div>
								</div> 
							<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?> 

						</div>						

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<h4>Tratamentos</h4>
								<div id="post-list-footer">

					               	<?php 
						                $_tratamentos = new WP_Query( array(
						                    'post_type'         => 'tratamentos',
						                    'order' => 'ASC',
						                    'posts_per_page'    => -1
						                ));

						                while ( $_tratamentos->have_posts() ) : $_tratamentos->the_post();
					               	?>									

									<div class="spost clearfix">
										<div class="entry-image">
											<a href="#" class="nobg"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											</div>
											<ul class="entry-meta">
												<li><?php the_date(); ?></li>
											</ul>
										</div>
									</div> 

									<?php endwhile; wp_reset_postdata(); ?>

								</div>

							</div>

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>