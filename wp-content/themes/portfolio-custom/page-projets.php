<?php
/*
Template Name: portfolio
*/


get_header(); ?>
<main id="primary" class="site-main">

<?php
if ( have_posts() ) : ?>

    <div class="row ">
        
    

 <?php $loop = new WP_Query( array( 'post_type' => 'portfolio') ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
        <div class="card-article row ">

            <div class="card-article-img col-md-7 ">
            <a href="<?php the_permalink() ?>">
                    <?php portfolio_custom_post_thumbnail(); ?>
            </a>
            </div>

            <div class="card-article-content col-md-5">

                    <h1><?php the_title() ?></h1>
                    
                    <!--<p><?php the_excerpt() ?></p> -->

                    <div class="categorie"> <?php
				        the_terms( $post->ID, 'environnement',  '<h4>Catégorie : </h4>' );
				    ?> </div> 
                    
                    <br>
                    <div class="lire-plus">
                        <a href="<?php the_permalink() ?>">lire plus</a>
                    </div>
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

