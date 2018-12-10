<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

 ?>

<section id="global-header" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat; background-size: cover; background-attachment: fixed;">
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
    $terms = get_terms(array(
        'taxonomy' => 'veiklos',
        'hide_empty' => true,
    ));
?>
<main>
    <div class="container">
        <div class="row all-classes-outer">
            <?php foreach($terms as $term) : ?>                
                <div class="col-md-12">
                    <a href="<?php echo get_term_link($term->term_id, 'veiklos'); ?>">
                        <div class="all-classes">
                            <?php echo $term->name; ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>                    
        </div>
    </div>
</main>