<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sveikutis
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-manu">
						<!-- <ul>
							<li><a class="page-scroll" href="#slider">Į pradžia</a></li>
							<li><a class="page-scroll" href="contact.php">Kontaktai</a></li>
						</ul> -->
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'footer-primary-menu',
							) );
						?>
					</div>
					<!-- <p>
					<br>Copyright &copy; Sveikutis
					<br>Copyright &copy; Rūta Čigriejūtė, piešiniai
					</p>  -->
					<div>
						<?php if( have_rows('autoriniu_teisiu_sarasas') ): ?>
							<?php while ( have_rows('autoriniu_teisiu_sarasas') ) : the_row(); ?>
								<p><?php the_sub_field('autorines_teises'); ?></p>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>           
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
