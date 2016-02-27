<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?>

	</main><!-- #content -->

	<footer class="site-footer" >
		<div class="wrapper">

			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-ozzeka.png" alt="logo Ozzeka" class="logo-footer"/>
			<div class="footer-container">
				<p class="copy">&copy;<?php echo date("Y"); ?> Ozzeka. <a href="#">Legal informations</a></p>
				<div class="social-links">
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="clear"></div>
			</div>

		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
