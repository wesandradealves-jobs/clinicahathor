<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
      	<?php get_template_part('template-parts/page-header'); ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half nobottommargin">
						<div class="error404 center">404</div>
					</div>

					<div class="col_half nobottommargin col_last">

						<div class="heading-block nobottomborder">
							<h4>Ooopps.! A página que você procura não pode ser encontrada.</h4>
							<span>Tente procurar por outro nome.</span>
						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>