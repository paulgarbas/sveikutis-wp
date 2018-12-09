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
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'footer-primary-menu',
							) );
						?>
					</div>
		
					<div class="footer-copyright">
						<p>
							<br>Copyright &copy; Sveikutis
							<br>Copyright &copy; Rūta Čigriejūtė, piešiniai
						</p>
					</div>           
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
