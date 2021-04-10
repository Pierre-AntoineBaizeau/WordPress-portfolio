<?php
/*
Template Name: Accueil
*/


get_header();
?>

	<main id="accueil" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-custom', 'page' );


		endwhile; // End of the loop.
        
        ?> 
         <div class="menu_accueil" id="">
            <ul class="menu_accueil">
                <li class="menu_accueil">
                    <?php

                    $items = wp_get_nav_menu_items(
                        get_nav_menu_locations("accueil-menu")["accueil-menu"]
                    );
                    foreach($items as $menuItem) :
                    ?>
        
		            <a class="menu-de-accueil" aria-current="page" href="<?= $menuItem->url ?>"><?= 
		            $menuItem->title; ?></a>
                </li>

        <?php endforeach; ?>
	</main><!-- #main -->

<?php
get_footer();