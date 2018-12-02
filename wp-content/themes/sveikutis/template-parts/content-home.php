<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

 ?>

 <!-- Slider Start -->
 <section id="slider" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat 10% 0%; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="block">
                    <?php if( get_field('pavadinimas') ): ?>
                        <h1 class="animated fadeInUp"><?php the_field('pavadinimas'); ?></h1>
                    <?php endif; ?>
                  
                    <?php if( get_field('apibudinimas') ): ?>
                        <p class="animated fadeInUp"><?php the_field('apibudinimas'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wrapper Start -->
<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="block">
                    <div class="section-title">
                        <?php if( get_field('apie_mus_pavadinimas') ): ?>
                            <h2><?php the_field('apie_mus_pavadinimas'); ?></h2>
                        <?php endif; ?>
                        
                        <?php if( get_field('apie_mus_sukis') ): ?>
                            <h3><i><?php the_field('apie_mus_sukis'); ?></i></h3>
                        <?php endif; ?>
                    </div>  

                    <?php while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 text-center">
                <?php 
                    $side_image = get_field('soninis_paveikslelis');
                    $size = 'full'; 
                ?>
                    
                <?php if($side_image) : ?>
                    <div class="block">
                        <div class="img-decoration">
                            <?php echo wp_get_attachment_image( $side_image, $size ); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php 
                    $audio_file = get_field('radijo_laida');
                    $url = wp_get_attachment_url($audio_file);
                ?>
                <?php if($audio_file) : ?>
                    <div class="radio-show">
                        <?php if (get_field('radijo_laidos_pavadinimas')) : ?>
                            <p><b><?php the_field('radijo_laidos_pavadinimas'); ?></b></p>
                        <?php endif; ?>

                        <audio class="radio-show-audio" controls>
                            <source src="<?php echo $url; ?>">
                            Jūsų naršyklė nepalaiko audio elemento.
                        </audio> 
                    </div>
                <?php endif; ?>
            </div> 
        </div>
    </div>
</section>

<section id="feature">
    <div class="container">
        <?php if( get_field('musu_komanda_pavadinimas') ): ?>
            <div class="row team">
                <div class="col-md-12 col-sm-12">
                    <h2><?php the_field('musu_komanda_pavadinimas'); ?></h2>
                </div>
            </div>
        <?php endif; ?>

        <?php 
            $args = array(
                'post_type' => 'komanda',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            $posts = get_posts($args); 
        ?>
        <div class="row">
            <?php foreach ($posts as $post) : $title = $post->post_title; ?>
                <div class="col lecturer-block">
                    <div class="lecturer">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="lecturer-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'homepage-lecturer'); ?>" alt="<?php the_title(); ?>">
                                </div>
                            <?php endif; ?>

                            <h2><?php the_title(); ?></h2>

                            <?php $terms = get_the_terms(get_the_ID(), 'veiklos'); ?>
                            
                            <?php if ( !empty($terms)) : ?>
                                <?php foreach($terms as $term): ?>
                                    <p><i class="fas fa-check"></i><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </a>
                    </div> 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>