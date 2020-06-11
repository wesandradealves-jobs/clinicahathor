<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/page-header'); ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

						<?php 

		                $q = new WP_Query(
		                	array(
							    'post_type' => array( 'post' ),
							    'posts_per_page' => -1,
							    'order' => 'ASC',
							    'orderby' => 'menu_order'
							)
		                );

						while ( $q->have_posts() ) : $q->the_post(); ?>

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>" data-lightbox="image"><img class="image_fade" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="<?php echo get_the_title(); ?>"></a>
							</div>
							<div class="entry-title">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php the_date(); ?></li>
								<!-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li> -->
								<!-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
							</ul>
							<div class="entry-content">
								<p><?php echo (get_the_excerpt()) ? get_the_excerpt() : get_the_content(); ?></p>
								<a href="<?php the_permalink(); ?>"class="more-link">Leia mais</a>
							</div>
						</div>		

						<?php endwhile; ?>						

						<?php 
						    wp_reset_query();
						    wp_reset_postdata();
						?>

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					<!-- <ul class="pagination nobottommargin">
						<li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
					</ul> -->

				</div>

			</div>

		</section><!-- #content end -->      	
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>