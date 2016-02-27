<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package custom
 */

get_header(); ?>
   
	<section class="hero"></section>

	<section class="concept" id="concept">
		<div class="wrapper">
			<h2 class="headline"><?php $hero_headline = get_option( 'hero_headline', false ); echo $hero_headline;  ?></h2>
			<p class="headline-text"><?php $hero_text = get_option( 'hero_headline-text', false ); echo $hero_text;  ?></p>
			<div class="clear"></div>
		</div>
	</section>

	<section class="services" id="services">
		<div class="wrapper">
			<div class="section-header">
				<h2><?php $section1_title = get_option( 'section1_title', false ); echo $section1_title;  ?> <i class="fa fa-dot-circle-o"></i></h2>
				<div class="clear"></div>
			</div>

			<p class="skills-text"><?php $section1_text = get_option( 'section1_text', false ); echo $section1_text;  ?></p>

			<?php

				$args = array( 'post_type' => 'services', 'order' => 'DESC', 'posts_per_page' => 99); 
				$loop = new WP_Query( $args );
				?>

				<?php if($loop->post_count != 0) { ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0'];?>	

				<div class="box-skill" style="background-image: url('<?php echo $url; ?>')">
					<p class="box-skill__title"><?php echo get_the_title(); ?> <i class="fa fa-circle-o"></i></p>
					<p class="box-skill__text"><?php echo get_the_excerpt(); ?></p>
					<p class="box-skill__description"><?php echo get_the_content(); ?></p>
				</div>

				<?php endwhile; ?>

			<?php } ?>
			<?php wp_reset_query(); ?>

			<div class="clear"></div>
		</div>
	</section>

	<section class="philosophy" id="philosophy">
		<div class="wrapper">
			<div class="bordered-box">
				<h2><i class="fa fa-bolt"></i> <?php $section2_title = get_option( 'section2_title', false ); echo $section2_title;  ?></h2>
				<p><?php $section2_text = get_option( 'section2_text', false ); echo $section2_text;  ?></p>
				<a href="mailto:hello@ozzeka.com"><i class="fa fa-angle-right"></i> <?php $section2_cta = get_option( 'section2_cta-label', false ); echo $section2_cta;  ?></a>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="wrapper">

			<div class="contact-left">
				<div class="section-header">
					<h2><?php $form_title = get_option( 'contact-form_title', false ); echo $form_title;  ?></h2>
					<div class="clear"></div>
				</div>

				<p><?php $form_text = get_option( 'contact-form_text', false ); echo $form_text;  ?></p>
				<div class="contact-form"><?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?></div>
			</div>

			<div class="contact-right">
				<div class="section-header">
					<h2><?php $social_title = get_option( 'social_title', false ); echo $social_title;  ?></h2>
					<div class="clear"></div>
				</div>
				<a href="<?php $link_facebook = get_option( 'social-link_facebook', false ); echo $link_facebook;  ?>" class="big-social-link">Facebook <i class="fa fa-facebook"></i></a>
				<a href="<?php $link_twitter = get_option( 'social-link_twitter', false ); echo $link_twitter;  ?>" class="big-social-link">Twitter <i class="fa fa-twitter"></i></a>
				<a href="<?php $link_behance = get_option( 'social-link_behance', false ); echo $link_behance;  ?>" class="big-social-link">Behance <i class="fa fa-behance"></i></a>
				<a href="<?php $link_instagram = get_option( 'social-link_instagram', false ); echo $link_instagram;  ?>" class="big-social-link">Instragram <i class="fa fa-instagram"></i></a>
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="extras" id="extras">
		<div class="wrapper">
			<div class="box-newsletter">
				<div class="section-header">
					<h2><?php $extras_newsletter_title = get_option( 'extras_newsletter_title', false ); echo $extras_newsletter_title;  ?> <i class="fa fa-envelope-o"></i></h2>
					<div class="clear"></div>
				</div>
				<p><?php $extras_newsletter_text = get_option( 'extras_newsletter_text', false ); echo $extras_newsletter_text;  ?></p>
				<div class="newsletter_form"><?php echo do_shortcode( '[contact-form-7 id="6" title="Newsletter"]' ); ?></div>
			</div>

			<div class="box-blog">
				<div class="section-header">
					<h2><?php $extras_blog_title = get_option( 'extras_blog_title', false ); echo $extras_blog_title;  ?> <i class="fa fa-medium"></i></h2>
					<div class="clear"></div>
				</div>
				<p><?php $extras_blog_text = get_option( 'extras_blog_text', false ); echo $extras_blog_text;  ?></p>
				<a href="<?php $extras_blog_medium = get_option( 'extras_blog_medium-link', false ); echo $extras_blog_medium;  ?>"><?php $extras_blog_cta = get_option( 'extras_blog_cta-label', false ); echo $extras_blog_cta;  ?> <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="clear"></div>
		</div>
	</section>

<?php 
get_footer();
