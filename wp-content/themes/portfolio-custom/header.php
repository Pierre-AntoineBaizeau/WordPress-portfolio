<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio_custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Martel:wght@300;400;700&family=Montserrat:wght@400;500;600;700&family=Palanquin:wght@300;400;500;600;700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class('padding-menu'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-pa">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
		<?php
		$items = wp_get_nav_menu_items(
			get_nav_menu_locations("main-menu")["main-menu"]
		);
		foreach($items as $menuItem) :
		?>
		  <a class="nav-link" aria-current="page" href="<?= $menuItem->url ?>"><?= 
		  $menuItem->title; ?></a>
        </li>

        <?php endforeach; ?>

      </ul>
     
    </div>
  </div>
</nav>

<section class="header-logo">
	<?php the_custom_logo(); ?>
</section>

</header>


	
