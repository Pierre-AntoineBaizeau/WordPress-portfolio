<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio_custom
 */

get_header();

$portfolioColor = get_field('color');

?>

	<main id="primary" class="site-main" style="background-color: <?= $portfolioColor ?> ;">

		<?php
		while ( have_posts() ) :
			the_post();


			
			get_template_part( 'template-parts/content-custom', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Précedent :', 'portfolio-custom' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Suivant :', 'portfolio-custom' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
