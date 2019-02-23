<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Zone
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div id="page" class="site">
        <?php 
            $phone      = get_theme_mod( 'education_zone_phone' );
            $email      = get_theme_mod( 'education_zone_email' );
            $menu_label = get_theme_mod('education_zone_top_menu_label', __('Quick Links','education-zone'));
        ?>
        <div class="mobile-header">
            <div class="container">
                <div class="menu-opener">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> <!-- menu-opener ends -->

                <div class="site-branding">
                    <?php 
                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                            echo '<div class="img-logo">';
                            the_custom_logo();
                            echo '</div><!-- .img-logo -->';
                        } 
                    ?>
                    <div class="text-logo">
                    <?php
                        $site_title =  get_bloginfo( 'name', 'display' );
                        $description = get_bloginfo( 'description', 'display' );

                        if( $site_title ) : ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                        endif;
                    
                       if ( $description ) : ?>
                           <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                       endif; 
                    ?>
                    </div>
                </div> <!-- site-branding ends -->
            </div> <!-- container ends -->

            <div class="mobile-menu">
                <?php get_search_form(); ?>

                <nav class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                <?php 
                    if( has_nav_menu( 'secondary' ) ){ ?>
                        <nav class="secondary-nav" role="navigation"> 
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) ); ?>
                        </nav><!-- #site-navigation -->
                    <?php 
                    }

                    if( $email || $phone ){ ?>
                       <div class="contact-info">
                        <?php 
                            if( $phone ) echo '<a href="tel:'. preg_replace('/\D/', '', $phone) .'" class="tel-link">'. esc_html( $phone ) .'</a>';
                            if( $email ) echo '<a href="mailto:'. sanitize_email( $email ) .'" class="email-link">'. esc_html( $email ) .'</a>';
                        ?>
                        </div> <!-- contact-info ends -->
                    <?php 
                    }
                ?>
            </div>
        </div> <!-- mobile-header ends -->
        <header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <?php 
            if( $phone || $email || has_nav_menu( 'secondary' ) ) { ?>
                <div class="header-top">
                  <div class="container">
                    <?php 
                    if( $email || $phone ){ ?>
                        <div class="top-links">
                            <?php 
                            if( $email ){ ?>
                                <span><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                                </span>
                            <?php 
                            } 
                            if( $phone ){ ?>
                                <span><i class="fa fa-phone"></i><a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><?php echo esc_html( $phone ); ?></a>
                                </span>
                            <?php 
                            } ?>
                        </div>
                    <?php 
                    }
                    if( has_nav_menu( 'secondary' ) ){ ?>
                        <nav id="secondary-navigation" class="secondary-nav" role="navigation">     
                            <a href="javascript:void(0);"><?php echo esc_html( $menu_label ); ?></a>                
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) ); ?>
                        </nav><!-- #site-navigation -->
                    <?php 
                    } ?>
                </div>
            </div>
            <?php 
            } ?>
        
            <div class="header-m">
                <div class="container">
                    <div class="site-branding" itemscope itemtype="http://schema.org/Organization">
                        <?php 
                            if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                                the_custom_logo();
                            } 
                        ?>
                        <?php if ( is_front_page() ) : ?>
                            <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif;
                           $description = get_bloginfo( 'description', 'display' );
                           if ( $description || is_customize_preview() ) : ?>
                               <p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                           endif; 
                        ?>                    
                   </div><!-- .site-branding -->
                   
                    <div class="form-section">
                        <div class="example">                       
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-bottom">
                <div class="container">
                    <nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">                        
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        
    </header><!-- #masthead -->
    
    <?php do_action( 'education_zone_page_header' );

    $enabled_sections = education_zone_get_sections();  

    if( is_home() || ! $enabled_sections || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ 
        $class = is_404() ? 'not-found' : 'row' ;    
        ?>
        <div id="content" class="site-content">
            <div class="container">
                <div class="<?php echo esc_attr( $class ); ?>">
    <?php } 