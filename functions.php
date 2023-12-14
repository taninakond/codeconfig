<?php

/**
 * codeconfig functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codeconfig
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function codeconfig_setup()
{
    load_theme_textdomain('codeconfig', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu', 'codeconfig'),
            'resources-menu' => __('Resources Menu', 'codeconfig'),
            'company-menu' => __('Company Menu', 'codeconfig'),
        )
    );

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
            'codeconfig_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
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
}
add_action('after_setup_theme', 'codeconfig_setup');

/**
 * Enqueue scripts and styles.
 */
function codeconfig_scripts()
{
    wp_enqueue_style('codeconfig-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('codeconfig-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), _S_VERSION, false);
    wp_enqueue_style('codeconfig-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION, false);
    wp_enqueue_style('codeconfig-google-fonts', get_template_directory_uri() . '/assets/fonts/google-fonts.css', array(), _S_VERSION, false);
    wp_enqueue_style('codeconfig-main-style', get_template_directory_uri() . '/assets/css/codeconfig-style.css', array(), time(), false);



    wp_enqueue_script('codeconfig-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('codeconfig-scripts', get_template_directory_uri() . '/assets/js/codeconfig-scripts.js', array('jquery'), time(), true);

    $data = array(
        'site_url' => get_template_directory_uri(),
        'admin_ajax'   => admin_url('admin-ajax.php'),
    );
    wp_localize_script('codeconfig-scripts', 'ajax', $data);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'codeconfig_scripts');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/nav-walker.php';

add_filter('use_block_editor_for_post', '__return_false', 10);

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function codeconfig_allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'codeconfig_allow_svg_upload');


// Add Custom Scroll To Top
function heid_scroll_to_top()
{
    echo '<div id="heid-scroll-to-top"></div>';
}
add_action("wp_footer", 'heid_scroll_to_top');


add_action("wp_ajax_loadmore_posts", "codeconfig_loadmore_posts_function");
add_action("wp_ajax_nopriv_loadmore_posts", "codeconfig_loadmore_posts_function");

function codeconfig_loadmore_posts_function()
{


    // $page = $_POST['page'];
    // $posts_per_page = 6;


    // if ($_POST['offset']) {
    // 	$offset = $_POST['offset'];
    // }
    // if ($page > 2) {
    // 	for ($i = 3; $i <= $page; $i++) {
    // 		$offset = $offset + $posts_per_page;
    // 	}
    // }


    $args = [
        'post_type' => 'post',
        'posts_per_page' => -1
    ];

    if ($_POST['slug']) {
        $args['tax_query'] =  array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $_POST['slug'],
            ),
        );
    }

    $loop = new WP_Query($args);


    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-box transition'); ?>>
                <div class="blog-box-media">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                </div>

                <div class="blog-box-content">
                    <div class="admin-date">
                        <div class="date d-flex">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/date-icon.svg'); ?>" alt="">
                            <h6><?php echo get_the_date(); ?></h6>
                        </div>

                        <div class="comment d-flex">
                            <img src="<?php echo get_theme_file_uri('/assets/images/comment.svg'); ?>" alt="">
                            <h6><?php echo get_comments_number(); ?></h6>
                        </div>
                    </div>
                    <a class="post-title" href="<?php the_permalink(); ?>"><?php echo wp_kses_post(get_the_title()); ?></a>
                    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>

                    <div class="button-comment">

                        <div class="blog-button">
                            <a href="<?php the_permalink(); ?>" class="btn2">Read More<span>&#8605;</span></a>
                        </div>
                    </div>
                </div>
            </article><!-- / BLOG-BOX -->

        <?php
        endwhile;
    else : ?>
        <div class="entry-content notResult col-md-12 col-sm-12 col-xs-12">
            <h4 class="no-content text-center" style="padding: 0 0 50px; margin-top: 30px;">
                <?php _e('No more posts!!!', 'codeconfig'); ?>
            </h4>
        </div>
<?php
    endif;

    die();
}



function codeconfig_widgets(){
    register_sidebar( 
        array(
            "name"       =>__("Footer Top", "codeconfig"),
            "id"         => "footertop",
            "description"=> __("Footer Top", "codeconfig"),
            "before_widget"=> '<div id="%1$s" class="widget %2$s">',
            "after_widget" => "</div>",
            "before_title" => "",
            "after_title"  => "",
        )
     );

     register_sidebar( 
        array(
            "name"       =>__("Copy Right", "codeconfig"),
            "id"         => "copyright",
            "description"=> __("Copy Right", "codeconfig"),
            "before_widget"=> '<small id="%1$s" class="widget %2$s">',
            "after_widget" => "</small>",
            "before_title" => "",
            "after_title"  => "",
        )
     );
}
add_action( "widgets_init","codeconfig_widgets" );