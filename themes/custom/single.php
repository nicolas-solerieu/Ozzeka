<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
