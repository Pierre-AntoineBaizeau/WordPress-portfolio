<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio_PA
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			$portfolioColor = get_field('color');
			$portfolioClient = get_field('client');

		?>

		<div class="portfolio-header">
			<h1><?php the_title(); ?></h1>
			<?php if(!empty($portfolioClient)) : ?>
			<p>Bonjour : <?= $portfolioClient ?></p>
		</div>
		<div class="portfolio-content">
			<?php the_content(); ?>
		</div>

		<?php	
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
