<?php get_header(); ?>
   <?php if ( have_posts () ) : 
      while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/page-header'); ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix" style="width: 100%">

						<div class="single-post nobottommargin">

							<!-- Single Post
							============================================= -->
							<div class="entry clearfix">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php the_title(); ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php the_date(); ?></li>
									<li><a href="#"><i class="icon-user"></i> <?php the_author(); ?></a></li>
									<li><i class="icon-folder-open"></i> 
										<?php 
											foreach ( get_the_terms( $post->ID, ((get_post_type() === 'post') ? 'category' : get_post_type().'_categories') ) as $key => $value) {
												# code...
												?>
												<a href="<?php echo get_term_link($value->term_id); ?>"><?php echo $value->name; ?></a>
												<?php 
											}
										?>
									</li>
									<!-- <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li> -->
									<!-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
								</ul><!-- .entry-meta end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

									<!-- Entry Image
									============================================= -->
									<div class="entry-image alignleft">
										<a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="Blog Single"></a>
									</div><!-- .entry-image end -->

									<?php the_content(); ?>

									<?php if(get_post_type() === 'post') : ?>

										<!-- Tag Cloud
										============================================= -->
										<div class="tagcloud clearfix bottommargin">
											<?php 
												foreach (get_the_tags() as $key => $value) {
													?>
													<a href="<?php echo get_term_link($value->term_id); ?>"><?php echo $value->name; ?></a>
													<?php 
												}
											?>
										</div><!-- .tagcloud end -->

									<?php endif; ?>

									<div class="clear"></div>

									<!-- Post Single - Share
									============================================= -->
									<div class="si-share noborder clearfix">
										<span>Compartilhe:</span>
										<div>
											<div id="share"></div>
											<style>
												.jssocials-share-label {
													display: none
												}
												.jssocials-share {
													margin: 0;
													margin-left: 20px;
												}			
												.jssocials-share a,
												.jssocials-share svg {
													font-size: 1rem;
													color: gray;
												}								
											</style>
										</div>
									</div><!-- Post Single - Share End -->

								</div>
							</div><!-- .entry end -->

							<?php if(get_post_type() === 'post') : ?>

								<!-- Post Navigation
								============================================= -->
								<div class="post-navigation clearfix">

										<div class="col_half nobottommargin">
											<?php previous_post_link( '%link', __( '&lArr; Post Anterior', 'textdomain' ), true ); ?> 
										</div>

										<div class="col_half col_last tright nobottommargin">
											<?php next_post_link( '%link', 'Próximo Post &rArr;', TRUE ); ?>									
										</div> 

								</div><!-- .post-navigation end -->

								<div class="line"></div>

								<!-- Post Author Info
								============================================= -->
								<div class="card">
									<div class="card-header"><strong>Posted by <a href="#"><?php the_author(); ?></a></strong></div>
									<!-- <div class="card-body">
										<div class="author-image">
											<img src="images/author/1.jpg" alt="" class="rounded-circle">
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
									</div> -->
								</div><!-- Post Single - Author End -->

								<div class="line"></div>

								<h4>Veja também:</h4>

								<div class="related-posts clearfix row">

									<?php 
						                $q = new WP_Query(
						                	array(
											    'post_type' => array( 'post' ),
											    'posts_per_page' => -1,
											    'post__not_in' => array (get_the_ID()),
											    'order' => 'DESC',
											    'orderby' => 'menu_order',
												'tax_query' => array(
												    array(
												        'taxonomy' => (get_post_type() === 'post') ? 'category' : get_post_type().'_categories',
												        'terms' => get_the_terms( $post->ID, ((get_post_type() === 'post') ? 'category' : get_post_type().'_categories') )[0]->slug,
												        'field' => 'slug',
												        'include_children' => true,
												        'operator' => 'IN'
												    )
												),										    
											)
						                );

						                while ( $q->have_posts() ) : $q->the_post();
									?>

									<div class="col_half mpost">
										<div class="entry-image">
											<a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>" alt="<?php echo get_the_title(); ?>"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
												<!-- <li><a href="#"><i class="icon-comments"></i> 12</a></li> -->
											</ul>
											<div class="entry-content"><?php echo get_the_excerpt(); ?></div>
										</div>
									</div>

									<?php endwhile; ?>						

									<?php 
									    wp_reset_query();
									    wp_reset_postdata();
									?>								

								</div>

								<style>
									.related-posts {
										margin: 60px auto !important;
									}
									.mpost {
										margin-top: 0;
										padding-top: 0;
										margin-right: 0;
										padding-right: 15px;
										border: 0;
									}
								</style>

							<?php endif; ?>

						</div>

					</div><!-- .postcontent end -->

				</div>

			</div>

		</section><!-- #content end -->		
   <?php endwhile;
   endif; ?>      
<?php get_footer(); ?>