<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/respond.min.js"></script>
    <![endif]-->
    <?php zee_favicon();?>
    <?php wp_head(); ?>
</head><!--/head-->

<body <?php body_class() ?>>
<?php if(zee_option('zee_theme_layout')=='boxed'){ ?>
<div id="boxed">
    <?php } ?>

    <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"><?php _e('Toggle navigation', ZEETEXTDOMAIN); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" title="The Aquanauts" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"/>
                </a>
            </div>

            <div class="hidden-xs">
                <div class="mas-social-container hidden-sm hidden-md">
                    <div class="mas-social">
                        <div><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/twitter.png"/> <span>Twitter</span></a></div>
                        <div><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/facebook.png"/> <span>Facebook</span></a></div>
                    </div>
                </div>
                <div class="mas-banner-container hidden-sm">
                    <div class="mas-banner">
                        <div class="checkThisEvent">
                            <?php
                            if (is_front_page()) {
                                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home_page_event_view") ) :
                                    dynamic_sidebar( "home_page_event_view" );
                                endif;
                            }
                            ?>
                        </div>
                        <div class="join">JOIN</div>
                        <div class="give">GIVE</div>
                    </div>
                    &nbsp;
                </div>
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'container'       => false,
                            'menu_class'      => 'nav navbar-nav navbar-main',
                            'fallback_cb'     => 'wp_page_menu',
                            'walker'          => new wp_bootstrap_navwalker()
                        )
                    );
                }
                ?>
            </div>

            <div id="mobile-menu" class="visible-xs">
                <div class="collapse navbar-collapse">
                    <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'container'       => false,
                                'menu_class'      => 'nav navbar-nav',
                                'fallback_cb'     => 'wp_page_menu',
                                'walker'          => new wp_bootstrap_mobile_navwalker()
                            )
                        );
                    }
                    ?>
                </div>
            </div><!--/.visible-xs-->
        </div>
    </header><!--/#header-->

    <?php get_template_part( 'sub', 'title' ); ?>

    <?php if( ! is_page() ) { ?>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="primary" class="content-area">
                        <?php } ?>

