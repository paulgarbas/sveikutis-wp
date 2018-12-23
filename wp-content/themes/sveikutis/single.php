<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sveikutis
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section id="global-header" class="contact-title" style="background: url(<?php echo get_the_post_thumbnail_url(221); ?>) no-repeat; background-size: cover; background-attachment: fixed;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="block">
								<h1><?php echo get_the_title(221); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="row">
					<div class="col-lg-6 news-inner-latest">
						<div class="news-inner-img">
							<?php if ( has_post_thumbnail() ): ?>
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'news-inner-big'); ?>" alt="Naujiena">
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/sveikutis_2.jpg" alt="Naujiena">		
							<?php endif; ?>
						</div>

						<h4>
							<strong><?php echo get_the_date(); ?></strong>
						</h4>

						<h2>
							<strong><?php the_title(); ?></strong>
						</h2>	

						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="news-inner-latest-content">
									<?php the_content() ; ?> 
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<div class="col-lg-12 news-facebook-comments">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = 'https://connect.facebook.net/lt_LT/sdk.js#xfbml=1&version=v3.2';
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							
							<div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="100%" data-numposts="5"></div>
						</div>
					</div>
					
					<?php
						$args = array( 
							'posts_per_page'    => 4, 
							'post_type'         => 'post',
							'post_status'       => 'publish',
							'orderby'           => 'date',
							'order'             => 'DESC',
							'post__not_in'      => array(get_the_ID()),
						);
						$posts = new WP_Query( $args );
					?>

					<div class="col-lg-6 news-inner-all">
						<div class="row">
							<div class="col-lg-12 news-inner-all-title">
								<h3><strong>Kitos naujienos</strong></h3>
							</div>
						</div>

						<?php if ( $posts->have_posts() ) : ?>
							<div class="row">
								<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
									<div class="col-md-6 col-lg-12">
										<div class="news-inner-all-single">
											<div class="news-inner-all-img">
												<a href="<?php echo get_permalink(); ?>">
													<?php if ( has_post_thumbnail() ): ?>
														<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'news-small'); ?>" alt="Naujiena">
													<?php else: ?>
														<img src="<?php echo get_template_directory_uri(); ?>/img/sveikutis_2.jpg" alt="Naujiena">	
													<?php endif; ?>
												</a>
											</div>
				
											<div>
												<h4><strong><?php echo get_the_date(); ?></strong></h4>
												<h3>
													<a href="<?php echo get_permalink(); ?>">
														<strong><?php the_title(); ?></strong>
													</a>
												</h3>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							</div>	
						<?php endif; ?>
					</div>	
				</div>
			</div>
		</main>
	</div>

<?php
get_footer();
