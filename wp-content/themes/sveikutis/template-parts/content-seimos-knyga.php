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
                    <?php if (get_field('seimos_knyga_sukis')) : ?>
                        <p><?php the_field('seimos_knyga_sukis'); ?></p>                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <?php if (have_posts()) : ?>
                    <div class="block">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content() ; ?> 
                        <?php endwhile; ?>
                    </div> 
                <?php endif; ?>
            </div>

            <?php $image = get_field('seimos_knyga_soninis_paveikslelis'); ?>
            <?php if ($image) : ?>
                <div class="col-md-5 col-sm-12">
                    <div class="block work-family-book">
                        <img src="<?php echo $image['url']; ?>" alt='Nėščiųjų ir kūdikių muzikinio sveikatinimo mokyklėlė „Sveikutis“'>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php $book_background_img = get_field('seimos_knygos_isigijimas_fono_paveikslelis'); ?>
<section id="buy-book" style="background: url(<?php echo $book_background_img['url']; ?>) no-repeat; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <div class="section-title">
                        <h2 style="margin: 0px"><?php the_field('seimos_knygos_isigijimas_pavadinimas'); ?></h2>
                        <?php 
                            $book_img = get_field('seimos_knygos_isigijimas_nuotrauka'); 
                            $thumb_img = $book_img['sizes']['family-book'];
                        ?>
                        <img src="<?php echo $thumb_img; ?>" class="img-circle" style="height: 250px; width: 250px" alt="<?php the_title(); ?>">
                    </div>

                    <?php if (get_field('seimos_knygos_isigijimas_turinys')) : ?>
                        <?php the_field('seimos_knygos_isigijimas_turinys'); ?>
                    <?php endif; ?>

                    <?php if (get_field('rekvizitu_mygtuko_pavadinimas')) : ?>
                        <div class="btn btn-default btn-call-to-action" data-toggle="modal" data-target="#requisite"><?php the_field('rekvizitu_mygtuko_pavadinimas'); ?></div>

                        <div id="requisite" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">„<?php the_title(); ?>“</h4>
                                    </div>
                                    <div class="modal-body requisite-modal">
                                        <div class="clearfix">
                                            <div class="requisite-family-book">
                                                <img src="<?php echo $thumb_img; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                            </div>
                                            <div class="requisite-family-book-paragraph"><?php the_field('iskylancio_lango_tekstas'); ?></div>
                                        </div>
                                        <?php the_field('iskylantis_langas_rekvizitai'); ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="audio-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <?php if (get_field('seimos_knygos_klausymasis')): ?>
                    <div class="block">
                        <?php the_field('seimos_knygos_klausymasis'); ?>
                    </div>
                    
                    <section id="contact-form">
                        <!-- <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-sm-12"> -->
                                    <div class="block">
                                        <div class="form-group">
                                            <input class="form-control" id="code" placeholder="Įveskite kodą">
                                        </div>
                                        <div class="form-group">							
                                            <button class="btn btn-default" type="button" onclick="myFunction()">Klausyti</button>
                                            <p id="msg"></p>
                                        </div>
                                    </div>
                                <!-- </div>
                            </div>
                        </div> -->
                    </section>
                
                    <script>
                        function myFunction() {
                            var x, p, text;

                            // Get the value of the input field with id="numb"
                            x = document.getElementById("code").value;
                            p = "iskartosikarta";

                            // If x is Not a Number or less than one or greater than 10
                            if (x == p) {
                                text = "Gero klausymo!";
                                window.open('https://www.youtube.com/playlist?list=PLfypXNVeAeWQX_QextVq9mttJFD8ffV4v');
                            } else {
                                text = "Neteisingas kodas!";
                            }
                            document.getElementById("msg").innerHTML = text;
                        }
                    </script> 
                <?php endif; ?>                    
            </div>

            <?php 
                $book_listen_image = get_field('seimos_knygos_klausymasis_soninis_paveikslelis'); 
                $thumb_listen_image = $book_listen_image['sizes']['book-listening'];
            ?>            
            <?php if ($image) : ?>
                <div class="col-md-5 col-sm-12">
                    <div class="block">
                        <img src="<?php echo $thumb_listen_image; ?>" alt="Nėščiųjų ir kūdikių muzikinio sveikatinimo mokyklėlė 'Sveikutis'">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>