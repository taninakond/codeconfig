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
}
add_action('after_setup_theme', 'codeconfig_setup');

/**
 * Enqueue scripts and styles.
 */
function codeconfig_scripts()
{
    wp_enqueue_style('codeconfig-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('codeconfig-google-fonts', get_template_directory_uri() . '/assets/fonts/google-fonts.css', array(), _S_VERSION, false);
    if (is_page('dusky-dark-mode')) {
        wp_enqueue_style('dusky-main-style', get_template_directory_uri() . '/assets/css/dusky-page.css', array(), time(), false);
    } else {
        wp_enqueue_style('codeconfig-main-style', get_template_directory_uri() . '/assets/css/codeconfig-style.css', array(), time(), false);
    }


    if (is_page('dusky-dark-mode')) {
        wp_enqueue_script('dusky-scripts', get_template_directory_uri() . '/assets/js/dusky-scripts.js', array('jquery'), time(), true);
    } else {
        wp_enqueue_script('codeconfig-scripts', get_template_directory_uri() . '/assets/js/codeconfig-scripts.js', array('jquery', 'wp-util'), time(), true);
    }
    

    $data = array(
        'site_url' => get_template_directory_uri(),
        'preloader' => '/wp-content/themes/codeconfig/assets/images/ajax-loader.gif',
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
// require get_template_directory() . '/inc/nav-walker.php';

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
	
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';

//     if (!wp_verify_nonce($nonce, 'filter_nonce')) {
//         wp_send_json_error(array('message' => '<div class="error-message">You are not in proper way!</div>'));
//         die();
//     }

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
    );

    // Taxonomy query for both category and tags
    if (!empty($data)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'category', // Change this to your custom tags taxonomy name
            'field'    => 'slug',
            'terms'    => sanitize_text_field($data['catSlug']),
        );
    }

    $loop = new WP_Query($args);

    ob_start();

    if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>
            

<div class="blog-item text-center">
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) {the_post_thumbnail(); } ?>
    </a>
    </div>
    <div class="post-details">
        <ul class="post-meta unstyle flex-center">

            <?php
            // Post time
            $post_id = get_the_ID();
            $post_time = get_post_time('U', false, $post_id);
            $time_difference = human_time_diff($post_time, current_time('U')) . ' Read';
            ?>

            <li><img src="<?php echo get_theme_file_uri('/assets/images/date-icon.svg'); ?>" alt=""><span><?php echo get_the_date(); ?></span></li>
            <li><img src="<?php echo get_theme_file_uri('/assets/images/time-icon.svg'); ?>" alt=""><span><?php echo $time_difference; ?></span></li>
            <li><img src="<?php echo get_theme_file_uri('/assets/images/comment-icon.svg'); ?>" alt=""><span><?php comments_number(  ); ?></span></li>
        </ul>
        <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
        <a class="post-btn" href="<?php the_permalink(); ?>"><?php echo __('Continue Reading', 'codeconfig') ?><img src="<?php echo get_theme_file_uri('/assets/images/right-arrow.svg'); ?>" alt=""> </a>
    </div>
</div> <!-- Blog Item  --> 
        <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data after the loop
    else :
        ?>
        <div class="entry-content notResult col-md-12 col-sm-12 col-xs-12">
            <h4 class="no-content text-center" style="padding: 0 0 50px; margin-top: 30px;">
                <?php _e('No posts found!!!', 'hello-elementor-child'); ?>
            </h4>
        </div>
        <?php

    endif;
    $my_html = ob_get_contents();
    ob_end_clean();
    wp_send_json_success(array('page' => $my_html));
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