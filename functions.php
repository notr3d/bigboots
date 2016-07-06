<?php
/**
 * bigboots functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigboots
 */

if ( ! function_exists( 'bigboots_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bigboots_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bigboots, use a find and replace
	 * to change 'bigboots' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bigboots', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'bigboots' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bigboots_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bigboots_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bigboots_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bigboots_content_width', 640 );
}
add_action( 'after_setup_theme', 'bigboots_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bigboots_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bigboots' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bigboots' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bigboots_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bigboots_scripts() {
	wp_enqueue_style( 'bigboots-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bigboots-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bigboots-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigboots_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//пишем все сюда---------------------------------------------------

//регистрируем все меню
function register_menus() {
  register_nav_menus(
    array(
	  'header-nav' => __( 'Header navigation' ),
	  'user-info' => __( 'User info' ),	
	  'footer-nav' => __( 'Footer navigation' )		
    )
  );
}
add_action( 'init', 'register_menus' );

//вукоммерс стили убираем
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//меняем разделитель в хлебных крошках на знак "больше"
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_delimiter' );
function jk_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

//рубль
function change_existing_currency_symbol( $currency_symbol, $currency ) {
	switch( $currency ) {
		case 'RUB': $currency_symbol = 'руб.'; 
		break;
	}
	return $currency_symbol;
}

//cart widget
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Mini Cart',
		'id' => 'wc_dropdown_cart',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//cart items number
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<span class="mini-cart__contents">
		<?php echo sprintf (_n( '%d', WC()->cart->get_cart_contents_count() ) ); ?> 
	</span> 
	<?php
	
	$fragments['span.mini-cart__contents'] = ob_get_clean();
	
	return $fragments;
}
