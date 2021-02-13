<?php
/**
 * agriview24 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agriview24
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'agriview24_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function agriview24_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on agriview24, use a find and replace
		 * to change 'agriview24' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'agriview24', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main_menu' => __( 'Main Menu', 'agriview24' ),
            'second_menu' => __( 'Secondary Menu', 'agriview24' ),
        ) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'agriview24_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
	}
endif;
add_action( 'after_setup_theme', 'agriview24_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function agriview24_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'agriview24_content_width', 640 );
}
add_action( 'after_setup_theme', 'agriview24_content_width', 0 );

//Default Excerpt

 function cExcerpt($number = 20, $readmore = 'Read More'){
 	$newnumber = $number + 1;
 	$var = explode(' ', strip_tags(get_the_content()), $newnumber);
 	if (count($var) >= $newnumber) {
 		array_pop($var);
 	}

 	// array_push($var, '<a href="'.get_the_permalink().'">'.$readmore.'</a>');
 	$var = implode(' ', $var);

 	return $var;
 }



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function agriview24_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'agriview24' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'agriview24' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'agriview24_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function agriview24_scripts() {
	wp_enqueue_style( 'agriview24-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'agriview24-style', 'rtl', 'replace' );
    wp_enqueue_style( 'agriview24-bootstrap', get_template_directory_uri() . '/assets/frontend/css/bootstrap.min.css');
    wp_enqueue_style( 'agriview24-fontawesome', get_template_directory_uri() . '/assets/frontend/css/fontawesome.all.min.css');
    wp_enqueue_style( 'agriview24-cryptoticker', get_template_directory_uri() . '/assets/frontend/css/cryptoticker.css');
    wp_enqueue_style( 'agriview24-slick', get_template_directory_uri() . '/assets/frontend/css/slick.css');
    wp_enqueue_style( 'agriview24-slicknav', get_template_directory_uri() . '/assets/frontend/css/slicknav.min.css');
    wp_enqueue_style( 'agriview24-default', get_template_directory_uri() . '/assets/frontend/css/default.css');
    wp_enqueue_style( 'agriview24-main', get_template_directory_uri() . '/assets/frontend/css/main.css');
    wp_enqueue_style( 'agriview24-responsive', get_template_directory_uri() . '/assets/frontend/css/responsive.css');

	wp_enqueue_script( 'agriview24-navigation', get_template_directory_uri() . '/frontend/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-jquery', get_template_directory_uri() . '/assets/frontend/js/vendor/jquery-3.3.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-bootstrap', get_template_directory_uri() . '/assets/frontend/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-popper', get_template_directory_uri() . '/assets/frontend/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-slick', get_template_directory_uri() . '/assets/frontend/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-slicknav', get_template_directory_uri() . '/assets/frontend/js/jquery.slicknav.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-cryptoticker', get_template_directory_uri() . '/assets/frontend/js/jquery.cryptoticker.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-fontawesome', get_template_directory_uri() . '/assets/frontend/js/fontawesome.all.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-smooth', get_template_directory_uri() . '/assets/frontend/js/smooth.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'agriview24-main', get_template_directory_uri() . '/assets/frontend/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'agriview24_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/bangla-convert.php';


/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/theme-options/codestar-framework.php';

/**
 * theme options file.
 */
require get_template_directory() . '/inc/theme_options.php';

// Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

