<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cop
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbox">

	<div class="navbox-centrador">

	<div class="row">
		<div class="col-lg-3">
<h1><a href=""><img src="<?php bloginfo('template_url'); ?>/img/logo%20COP.png" alt="logo%20COP" width="271" height="91"></a></h1>
		</div>
		<!—--- cierre LG-12 ---->
		
		<div class="col-lg-9">
		<ul id="menubox">
			<li><a href="">Nuestros Servicios</a></li>
			<li><a href="">Atención al Paciente</a></li>
			<li><a href="">Nuestros Médicos</a></li>
			<li><a href="">Tratamientos</a></li>
			<li><a href="">Dónde Estamos</a></li>
			<li><a href=""><i class="fa fa-search fa-fw"></i></a></li>
		</ul>
		</div>
		
	</div>
<!-- cierre ROW -->
	</div>
</div>
<!—-
	cierre navbox
—->
		<?php 
    echo do_shortcode("[metaslider id=35]"); 
		 ?>


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cop' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<!-- <?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cop' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> -->
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		
		
	 	
