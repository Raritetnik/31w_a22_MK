<?php
/**
 * underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
require_once('options/apparence.php');
//////////////////////////////////////////////////
function underscore_setup() {

    	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	/**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
	add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

	add_theme_support(
        'custom-background',
        apply_filters(
            'igc31w_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );
}
add_action( 'after_setup_theme', 'underscore_setup' );


/**
 * Enqueue scripts and styles.
 */
function underscore_scripts() {
	/*
	wp_enqueue_style( 'underscore-style',
					   get_stylesheet_uri(),
					   array(),
					_S_VERSION );
	*/

	wp_enqueue_style('underscore-style',
					 get_template_directory_uri() . '/style.css',
					 array(),
					 filemtime(get_template_directory() . '/style.css'), false);
/*
					 wp_enqueue_style( 'google-fonts',
					  'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap',
					   false );
*/
}
add_action( 'wp_enqueue_scripts', 'underscore_scripts' );

// Les images d'icones script
function icons_enqueue() {
    wp_enqueue_script(
        'init-icons',
        'https://kit.fontawesome.com/62104b1a3a.js'
    );
}
add_action('wp_enqueue_scripts', 'icons_enqueue');


/* ----------------------------------------- Initialisation de la fonction de menu */

function _31w_register_nav_menu(){
	register_nav_menus( array(
		'menu_primaire' => __( 'Menu Primaire', 'text_domain' ),

	) );
}
add_action( 'after_setup_theme', '_31w_register_nav_menu', 0 );


/**
 * filtre le menu «aside»
 * @arg  $obj_menu, $arg
 */


function igc31w_filtre_choix_menu($obj_menu, $arg){
    //echo "/////////////////  obj_menu";
    // var_dump($obj_menu);
    //  echo "/////////////////  arg";
    //  var_dump($arg);

    if ($arg->menu == "aside"){
    foreach($obj_menu as $cle => $value)
    {
      //  print_r($value);
	  /* retirer le sigle numérique du cours */
       $value->title = substr($value->title,7);
	   /* retirer la durée du cours ex: (75h) */
	   $value->title = substr($value->title,0,strpos($value->title, '('));
       $value->title = wp_trim_words($value->title,3," ... ");
        //echo $value->title . '<br>';
     }
    }
    //die();
    return $obj_menu;
}

add_filter("wp_nav_menu_objects","igc31w_filtre_choix_menu", 10,2);

/* ----------------------------------------------------------- Ajout de la description dans menu

Remplace </a> en ajoutant la balise de description
SI description existe */
function menu_ajout_description( $menuItemTexte, $itemMenu) {
    if ( !empty( $itemMenu->description ) ) {
        $menuItemTexte = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $itemMenu->description . '</span><div class="menu__item__icone"></div></a>',
              $menuItemTexte );
    }
    return $menuItemTexte;
}
add_filter( 'walker_nav_menu_start_el', 'menu_ajout_description', 10, 2 );


function modifier_requete_principale( $query ) {
	if( $query->is_home() && $query->is_main_query() && ! is_admin()) {
		$query->set( 'category_name', 'accueil');
	}
}
add_action('pre_get_posts', 'modifier_requete_principale');

/* -------------------------------------------------------- Initialisation des sidebar */

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'footer-1' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-1',
			'name'          => __( 'Sidebar - footer-1' ),
			'description'   => __( 'Premier sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-2',
			'name'          => __( 'Sidebar - footer-2' ),
			'description'   => __( 'Deuxième sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);


	register_sidebar(
		array(
			'id'            => 'footer-3',
			'name'          => __( 'Sidebar - footer-3' ),
			'description'   => __( 'Troisième sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-4',
			'name'          => __( 'Sidebar - footer-4' ),
			'description'   => __( 'Quatrième sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

		register_sidebar(
		array(
			'id'            => 'aside-1',
			'name'          => __( 'Sidebar - aside-1' ),
			'description'   => __( 'Premier aside ' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);


			register_sidebar(
		array(
			'id'            => 'aside-2',
			'name'          => __( 'Sidebar - aside-2' ),
			'description'   => __( 'Deuxième aside ' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Navigation widgets
	register_sidebar(
		array(
			'id'            => 'nav-aside-1',
			'name'          => __( 'Sidebar - nav-aside-1' ),
			'description'   => __( 'Première aside de navigation' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'nav-aside-2',
			'name'          => __( 'Sidebar - nav-aside-2' ),
			'description'   => __( 'Deuxième aside de navigation' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */

}
