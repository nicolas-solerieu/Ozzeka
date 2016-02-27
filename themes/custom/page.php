<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package custom
 */

get_header(); ?>

	<div>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="entry-header"><?php the_title(); ?></div>
		<div class="entry-content"><?php the_content(); ?></div>

	<?php endwhile; // End of the loop. ?>

	</div>

<?php
get_footer();
