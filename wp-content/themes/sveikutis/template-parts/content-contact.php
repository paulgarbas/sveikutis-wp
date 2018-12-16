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
                    <?php if (get_field('kontaktai_pavadinimas')) : ?>
                        <h1><?php the_field('kontaktai_pavadinimas'); ?></h1>                        
                    <?php else : ?>
                        <h1><?php echo get_the_title(); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-form">
    <div class="container">
        <div class="row">
            <?php echo do_shortcode('[contact-form-7 id="284" title="Contact form 1"]'); ?>
        </div>
        <div id="contact-box" class="row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <?php if (get_field('kontaktai_pavadinimas')) : ?>
                        <h2><?php the_field('kontaktai_pavadinimas'); ?></h2>                        
                    <?php else : ?>
                        <h2><?php echo get_the_title(); ?></h2>
                    <?php endif; ?>

                    <?php 
                        $terms = get_terms(array(
                            'taxonomy' => 'veiklos',
                            'hide_empty' => true,
                        ));
                    ?>
                    
                    <ul class="lectures-contact">
                        <?php foreach($terms as $term) : ?>                
                            <li>
                                <a href="<?php echo get_term_link($term->term_id, 'veiklos'); ?>"><?php echo $term->name; ?></a> 
                                <?php if (have_rows('veikla_kontaktai', $term)) : ?>
                                    <div><i class="fas fa-phone"></i>
                                        <?php while (have_rows('veikla_kontaktai', $term)) : the_row(); ?>
                                            <?php the_sub_field('veikla_kontaktai_tel');  ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>                    
                    </ul>


                    <ul class="address-block">
                        <?php if (get_field('kontaktai_adresas')) : ?>
                            <li>
                                <i class="fas fa-map-marker-alt"></i><?php the_field('kontaktai_adresas'); ?>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('kontaktai_email')) : ?>  
                            <li>
                                <i class="far fa-envelope"></i><?php the_field('kontaktai_email'); ?>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <ul class="social-icons">
                        <?php if (get_field('kontaktai_facebook_url')) : ?>                          
                            <li>
                                <a href="<?php echo the_field('kontaktai_facebook_url'); ?>"><i class="fab fa-facebook-square"></i></a>
                            </li>
                        <?php endif; ?>                        
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <?php if (get_field('kontaktai_zemelapio_pavadinimas')) : ?>                      
                        <h2><?php the_field('kontaktai_zemelapio_pavadinimas'); ?></h2>
                    <?php endif; ?>      
                      
                    <?php if (get_field('kontaktai_zemelapis')) : ?>   
                        <?php the_field('kontaktai_zemelapis'); ?>                                       
                    <?php endif; ?>    
                    
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content() ; ?> 
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>