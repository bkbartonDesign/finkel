<?php
    function wpb_adding_scripts() {
        wp_register_script('scriptjs', get_theme_root_uri() . '/blankslate-child/js/script.js', array('jquery'),'1.1', true);
        wp_enqueue_script('scriptjs','typekitjs');
    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
    
    function add_typekit() {
        wp_register_script('typekitjs', get_theme_root_uri() . '/blankslate-child/js/typekit.js', null,'1.1', true);
        wp_enqueue_script('typekitjs');
    }
    add_action( 'wp_enqueue_scripts', 'add_typekit' );  
    
    function custom_style_sheet() {
        wp_enqueue_style( 'normalize', get_theme_root_uri() . '/blankslate-child/normalize.css' );
    }
    add_action('wp_enqueue_scripts', 'custom_style_sheet');
    
    function mq_css() {
        wp_enqueue_style( 'finkel-styles', get_theme_root_uri() . '/blankslate-child/finkelStyle.css' );
    }
    add_action('wp_enqueue_scripts', 'mq_css');

    function finkelImage($imgName){
        if($imgName != ""){
            $path = get_template_directory_uri()."-child/img/";
            return $path.$imgName;
        }
        return "imageNameNotSet";
    }
?>
