		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo (isset($_GET['lang'])) ? ($_GET['lang']==='en') ? 'English Version' : 'Versión en Español' : get_the_title(); ?></h1>

				<?php if(!isset($_GET['lang'])) : ?>
					<?php get_template_part('template-parts/breadcrumb'); ?>
				<?php endif; ?>
			</div>

		</section><!-- #page-title end -->