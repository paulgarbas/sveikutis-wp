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
        <!-- <div id="contact-box" class="row">
            <div class="col-md-6 col-sm-12">
            <div class="block">
                <h2>Susisiekite su mumis</h2>
                <ul class="lectures-contact">
                <li>
                    <a href="all-classes/pregnant.html">Nėščiųjų muzikinis ugdomasis sveikatinimas</a> 
                    <div><i class="fas fa-phone"></i>+370 659 33041</div>
                </li>
                <li>
                    <a href="all-classes/mazutukai.html">„Mažutukų dainos”. Ankstyvasis muzikinis ugdomasis sveikatinimas</a> 
                    <div><i class="fas fa-phone"></i>+370 659 33041, +370 620 20870</div>
                </li>
                <li>
                    <a href="all-classes/taputukai.html">„Taputukų dainos”. Ankstyvasis muzikinis ugdomasis sveikatinimas</a> 
                    <div><i class="fas fa-phone"></i>+370 659 33041, +370 620 20870</div>
                </li>
                <li>
                    <a href="all-classes/orff.html">Ansamblinis muzikavimas Karlo Orfo instrumentariumu vaikams</a> 
                    <div><i class="fas fa-phone"></i>+370 620 20870</div>
                </li>
                <li>
                    <a href="all-classes/piano.html">Fortepijono pamokos suaugusiems</a> 
                    <div><i class="fas fa-phone"></i>+370 603 81702</div>
                </li>
                <li>
                    <a href="all-classes/vocal.html">Vokalo pamokos suaugusiems ir vaikams</a> 
                    <div><i class="fas fa-phone"></i>+370 620 20870</div>
                </li>
                <li>
                    <a href="all-classes/workers.html">„Darboholikų” muzikinis ugdomasis sveikatinimas</a> 
                    <div><i class="fas fa-phone"></i>+370 659 33041</div>
                </li>
                <li>
                    <a href="all-classes/music-therapy-babies.html">Aktyvioji muzikos terapija kūdikiams ir vaikams, turintiems raidos sutrikimų</a> 
                    <div><i class="fas fa-phone"></i>+370  640 40510</div>
                </li>
                <li>
                    <a href="all-classes/music-therapy-children.html">Muzikos terapija specialiųjų poreikių turintiems vaikams</a> 
                    <div><i class="fas fa-phone"></i>+370  670 83240</div>
                </li>
                <li>
                    <a href="all-classes/help-yourself.html">Praktinių mokymų ciklas „Padėk sau, pažindamas save”</a> 
                    <div><i class="fas fa-phone"></i>+370 614 14063</div>
                </li>
                <li>
                    <a href="all-classes/babies-massage.html">„Prisilietimo galia”. Glostomasis masažas kūdikiams „Drugelio sparnas”</a> 
                    <div><i class="fas fa-phone"></i>+370 614 14063</div>
                </li>
                <li>
                    <a href="all-classes/adult-relationship.html">Paskaitų ciklas paaugliams „Apie suaugusių santykius atvirai”</a> 
                    <div><i class="fas fa-phone"></i>+370 614 14063</div>
                </li>
                <li>
                    <a href="all-classes/psychology-group.html">Grupinės teminės paskaitos aktualiomis psichologinėmis temomis</a> 
                    <div><i class="fas fa-phone"></i>+370 601 00538</div>
                </li>
                </ul>


                <ul class="address-block">
                <li>
                    <i class="fas fa-map-marker-alt"></i>Panerių g. 37/14P korpusas, Vilnius
                </li>
                <li>
                    <i class="far fa-envelope"></i>info@sveikutis.lt
                </li>
                </ul>
                <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/sveikutis/"><i class="fab fa-facebook-square"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="block">
                <h2>Mes esame čia</h2>
                <iframe class="iframe-map-find-us" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.29497271027!2d25.26938959541112!3d54.66923625644569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd946f499e767b%3A0xad65333c33739b4e!2s14P%2C+Paneri%C5%B3+g.+37%2C+Vilnius+03209!5e0!3m2!1slt!2slt!4v1529152861844" width="600" height="450" style="border:0" allowfullscreen></iframe>
                <div id="find-us"><strong>„Sveikutį" rasite:</strong></div>
                <ul class="find-us-description">
                <li>važiuojant iš miesto centro į Vilniaus oro uostą, jūs pravažiuojate „Spartos" sankryžą, o kita sankryža yra Švitrigailos ir Panerių</li>
                <li>Jūsų dešinėje bus „IRIS" parduotuvė, tad ir sukate į dešinę pusę</li>
                <li>už ~ 25 metrų bus įvažiavimas prie „IRIS", o priešais – įvažiavimas gylyn į kiemą (matyti užrašas „Metalo gaminiai")</li>
                <li>kai įvažiuosite gylyn (~25 metrus) iš karto sukite į kairę (pamatysite žalią renovuotą pastatą, kuris priklauso įmonei „BALTVITA"). Ant jo parašyta „14 P"</li>
                <li>pasistatykite automobilį kur patogu, nes parkavimas nemokamas</li>
                <li>prie „14 P" pažymėto žalio pastato durų spauskite 402 mygtuką su užrašu „Sveikutis”</li>
                <li>dabar erdviais laiptas pakilkite į ketvirtą aukštą (nemokama mankšta prieš užsiėmimus) ir, žvilgtelėję į dešinę pusę, pamatysite 402 kabinetą, o ten – </li>
                <li>mes Jūsų laukiame<span class="smile">&#9786;</span></li>
                </ul>
            </div>
            </div>
        </div> -->
    </div>
</section>