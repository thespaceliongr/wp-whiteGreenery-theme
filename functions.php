<?php   

 //Load theme textdomain
load_theme_textdomain( 'whiteGreenery' );
 // Add default posts and comments RSS feed links to head. 
add_theme_support( 'automatic-feed-links' ); 
//Add support for title tag
add_theme_support( 'title-tag' );   
//Add support for core custom logo.	
add_theme_support( 'custom-logo' ); 
//Enable support for menu on posts and pages.
add_theme_support('menus');
//Enable support for Post Thumbnails on posts and pages.
add_theme_support('posts-thumbnails');

//Enqueue  styles.  
function load_stylesheet()
{      
wp_register_style('defstyle', get_template_directory_uri() . 'style.css', array(), false, 'all'  );
wp_enqueue_style('defstyle');	
wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'  );
wp_enqueue_style('bootstrap');
wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all'  );
wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');  

// Enqueue scripts 
function load_js()
{
wp_register_script('customjs',   get_template_directory_uri() . '/js/scripts.js', false);
wp_enqueue_script('customjs');
wp_deregister_script('jquery');
wp_register_script('jquery',   get_template_directory_uri() . '/js/jquery.min.js', false);
wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_js');

  // This theme uses wp_nav_menu() in two locations.
register_nav_menus(
array(
'top-menu' => __( 'main', 'theme' ),
'footer-menu' => __( 'Footer Menu', 'theme' ),
)
);
//Switch default core markup for search form, comment form, and comments to output valid HTML5.
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
'script',
'style',
)
);
// Set post image size.        
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

//Setup the post navigation
function whiteGreenery_the_post_navigation( $args = array() ) {
    $args = wp_parse_args( $args, array(
        'prev_text'          => '&#9664; %title',
        'next_text'          => '%title &#9654;',
        'in_same_term'       => false,
        'excluded_terms'     => '',
        'taxonomy'           => 'category',
        'screen_reader_text' => __( 'Post navigation' ),
    ) );
 
    $navigation = '';
 
    $previous = get_previous_post_link(
        '<div class="nav-previous btn btn-success">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    $next = get_next_post_link(
        '<div class="nav-next btn btn-success">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] );
    }
 
    return $navigation;
}