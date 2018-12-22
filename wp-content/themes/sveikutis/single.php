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
					<div class="col-lg-12 news-inner-latest">
						<h2>
							<strong><?php the_title(); ?></strong>
						</h2>	

						<h4>
							<strong><?php echo get_the_date(); ?></strong>
						</h4>

						<div class="news-inner-img">
							<?php if ( has_post_thumbnail() ): ?>
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'news-inner-big'); ?>" alt="Naujiena">
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/sveikutis_2.jpg" alt="Naujienos">		
							<?php endif; ?>
						</div>

						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<?php the_content() ; ?> 
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

				<?php
					$args = array( 
						'posts_per_page'    => 3, 
						'post_type'         => 'post',
						'post_status'       => 'publish',
						'orderby'           => 'date',
						'order'             => 'DESC',
						'post__not_in'      => array(get_the_ID()),
					);
					$posts = new WP_Query( $args );
				?>
				<div class="row news-inner-other">
					<div class="col-lg-12">
						<h3><strong>Kitos naujienos</strong></h3>
					</div>
				</div>

				<?php if ( $posts->have_posts() ) : ?>
					<div class="row news-inner-all">
						<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
							<div class="col-md-4">
								<div class="news-inner-all-single">
									<div class="news-inner-all-img">
										<a href="<?php echo get_permalink(); ?>">
											<?php if ( has_post_thumbnail() ): ?>
												<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'news'); ?>" alt="News">
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/sveikutis_2.jpg" alt="Naujienos">		
											<?php endif; ?>
										</a>
									</div>
						
									<h4><strong><?php echo get_the_date(); ?></strong></h4>
									<h3><strong><?php the_title(); ?></strong></h3>
									<p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
									<a href="<?php echo get_permalink(); ?>" class="btn-news">Skaityti daugiau</a>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>	
				<?php endif; ?>
			</div>
		</main>
	</div>

<?php
get_footer();
