<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
      	<?php get_template_part('template-parts/page-header'); ?>

	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">    
					<?php if(isset($_GET['lang']) && get_field($_GET['lang'])) : ?>
						<?php the_field($_GET['lang']); ?>
					<?php else : ?>  	
						<?php the_content(); ?>	
					<?php endif; ?>
				</div>
			</div>
		</section>
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>