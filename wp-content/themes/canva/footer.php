		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						<div class="widget clearfix">

							<img src="<?php echo (get_theme_mod('darklogo')) ? get_theme_mod('darklogo') : get_stylesheet_directory_uri().'/images/footer-widget-logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="footer-logo">

							<p><?php echo get_bloginfo('description'); ?></p>

							<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
								<?php if(get_theme_mod('endereco')) : ?>
									<address>
										<strong>Endereço:</strong><br>
										<?php echo get_theme_mod('endereco'); ?>
									</address>
								<?php endif; ?>
								<?php if(get_theme_mod('telefone')) : ?>
									<abbr title="Telefone"><strong>Telefone:</strong></abbr> <?php echo get_theme_mod('telefone'); ?><br>
								<?php endif; ?>
								<?php if(get_theme_mod('email')) : ?>
									<abbr title="E-mail"><strong>Email:</strong></abbr> <a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a>
								<?php endif; ?>
							</div>

						</div>

					</div>

					<div class="col_one_third">

						<?php 
						 $args = array(
						    'post_type' => array( 'depoimentos' ),
						    'posts_per_page' => -1,
						    'order' => 'ASC',
						    'orderby' => 'menu_order'
						 );
						 $_depoimentos = new WP_Query( $args );
						 if($_depoimentos->post_count) :
						?>							

							<div class="widget clearfix">
								<h4>Depoimentos</h4>

								<div class="fslider testimonial no-image nobg noborder noshadow nopadding" data-animation="slide" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<?php while ($_depoimentos->have_posts()) : $_depoimentos->the_post();  ?>
												<div class="slide">
													<div class="testi-image">
														<a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" alt="<?php the_title(); ?>"></a>
													</div>
													<div class="testi-content">
														<p><?php echo get_the_content(); ?></p>
														<div class="testi-meta">
															<?php the_title(); ?>
															<span><?php echo get_field('role'); ?></span>
														</div>
													</div>
												</div>
											<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?> 
										</div>
									</div>
								</div>

							</div>

						<?php endif; ?>

						<div class="widget widget_links clearfix">

							<h4>Sitemap</h4>

							<ul>
								<?php wp_nav_menu( array( 'container' => false, 'menu' => 'footer', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?>
							</ul>

						</div>						

						<div class="widget clearfix">

							<?php if(get_theme_mod('facebook')) : ?>
								<a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('twitter')) : ?>
								<a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('pinterest')) : ?>
								<a href="<?php echo get_theme_mod('pinterest'); ?>" target="_blank" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('vimeo')) : ?>
								<a href="<?php echo get_theme_mod('vimeo'); ?>" target="_blank" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('github')) : ?>
								<a href="<?php echo get_theme_mod('github'); ?>" target="_blank" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('linkedin')) : ?>
								<a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							<?php endif; ?>

							<?php if(get_theme_mod('youtube')) : ?>
								<a href="<?php echo get_theme_mod('youtube'); ?>" target="_blank" class="social-icon si-small si-borderless si-youtube">
									<i class="icon-youtube"></i>
									<i class="icon-youtube"></i>
								</a>
							<?php endif; ?>				

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget quick-contact-widget clearfix">

							<h4>Fale conosco</h4>

							<div class="quick-contact-form-result"></div>

							<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

								<div class="form-process"></div>

								<div class="input-group divcenter">
									<div class="input-group-prepend">
												<!-- <div class="input-group-text"><i class="icon-user"></i></div> -->
											</div>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Nome" />
								</div>
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<!-- <div class="input-group-text"><i class="icon-email2"></i></div> -->
									</div>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">Enviar</button>

							</form>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; <?php echo date('Y'); ?> Todos os direitos reservados por <?php echo get_bloginfo('name'); ?>.<br>
						desenvolvido por <b>CAQO</b>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" type="text/css" />

    <style>
    	html {
    		margin: 0!important;
    		padding:0!important;
    	}
    </style>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.gmap.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jssocials.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js" integrity="sha256-+Q/z/qVOexByW1Wpv81lTLvntnZQVYppIL1lBdhtIq0=" crossorigin="anonymous"></script>

    <script>
        $("#share").jsSocials({
            shares: ["email", "twitter", "facebook"]
        });
    </script>	

	<script>

		jQuery('#google-map').gMap({

			latitude: -37.9712369,
			longitude: 144.4926746,
			maptype: 'ROADMAP',
			zoom: 9,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [13,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>	

	<?php wp_footer(); ?>
</body>
</html>