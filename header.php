<?php
/**
 * @author  CurlWare
 * @since   1.0
 * @version 1.0
 */
// use CurlWare\cwsoon\cwsoon;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
        get_template_part( 'inc/preloader' );
    ?>
    <div id="wrapper" class="wrapper overflow-hidden">
        <div id="masthead" class="site-header">
            <header class="sc-header-section" id="sc-header-sticky">
                <div class="sc-header-content sc-header-content-two">

                     <div class="container">
                        <div class="row align-items-center justify-content-between p-z-idex">
                            <div class="col-lg-12 col-12 header-option">
                                <div class="sc-menu-inner d-flex align-items-center">
                                    <!-- Theme Logo -->
                                    <div class="sc-header-logo">
                                        <?php
                                        if (has_custom_logo()) {
                                            the_custom_logo();
                                        } elseif (!has_custom_logo()) {
                                        ?>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() ) . '/assets/images/logo-black.png'; ?>" alt="<?php esc_attr_e('Logo', 'spria'); ?>"></a>
                                        <?php
                                            } ?>
                                    </div>
                                    <!-- Theme Menu -->
                                    <div class="sc-main-menu d-lg-block d-none">
                                        <?php 
                                            if (has_nav_menu('primary')) {
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'primary',
                                                        'menu_class'     => 'list-gap main-menu',
                                                        'container'      => 'ul',
                                                    )
                                                );
                                            }
                                            ?>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="sc-menu-select-box d-flex align-items-center justify-content-end">
                                    <div class="sc-hambagur-icon sc-mr-20">
                                        <a id="canva_expander" href="#" class="nav-menu-link menu-button">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <?php
            // if ( spria::$has_banner == '1' || spria::$has_banner != "off" ) {
            //     get_template_part( 'framework/content', 'banner' ); 
            // }
            
        ?>
        