<?php
/**
 * @author  CurlWare
 * @since   1.0
 * @version 1.0
 */

namespace CurlWare\cwsoon;

define( __NAMESPACE__ . '\NS',    __NAMESPACE__ . '\\' );

$theme_data = wp_get_theme( get_template() );
define( 'CWSOON_THEME_VERSION',     ( WP_DEBUG ) ? time() : $theme_data->get( 'Version' ) );
define( 'CWSOON_THEME_AUTHOR_URI',  $theme_data->get( 'AuthorURI' ) );
define( 'CWSOON_THEME_PREFIX',      'cwsoon' );
define( 'CWSOON_THEME_PREFIX_VAR',  'cwsoon' );
define( 'CWSOON_WIDGET_PREFIX',     'cwsoon' );
define( 'CWSOON_THEME_CPT_PREFIX',  'cwsoon' );
define( 'ALLOW_UNFILTERED_UPLOADS', true );

// DIR
define( 'CWSOON_THEME_BASE_URL',    get_template_directory_uri(). '/' );
define( 'CWSOON_THEME_BASE_DIR',    get_template_directory(). '/' );
define( 'CWSOON_THEME_INC_DIR',     CWSOON_THEME_BASE_DIR . 'inc/' );
define( 'CWSOON_THEME_VIEW_DIR',    CWSOON_THEME_INC_DIR . 'views/' );
define( 'CWSOON_THEME_PLUGINS_DIR', CWSOON_THEME_BASE_DIR . 'inc/plugins/' );