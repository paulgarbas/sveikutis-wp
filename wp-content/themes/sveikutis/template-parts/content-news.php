<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

 ?>

<section id="global-header" class="contact-title" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $args = array( 
        'posts_per_page'    => 9, 
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'orderby'           => 'date',
        'order'             => 'DESC',
        'paged'             => (get_query_var('paged')) ? get_query_var('paged') : 1
    );
    $posts = new WP_Query( $args );
?>

<?php if ( $posts->have_posts() ) : ?>
    <section class="news-all">
        <div class="container">
            <div class="row">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <div class="col-md-6 col-lg-4 news-all-single">
                        <div class="news-all-single-img">
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <div class="row-m">
                <div class="col-md-12">
                    <?php wp_pagenavi( array( 'query' => $posts )); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
