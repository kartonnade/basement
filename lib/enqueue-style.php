<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
if( ! function_exists( 'basement_enqueue_style' ) ) {
	function basement_enqueue_style()
	{
		
		// Register fonts stylesheet
		wp_register_style( 'fonts', 'http://fast.fonts.net/cssapi/1769b8a5-1097-4dd8-93dc-391a479703e1.css', array(), '', 'all' );
		wp_register_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300', array(), '', 'all' );

		// Register the main stylesheet
		wp_register_style( 'basement-stylesheet', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
		
    // ie-only style sheet
    wp_register_style( 'basement-ie-only', get_template_directory_uri() . '/css/ie.css', array(), '' );


		wp_enqueue_style( 'fonts' );
		wp_enqueue_style( 'google-fonts' );
		wp_enqueue_style( 'basement-stylesheet' );
		global $is_IE;
    if ($is_IE) {
			wp_enqueue_style('basement-ie-only');
		}
	}
}
add_action( 'wp_enqueue_scripts', 'basement_enqueue_style' );
?>
