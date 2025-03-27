<?php

add_action('after_setup_theme', 'setup_theme');

function setup_theme()
{

	/**
	 * Theme Support
	 */

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo',
		array(
			'width' => 185,
			'height' => 40,
			'flex-width' => true,
			'flex-height' => true,
		)
	);

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// Customize Selective Refresh Widgets.
	add_theme_support('customize-selective-refresh-widgets');

	// Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style 
	// to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Enable support for responsive embeds
	add_theme_support(' responsive-embeds');

	// Gutenberg block styles
	add_theme_support('wp-block-styles');

	// Gutenberg wide images.
	add_theme_support('align-wide');

	// Remove the filter that sanitizes HTML tags from the user bio field
	remove_filter('pre_user_description', 'wp_filter_kses');

	// adding menu 
	register_nav_menus(array(
		'primary_emailsbuzz' => __('Primary Menu Emailsbuzz', 'emailsbuzz'),
		'pages' => __('Pages Footer', 'emailsbuzz'),
		'important_link' => __('Important link Footer', 'emailsbuzz'),
		'emailbuzz_tools' => __('Eamil Buzz Tools Footer', 'emailsbuzz'),

	));


}

add_action('init', 'remove_unwanted_scripts');
function remove_unwanted_scripts()
{
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
	remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
}

add_filter('upload_mimes', 'mime_types_support');
function mime_types_support($mimes)
{
	// Add support for additional image file types
	$mimes['svg'] = 'image/svg+xml';
	$mimes['webp'] = 'image/webp';
	$mimes['bmp'] = 'image/bmp';
	$mimes['tiff'] = 'image/tiff';

	return $mimes;
}

// ============== Enqueue ==================

// == define constant ========
define('THEME_LAYOUT_URL', get_template_directory_uri() . '/assets/css/layout.css');
define('THEME_STYLE_URL', get_template_directory_uri() . '/assets/css/style.css');
define('THEME_STYLING_URL', get_template_directory_uri() . '/assets/css/styling.css');

// == font family ==
define('THEME_STYLING_URL_GILROY', get_template_directory_uri() . '/assets/font-family/Gilroy-Bold.woff2');
define('THEME_STYLING_URL_LATIN_500', get_template_directory_uri() . '/assets/font-family/poppins-v20-latin-500.woff2');
define('THEME_STYLING_URL_LATIN_600', get_template_directory_uri() . '/assets/font-family/poppins-v20-latin-600.woff2');
define('THEME_STYLING_URL_LATIN_REGULAR', get_template_directory_uri() . '/assets/font-family/poppins-v20-latin-regular.woff2');


// SCRIPT HERE
define('THEME_SCRIPT_URL', get_template_directory_uri() . '/assets/js/script.js');


define('BOOTSTRAP_URL', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
// define('FONTAWASOME_URL', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
define('BOOTSTRAPSCRIPT_URL', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');


add_action('wp_enqueue_scripts', 'theme_slug_enqueue_styles');
function theme_slug_enqueue_styles()
{
	// SCRIPT
	wp_enqueue_script('bootstrapscript-style', BOOTSTRAPSCRIPT_URL, array(), '5.2.3', 'all');

	// Enqueue the script.js
	wp_enqueue_script('theme-script-url', THEME_SCRIPT_URL, array(), 1.0, 'all');

	wp_enqueue_style('bootstrap-style', BOOTSTRAP_URL, array(), '5.2.3', 'all');

	// == FONT AWASOME
	wp_enqueue_style('theme_styling_1', THEME_STYLING_URL_GILROY, array(), 1.0, 'all');
	wp_enqueue_style('theme_styling_2', THEME_STYLING_URL_LATIN_500, array(), 1.0, 'all');
	wp_enqueue_style('theme_styling_3', THEME_STYLING_URL_LATIN_600, array(), 1.0, 'all');
	wp_enqueue_style('theme_styling_4', THEME_STYLING_URL_LATIN_REGULAR, array(), 1.0, 'all');

	// Enqueue the styling.css
	wp_enqueue_style('theme-layout-style', THEME_LAYOUT_URL, array(), 1.0, 'all');
	wp_enqueue_style('theme-style-style', THEME_STYLE_URL, array(), 1.0, 'all');
	wp_enqueue_style('theme-styling-style', THEME_STYLING_URL, array(), 1.0, 'all');

}

// == adding widgets
function themename_widgets_init(): void
{
	register_sidebar(array(
		'name' => __('Main Home Banner', 'main_home_banner'),
		'id' => 'main_home_banner',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="main_home_banner">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Front Software Home Page', 'front_software_home_page'),
		'id' => 'front_software_home_page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="front_software_home_page">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Front Home Page Email Solutions ', 'front_home_page_email_solutions'),
		'id' => 'front_home_page_email_solutions',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="front_home_page_email_solutions">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Front Home Page Email Features', 'front_home_page_email_features'),
		'id' => 'front_home_page_email_features',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="front_home_page_email_features">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Front Home Page Email Post', 'front_home_page_email_post'),
		'id' => 'front_home_page_email_post',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="front_home_page_email_post">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Front Home Page Aboutus and Contactus', 'front_home_page_aboutus_and_contactus'),
		'id' => 'front_home_page_aboutus_and_contactus',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="front_home_page_aboutus_and_contactus">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Our Exceptional Email Solutions 4', 'our_exceptional_email_solutions_4'),
		'id' => 'our_exceptional_email_solutions_4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="our_exceptional_email_solutions_4">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Our Exceptional Email Solutions 5', 'our_exceptional_email_solutions_5'),
		'id' => 'our_exceptional_email_solutions_5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="our_exceptional_email_solutions_5">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Social Media', 'footer_social_media'),
		'id' => 'footer_social_media',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="footer_social_media">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('404 Error Page', '404_error_page'),
		'id' => '404_error_page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="404_error_page">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Software Apps', 'software_apps'),
		'id' => 'software_apps',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="software_apps">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => __('Category Breadcrum', 'category_breadcrum'),
		'id' => 'category_breadcrum',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="category_breadcrum">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Search Breadcrum', 'search_breadcrum'),
		'id' => 'search_breadcrum',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="search_breadcrum">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Contact Us Page', 'contact_us_page'),
		'id' => 'contact_us_page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="contact_us_page">',
		'after_title' => '</h3>',
	));

}
add_action('widgets_init', 'themename_widgets_init');

// ====================== PAGINATION FUNCTION =====================

function pagination_theme()
{
	//  ================== pagination =========================== 

	// Set the big number for pagination
	$big = 999999999;

	// Get the current page number (or set it to 1 if it's not available)
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	global $wp_query;

	// Define the pagination arguments correctly
	$args = array(
		'paged' => $paged,
		'max_num_pages' => $wp_query->max_num_pages, // Ensure this is set
	);

	// Generate the pagination links
	$pagination = paginate_links(array(
		'format' => 'page/%#%/',
		'current' => max(1, $paged), // Make sure the current page is set correctly
		'total' => $args['max_num_pages'], // Total number of pages
		'prev_text' => __('&laquo;', 'probabs'),
		'next_text' => __('&raquo;', 'probabs'),
	));

	// Output the pagination HTML
	printf(
		'<nav class="navigation pagination-flex" aria-label="Posts"><div class="nav-links-flex">%s</div></nav>',
		$pagination
	);
}

// ============================ END HERE =========================

?>