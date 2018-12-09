<?php 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if( get_field('musu_komanda_pavadinimas', 5) ): ?>
			<?php $book_background_img = get_field('seimos_knyga_fono_paveikslelis', 5); ?>
				<section id="global-header" style="background: url(<?php echo $book_background_img['url']; ?>) no-repeat; background-size: cover; background-attachment: fixed;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="block">
									<h1><?php the_field('musu_komanda_pavadinimas', 5); ?></h1>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
            
            <div class="container">
                <div class="row">
					<?php if (has_post_thumbnail()) : ?>
						<div class="col-md-4 col-sm-12">
							<div class="about-lecturer-img">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'komanda-single'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>">
							</div>
						</div>
					<?php endif; ?>
					
					<div class="col-md-8 col-sm-12 about-lecturer">
						<h2><?php echo get_the_title(); ?></h2>
						<?php $terms = get_the_terms(get_the_ID(), 'veiklos'); ?>
                       
						<?php if ( !empty($terms)) : ?>
							<ul class="about-lecturer-classes">	
								<?php foreach($terms as $term): $term_link = get_term_link($term); ?>
									<li><b><i class="fas fa-check"></i><a href="<?php echo get_term_link($term->term_id, 'veiklos'); ?>"><?php echo $term->name; ?></a></b></li>
								<?php endforeach; ?>
							</ul> 
						<?php endif; ?>
                        <?php if (get_field('citata')) : ?>
                            <blockquote>
                                <i>
                                    <?php the_field('citata'); ?>
                                </i>
                            </blockquote>
                        <?php endif; ?>

                        <?php
                            if (get_post()->post_content) : ?>
                                <div class="about-lecturer-section">
                                    <?php echo get_post()->post_content; ?>
                                </div>    
                            <?php endif; ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

?>