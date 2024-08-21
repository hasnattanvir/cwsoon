<?php
/**
 * @author  SoftCoders
 * @since   1.0
 * @version 1.0
 */
// use SoftCoders\spria\spria;
// use SoftCoders\spria\Helper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
       // get_template_part( 'inc/preloader' );
    ?>
	<div id="wrapper" class="wrapper">
		<div id="main_content">
			<section class="error-wrap-layout section-padding bg-image">
				<div class="container">
					<div class="item-logo">
						<?php get_template_part( 'framework/header/logo', 1 ); ?>
					</div>
					<h1>404</h1>
					<h1 class="main-title"><?php //echo esc_html( spria::$options['error_page_title'] ); ?></h1>
					<h2 class="sub-title"><?php //echo esc_html( spria::$options['error_page_subtitle'] ); ?></h2>
					<div class="error-page-btn pt-5">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="item-btn btn-fill style-one" tabindex="0"><?php //echo esc_html( spria::$options['error_buttontext'] );?></a>
                    </div>
				</div>	
			</section>		
		</div>
	</div>
	<?php wp_footer(); ?>

</body>
</html>