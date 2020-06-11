<?php /* Template Name: Equipe */ ?>
<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -200px;">

			<div class="container clearfix">
				<h1><?php the_title(); ?></h1>
				<span><?php echo get_the_excerpt(); ?></span>
				<?php get_template_part('template-parts/breadcrumb'); ?>
			</div>

		</section><!-- #page-title end -->

		<style>
			#page-title.page-title-parallax * {
				z-index: 2;
			}
			#page-title.page-title-parallax::after {
				content: '';
				display: block;
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: rgba(0,0,0,.5);
				z-index: 1;
			}
		</style>		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

<!-- 				<div class="container clearfix">

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Why choose <span>Us</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Our <span>Mission</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

					<div class="col_one_third col_last">

						<div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>What we <span>Do</span>.</h4>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

					</div>

				</div> -->

			<!-- 	<div class="section nomargin">
					<div class="container clearfix">

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
							<i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
							<h5>Lines of Codes</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-graph"></i>
							<div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
							<h5>KBs of HTML Files</h5>
						</div>

						<div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-layers"></i>
							<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
							<h5>No. of Templates</h5>
						</div>

						<div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-line2-clock"></i>
							<div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
							<h5>Hours of Coding</h5>
						</div>

					</div>
				</div> -->
				<?php 
				 $args = array(
				    'post_type' => array( 'equipe' ),
				    'posts_per_page' => -1,
				    'order' => 'ASC',
				    'orderby' => 'menu_order'
				 );
				 $_equipe = new WP_Query( $args );
				 $i = 0;
				 	while ($_equipe->have_posts()) : $_equipe->the_post(); 
				 		$i++;
				?>						

					<div class="row common-height clearfix bottommargin-lg <?php echo ($i%2 === 0) ? 'flex-row-reverse' : ''; ?>">

						<div class="col-md-5 col-padding" style="background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>') center center no-repeat; background-size: cover;"></div>

						<div class="col-md-7 col-padding">
							<div>
								<div class="heading-block">
									<span class="before-heading color"><?php echo get_field('cro'); ?></span>
									<h3><?php the_title(); ?></h3>
								</div>

								<div class="row clearfix">

									<div class="col-lg-12">
										<?php the_content(); ?>
									</div>

								</div>

							</div>
						</div>

					</div>

					<div class="clear"></div>

				<?php endwhile; 
				wp_reset_query(); 
				wp_reset_postdata(); ?>

			<!-- 	<div class="row common-height bottommargin-lg clearfix">

					<div class="col-md-7 col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block">
								<span class="before-heading color">Developer &amp; Evangelist</span>
								<h3>Mary Jane</h3>
							</div>

							<div class="row clearfix">

								<div class="col-lg-12">
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>


							</div>

						</div>
					</div>

					<div class="col-md-5 col-padding" style="background: url('images/team/8.jpg') center center no-repeat; background-size: cover;"></div>

				</div> -->

				<div class="container clearfix">

					<div class="clear"></div>

					<div class="heading-block center">
						<h4>Nossos clientes</h4>
					</div>

					<ul class="clients-grid grid-6 nobottommargin clearfix">
		               	<?php 
			                $_clientes = new WP_Query( array(
			                    'post_type'         => 'clientes',
			                    'order' => 'ASC',
			                    'posts_per_page'    => -1
			                ));

			                while ( $_clientes->have_posts() ) : $_clientes->the_post();
		               	?>							
						<li><a href="<?php echo get_field('url'); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbniail'); ?>" alt="Clients"></a></li>
						<?php endwhile; 
						wp_reset_query(); 
						wp_reset_postdata(); ?>
					</ul>

				</div>

				<div class="section footer-stick">

					<h4 class="uppercase center bottommargin-lg">Oque <span>pensam</span> de nós?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
			               	<?php 
				                $_depoimentos = new WP_Query( array(
				                    'post_type'         => 'depoimentos',
				                    'order' => 'ASC',
				                    'posts_per_page'    => -1
				                ));

				                while ( $_depoimentos->have_posts() ) : $_depoimentos->the_post();
			               	?>									
									<div class="slide">
										<div class="testi-image">
											<a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbniail'); ?>" alt="<?php echo get_the_title(); ?>"></a>
										</div>
										<div class="testi-content">
											<p><?php echo get_the_content(); ?></p>
											<div class="testi-meta">
												<?php the_title(); ?>
												<span><?php echo get_field('role'); ?></span>
											</div>
										</div>
									</div> 
							<?php endwhile; 
							wp_reset_query(); 
							wp_reset_postdata(); ?>								
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->
   <?php endwhile;
   endif; ?>      
   <style>
	.col-padding > div {
	    padding: 0 30px;
	}   	
   </style>
<?php get_footer(); ?>