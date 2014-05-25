<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nickrosen
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/ifq5ioo.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<header>
    <h1 class="visuallyhidden"><?php bloginfo('name'); ?></h1>
		<nav class="nav" role="navigation">
      <h1 class="visuallyhidden">Navigation</h1>
      <a href="#" class="nav__toggle">Show menu</a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav__list' ) ); ?>
		</nav>
	</header>
