<?php
/*
Template Name: Article
*/


get_header();

?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) : ?>

            <div class="row ">
                
            <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

            ?>
            
                <div class="card-article row ">

                    <div class="card-article-img col-md-7 ">
                    		<?php portfolio_custom_post_thumbnail(); ?>
                    </div>

                    <div class="card-article-content col-md-5">

							<h1><?php the_title() ?></h1>
							<!--<p><?php the_excerpt() ?></p> -->
							<br>
							<a href="<?php the_permalink() ?>">lire plus</a>

                    </div>
					<div class="color-degrade"></div>

                </div>

            <?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation(); ?>

            <!-- end row -->
            </div>

		<?php endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
