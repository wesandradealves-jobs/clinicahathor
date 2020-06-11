<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
		<!-- Content
		============================================= -->
		<?php get_template_part('template-parts/page-header'); ?>

		<!-- Google Map
		============================================= -->
		<section id="google-map" class="gmap slider-parallax"></section>


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<h3>Fale conosco</h3>

						<div class="contact-widget" id="template-contactform">

							<div class="contact-form-result"></div>

							<?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>

							<!-- <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Nome <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">E-mail <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Telefone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-subject">Assunto <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Mensagem <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar</button>
								</div>

							</form> -->

							<div class="nobottommargin" id="template-contactform">
								
							</div>
						</div>

						<style>
							p:empty {
								display: none
							}
							#template-contactform p {
								margin-bottom: 0
							}
						</style>

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar col_last nobottommargin">

						<address>
							<strong>Endereço:</strong><br>
							<?php echo get_theme_mod('endereco'); ?>
						</address>
						<abbr title="Phone Number"><strong>Phone:</strong></abbr> <?php echo get_theme_mod('telefone'); ?><br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a>

						<div class="widget noborder notoppadding">

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

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->		
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>