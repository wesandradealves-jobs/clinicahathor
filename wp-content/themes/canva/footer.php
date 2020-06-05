		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

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

							<div class="widget widget_links clearfix">

								<h4>Sitemap</h4>

								<ul>
									<?php wp_nav_menu( array( 'container' => false, 'menu' => 'footer', 'items_wrap' => '%3$s', 'container_class'=>'' ) ); ?>
								</ul>

							</div>

						</div>


		                <?php 
		                   $args = array(
		                      'post_type' => array( 'post' ),
		                      'posts_per_page' => 3,
		                      'order' => 'ASC',
		                      'orderby' => 'menu_order'
		                   );
		                   $blog = new WP_Query( $args );
		                   if($blog->post_count) :
		                ?> 						

							<div class="col_one_third col_last">

								<div class="widget clearfix">
									<h4>Últimas do Blog</h4>

									<div id="post-list-footer">

										<?php while ($blog->have_posts()) : $blog->the_post();  ?>
											<div class="spost clearfix">
												<div class="entry-c">
													<div class="entry-title">
														<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
													</div>
													<ul class="entry-meta">
														<li><?php the_date(); ?></li>
													</ul>
												</div>
											</div>
						                <?php 
							            	endwhile;  
							                wp_reset_query();
							                wp_reset_postdata(); 
						                ?> 										

									<!-- 	<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
												</div>
												<ul class="entry-meta">
													<li>10th July 2014</li>
												</ul>
											</div>
										</div>

										<div class="spost clearfix">
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
												</div>
												<ul class="entry-meta">
													<li>10th July 2014</li>
												</ul>
											</div>
										</div> -->
									</div>
								</div>

							</div>

						<?php endif; ?>

					</div>

					<div class="col_one_third col_last">

						<!-- <div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div> -->

						<div class="widget subscribe-widget clearfix">
							<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id voluptate cum nesciunt magni! Ratione, quos.</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Seu e-mail">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Assinar</button>
									</div>
								</div>
							</form>
						</div>

						<!-- <div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div> -->

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
						<!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div> -->
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
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

						<div class="clear"></div>

						<?php if(get_theme_mod('email')) : ?>
							<i class="icon-envelope2"></i> <a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a> 
						<?php endif; ?>

						<?php if(get_theme_mod('telefone')) : ?>
							<span class="middot">&middot;</span> 
							<i class="icon-headphones"></i> <?php echo get_theme_mod('telefone'); ?> 
						<?php endif; ?>
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

    <style>
    	html {
    		margin: 0!important;
    		padding:0!important;
    	}
    </style>
</body>
</html>