<?php
/**
 * @author  CurlWare
 * @since   1.0
 * @version 1.0
 */

 add_editor_style( 'style-editor.css' );

 if ( !isset( $content_width ) ) {
	$content_width = 1200;
}

class cwsoon_Main{
    public $theme = "cwsoon";
    public $action = "CWSOON_THEME_init";

    public function __construct(){
        add_action( 'after_setup_theme', array( $this, 'load_textdomain' ) );
        add_action( 'admin_notices',     array( $this, 'plugin_usc_post_date_notices' ) );
        $this->includes();	
    }

    public function load_textdomain(){
		load_theme_textdomain( $this->theme, get_template_directory() . '/languages' );
	}

    public function includes(){
		do_action( $this->action );
		require_once get_template_directory() . '/inc/constants.php';
		// require_once get_template_directory() . '/inc/includes.php';
	}

    public function plugin_usc_post_date_notices() {
		$plugins = array();    

		if ( defined( 'cwsoon_Core' ) ) {
			if ( version_compare( cwsoon_Core, '1.0', '<' ) ) {
				$plugins[] = 'cwsoon Framework';
			}
		}

		foreach ( $plugins as $plugin ) {
			$notice = '<div class="error"><p>' . sprintf( __( "Please usc_post_date plugin <b><i>%s</b></i> check to our latest version plugins otherwise some functionalities  not working. You can usc_post_date it from <a href='%s'>here</a>", 'cwsoon' ), $plugin, menu_page_url( 'cwsoon-install-plugins', false ) ) . '</p></div>';
			echo wp_kses( $notice, 'alltext_allow' );
		}
	}



}

new cwsoon_Main;