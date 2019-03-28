<?php

/***************************************************/
/************* Styles CSS et Script JS *************/
/***************************************************/

function womendevs_enqueue_style() {
    
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' , false ); 

    // Google Font
    wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=Roboto' , false ); 
    
    // Font Awesome
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css' , false );

    // Ma feuille CSS
    wp_enqueue_style( 'core', get_stylesheet_uri() , false ); 
}

function womendevs_enqueue_script() {
    
    // jQuery
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', false );
    
    // Popper
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false );
    
    // Bootstrap JS
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false );
}

add_action( 'wp_enqueue_scripts', 'womendevs_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'womendevs_enqueue_script' );

/***************************************************/
/************* Fonctionnalité du Thème *************/
/***************************************************/

// Image de Logo Personnalisable
add_theme_support( 'custom-logo', array(
	'height'      => 200,
	'width'       => 250,
	'flex-height' => false,
	'flex-width'  => false,
	'header-text' => array( 'site-title', 'site-description' ),
) );


// Menu Wordpress
add_action( 'after_setup_theme', 'register_womendevs_menu' );
function register_womendevs_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
}

// Image du Header personnalisable
$args = array(
	'width'         => 1600,
    'height'        => 500,
    'uploads'       => true,    
	'default-image' => get_template_directory_uri() . '/assets/image/computer-1343393_1280.jpg',
);
add_theme_support( 'custom-header', $args );

// Custom Background
add_theme_support('custom-background');

/***************************************************/
/************* Position pour Widgets ***************/
/***************************************************/

function womendevs_widgets_init() {
    # Placement de la Google Map
    register_sidebar( array(
        'name'          => 'Pied de la page 1',
        'id'            => 'womendevs-google-map',
        'description'   => 'Emplacement pour la Google Maps',
        'before_widget' => '<div class="googleMap col-md-3 col-sm-12 my-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center my-2">',
        'after_title'   => '</h4>',
    ) );

    # Placement de la Newsletter - 2eme emplacement
    register_sidebar( array(
        'name'          => 'Pied de la page 2',
        'id'            => 'womendevs-newsletter',
        'description'   => 'Emplacement pour la Newsletter',
        'before_widget' => '<div class="googleMap col-md-3 col-sm-12 my-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center my-2">',
        'after_title'   => '</h4>',
    ) );

    # Placement de la Contact - 3eme emplacement
    register_sidebar( array(
        'name'          => 'Pied de la page 3',
        'id'            => 'womendevs-contact',
        'description'   => 'Emplacement pour la Contact',
        'before_widget' => ' <div class="contact col-md-3 col-sm-12 my-3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-center my-2">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'womendevs_widgets_init' );