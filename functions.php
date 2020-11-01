<?php 

    function personal_theme_setup() {
     	add_theme_support( 'post-formats', array( 'aside', 'gallery','audio','video' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
    }
    

add_action( 'after_setup_theme', 'personal_theme_setup' );


function personal_theme_script(){
	wp_enqueue_style('main-css', get_template_directory_uri().'/style.css');
}

// Register nav menu 


function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );



   // custom logo register 
   function personal_theme_logo_setup() {
	$defaults = array(
	'height'      => 150,
	'width'       => 370,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'personal_theme_logo_setup' );


   // register sidebar 

     function personalportfolio_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );
	}
	
	add_action('widgets_init','personalportfolio_widgets_init');
?>