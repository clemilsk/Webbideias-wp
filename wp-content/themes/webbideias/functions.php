<?php

require get_template_directory() . '/custom_post_type/logo.php';
require get_template_directory() . '/custom_post_type/header.php';
require get_template_directory() . '/custom_post_type/quem-somos.php';
require get_template_directory() . '/custom_post_type/footer.php';
require get_template_directory() . '/nav-menu/menu_principal.php';

add_image_size( 'home-top', 150, 40, TRUE );

//Function insert links: css and js
function webbideias_register_scripts() {
    
    //Template Main JS File
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

	// Add tema-webbideias CSS.
	wp_enqueue_style( 'tema-webbideias', get_template_directory_uri() . '/assets/css/tema-webbideias.css', array(), '1.0', 'all' );

    // Add tema-webbideias google-fonts.
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', array(), null );

}
add_action( 'wp_enqueue_scripts', 'webbideias_register_scripts' );

//Config function of thema
function configuracaon_theme() {

    //registro de menu
    register_nav_menus( array(
        'primary' => 'Top Menu',
        'footer' => 'Footer Menu'
    ));
    
    //Suporte a Minhatura do post
    add_theme_support( 'post-thumbnails');
    //Format post 
    add_theme_support( 'post-formats', array( 'audio', 'video', 'image', 'gallery', ) );
    	
    //add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    //Suporte a Cabeçalho
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'configuracaon_theme' );

//Function favicon insert into wp_head
function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/assets/favicon.png" />';
}
add_action('wp_head', 'add_favicon');

//Function Widgets
function wpwebbideias_widgets(){
    register_sidebar( 
        array(
            'name' => 'home post Sidebar'
        )
     );
}
add_action( 'widgets_init', 'wpwebbideias_widgets' );
