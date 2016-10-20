
<?php 
add_action( "wp_enqueue_scripts", "enqueue_parent_styles" );

function enqueue_parent_styles() {
   wp_enqueue_style( "parent-style", get_template_directory_uri()."/style.css" );
}

add_filter( "wp_image_editors", "change_graphic_lib" );

function change_graphic_lib($array) {
return array( "WP_Image_Editor_GD", "WP_Image_Editor_Imagick" );
}



//add_filter( "twentysixteen_custom_header_args", "wpb_new_header_size");
//add your parameters in - https://codex.wordpress.org/Custom_Headers
function wpb_new_header_size($array) {
		$array = array (
		"default-text-color"     => $default_text_color,
		"width"                  => 2000,
		"height"                 => 200,
		"flex-height"            => true,
		"wp-head-callback"       => "twentysixteen_header_style",
	);
		return $array;
}

function wpb_add_google_fonts() {

wp_enqueue_style( "wpb-google-fonts", "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300", false ); 
}

add_action( "wp_enqueue_scripts", "wpb_add_google_fonts" );



?>
