<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
      	<?php if(get_the_content()) : ?>
      		<?php the_content(); ?>
      	<?php else : ?>
      		<?php if(get_field('banner')) : ?>
				<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix">

					<div class="slider-parallax-inner">

						<div class="swiper-container swiper-parent">
							<div class="swiper-wrapper">
								<?php foreach (get_field('banner') as $key => $value) {
									# code...
									?>
									<div onclick="document.location='<?php echo $value['url']; ?>';return false;" class="swiper-slide" style="background-image: url('<?php echo $value['imagem']; ?>');">
										<div class="container clearfix">
											<div class="slider-caption slider-caption-center">
												<!-- <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
												<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p> -->
											</div>
										</div>
									</div>									
									<?php 
								} ?>
								<!-- <div class="swiper-slide dark">
									<div class="container clearfix">
										<div class="slider-caption slider-caption-center">
											<h2 data-animate="fadeInUp">Beautifully Flexible</h2>
											<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
										</div>
									</div>
									<div class="video-wrap">
										<video poster="<?php echo get_stylesheet_directory_uri(); ?>/images/videos/explore.jpg" preload="auto" loop autoplay muted>
											<source src='<?php echo get_stylesheet_directory_uri(); ?>/images/videos/explore.mp4' type='video/mp4' />
											<source src='<?php echo get_stylesheet_directory_uri(); ?>/images/videos/explore.webm' type='video/webm' />
										</video>
										<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
									</div>
								</div>
								<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/slider/swiper/3.jpg'); background-position: center top;">
									<div class="container clearfix">
										<div class="slider-caption">
											<h2 data-animate="fadeInUp">Great Performance</h2>
											<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
										</div>
									</div>
								</div> -->
							</div>
							<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
							<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
							<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
						</div>

					</div>

				</section>
			<?php endif; ?>

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap"> 

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Quem somos</h2>
						</div>

						<div class="clear bottommargin-sm"></div>

						<?php 
						 $args = array(
						    'post_type' => array( 'portfolio' ),
						    'posts_per_page' => -1,
						    'order' => 'ASC',
						    'orderby' => 'menu_order'
						 );
						 $_portfolio = new WP_Query( $args );
						 if($_portfolio->post_count) :
						?>								

						<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

							<?php while ($_portfolio->have_posts()) : $_portfolio->the_post();  ?>
								<div class="oc-item">
									<div class="iportfolio">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="Open Imagination">
											</a>
											<div class="portfolio-overlay">
												<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												<a href="<?php the_permalink(); ?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
											</div>
										</div>
										<div class="portfolio-desc">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<span>
									              <?php 
									                $_terms = get_terms( array('portfolio_categories') );

									                foreach ($_terms as $term) {
									                 	?>
									                    <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>, 
									                 	<?php 
									                }
									              ?>   												
											</span>
										</div>
									</div>
								</div>
							<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?> 								

						</div>	
						<?php endif; ?>						

					</div>

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Tratamentos</h2>
						</div>

						<div class="clear bottommargin-sm"></div>
				
						<!-- Portfolio Filter
						============================================= -->
						<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>

				              <?php 
				                $_terms = get_terms( array('tratamentos_categories') );

				                foreach ($_terms as $term) {
				                    ?>
				                    <li><a href="javascript:void(0)" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
				                    <?php 
				                }
				              ?>  		

						</ul><!-- #portfolio-filter end -->

						<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clearfix">
							<!-- Portfolio Items
							============================================= -->
							<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-nomargin portfolio-full clearfix">
				               	<?php 
					                $_tratamentos = new WP_Query( array(
					                    'post_type'         => 'tratamentos',
					                    'order' => 'ASC',
					                    'posts_per_page'    => -1
					                ));

					                while ( $_tratamentos->have_posts() ) : $_tratamentos->the_post();
									$_terms = get_terms( array('tratamentos_categories') );
				               	?>
									<article class="portfolio-item <?php echo $_terms[0]->slug; ?> pf-icons">
										<div class="portfolio-image">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="Open Imagination">
											</a>
										<!-- 	<div class="portfolio-overlay">
												<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
											</div> -->
										</div>
										<div class="portfolio-desc">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								            <?php 
								                foreach ($_terms as $term) :
								                    ?>
								                    <a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>
								                    <?php 
								                endforeach;
								            ?> 												
										</div>
									</article>
								<?php endwhile; wp_reset_postdata(); ?>



							</div><!-- #portfolio end -->									
						</div>						
					</div>

				</div>

			</section><!-- #content end -->	
		<?php endif; ?>
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>