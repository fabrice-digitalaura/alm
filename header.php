<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alamaree
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Nothing+You+Could+Do|Raleway|Seaweed+Script" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="site-container" class="site-container"><!-- #site-container : pour supprimer le scroll horizontal -->
    <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alm' ); ?></a>

            <header id="masthead" class="site-header">
                    <div id="headline" class="site-headline">
                        <span id="horaires">Ouvert 24h/24 du lundi au vendredi</span>
                        <span id="adresse">2, place des Pecheurs, 94150 Rungis (Val de Marne)</span>
                        <span id="telephone">+33 (0)1 46 86 90 90</span>
                        <ul class="headline-menu">
                            <li class="heandline-menu-01"><a href="http;//localhost:8080/">Navette</a></li>
                            <li class="heandline-menu-02"><a href="http;//localhost:8080/">Ticket d'accès</a></li>
                        </ul>
                    </div><!-- #site-headline -->
                    <div id="header-wrapper" class="header-wrapper">
                        <div id="site-burger" class="site-burger"></div>
                        <div class="site-branding">
                                <?php
                                the_custom_logo();
                                if ( is_front_page() && is_home() ) : ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php else : ?>
                                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                                endif;

                                $description = get_bloginfo( 'description', 'display' );
                                if ( $description || is_customize_preview() ) : ?>
                                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                <?php
                                endif; ?>
                        </div><!-- .site-branding -->

                        <nav id="site-navigation" class="main-navigation">
                                <?php
                                    wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'menu_id'        => 'primary-menu',
                                    ) );
                                ?>
                        </nav><!-- #site-navigation -->
                    </div>
            </header><!-- #masthead -->

            <div id="content" class="site-content">
