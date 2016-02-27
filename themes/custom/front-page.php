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
			<h2 class="headline">Make us craft your digital intensity. We believe that great experiences build great brands.</h2>
			<p class="headline-text">We are a team of multi-skilled folks, passionate about creating compelling experiences with the focus on digital inspirations. We had the privilege of working individually with companies such as BMW, L’Oréal, Baccarat, Egosoft, Adverline, Arts square, Superwatch...</p>
			<div class="clear"></div>
		</div>
	</section>

	<section class="services" id="services">
		<div class="wrapper">
			<div class="section-header">
				<h2>This is it <i class="fa fa-dot-circle-o"></i></h2>
				<div class="clear"></div>
			</div>

			<p class="skills-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			
			<div class="box-skill" id="box-1">
				<p class="box-skill__title">Ideas &mdash; <i class="fa fa-lightbulb-o"></i></p>
				<p class="box-skill__text">We are dedicated to make you do the difference</p>
				<p class="box-skill__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="box-skill-nd" id="box-2">
				<p class="box-skill__title">Creativity &mdash; <i class="fa fa-diamond"></i></p>
				<p class="box-skill__text">We provide creative concepts with high quality standards</p>
				<p class="box-skill__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			
			</div>

			<div class="box-skill" id="box-3">
				<p class="box-skill__title">Partners &mdash; <i class="fa fa-group"></i></p>
				<p class="box-skill__text">Talented and inspired partners accross the world</p>
				<p class="box-skill__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			
			</div>
			<div class="box-skill-nd" id="box-4">
				<p class="box-skill__title">Technology &mdash; <i class="fa fa-code"></i></p>
				<p class="box-skill__text">Brand new method and tools to build the most efficient product</p>
				<p class="box-skill__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="philosophy" id="philosophy">
		<div class="wrapper">
			<div class="bordered-box">
				<h2><i class="fa fa-bolt"></i> Live success</h2>
				<p>We are digital craftsman, we bring you the tool you need in our areas of expertise. Get a stunning website, recognition, prestige thanks to a global team of experts.</p>
				<a href="mailto:hello@ozzeka.com"><i class="fa fa-angle-right"></i> Start your project</a>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="wrapper">

			<div class="contact-left">
				<div class="section-header">
					<h2>Get in touch</h2>
					<div class="clear"></div>
				</div>

				<p>Of course Ozzeka is worldwide and available anytime, working on amazing stuffs. Email is the easiest way to get in touch. I am also on Twitter if that is more your thing. Or just shoot us a message through the following form.</p>
				<div class="contact-form"><?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?></div>
			</div>

			<div class="contact-right">
				<div class="section-header">
					<h2>Social</h2>
					<div class="clear"></div>
				</div>
				<a href="#" class="big-social-link">Facebook <i class="fa fa-facebook"></i></a>
				<a href="#" class="big-social-link">Twitter <i class="fa fa-twitter"></i></a>
				<a href="#" class="big-social-link">Behance <i class="fa fa-behance"></i></a>
				<a href="#" class="big-social-link">Instragram <i class="fa fa-instagram"></i></a>
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="extras" id="extras">
		<div class="wrapper">
			<div class="box-newsletter">
				<div class="section-header">
					<h2>Stay tuned <i class="fa fa-envelope-o"></i></h2>
					<div class="clear"></div>
				</div>
				<p>We a band of pro-active fox, follow our latest observation and tips by receiving our non-regular newsletter !</p>
				<div class="newsletter_form"><?php echo do_shortcode( '[contact-form-7 id="6" title="Newsletter"]' ); ?></div>
			</div>

			<div class="box-blog">
				<div class="section-header">
					<h2>Stay sharp <i class="fa fa-medium"></i></h2>
					<div class="clear"></div>
				</div>
				<p>Sometimes, we publish some thaughts on tech and projects we experiment. We post on our medium page.</p>
				<a href="http://www.medium.com">Read our stories <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="clear"></div>
		</div>
	</section>

<?php 
get_footer();
