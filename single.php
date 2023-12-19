<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wpwebdevs
 */

get_header();
?>

<section class="section single-Blog relative">
        <div class="container single-blog-container">

            <div class="single-blog-banner relative">

                <div class="cc-shape shape-small shape-blue shape-bottom shape-right"></div>
                <div class="cc-shape shape-oval shape-blue shape-top shape-left"></div>
                <div class="cc-shape shape-small shape-red shape-top-0 shape-right"></div>
                <div class="heading-bg-2"></div>

				<?php if(has_post_thumbnail()){the_post_thumbnail("large", "codeconfig");}; ?>

                <ul class="post-meta unstyle flex-center">
                    <?php
                        // Post time
                        $post_id = get_the_ID();
                        $post_time = get_post_time('U', false, $post_id);
                        $time_difference = human_time_diff($post_time, current_time('U')) . ' Read';
                    ?>

                    <li><img src="<?php echo get_theme_file_uri('/assets/images/date-icon.svg') ?>" alt=""><span><?php echo get_the_date(); ?></span></li>
                    <li><img src="<?php echo get_theme_file_uri('/assets/images/time-icon.svg') ?>" alt=""><span><?php echo $time_difference; ?></span></li>
                    <li><img src="<?php echo get_theme_file_uri('/assets/images/comment-icon.svg') ?>" alt=""><span><?php comments_number(); ?></span></li>
                </ul>

                <h1 class="post-title text-center"><?php the_title(); ?></h1>
            </div><!-- Blog Banner  -->

            <div class="blog-content relative">
                <div class="cc-shape shape-medium shape-blue shape-left shape-top-0"></div>
                <div class="cc-shape shape-medium shape-red shape-right shape-top-0"></div>
    
                <div class="cc-shape shape-medium shape-red shape-left shape-top-center"></div>
                <div class="cc-shape shape-medium shape-blue shape-right shape-top-center"></div>
    
                <div class="cc-shape shape-medium shape-blue shape-left shape-bottom-0"></div>
                <div class="cc-shape shape-medium shape-red shape-right shape-bottom-0"></div>

				<?php the_excerpt(); ?>
				<?php the_content(); ?>
                
            </div>  <!-- Blog Content  -->

            <div class="share-icons text-center">
                <h4>Share  This Article</h4>
                <ul class="flex-center flex-wrap unstyle">

                    <?php
                        // Get the current post's URL and title
                        $current_post_url = get_permalink();
                        $current_post_title = get_the_title();

                        // Social media sharing links
                        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($current_post_url);
                        $twitter_url = 'https://twitter.com/intent/tweet?url=' . urlencode($current_post_url) . '&text=' . urlencode($current_post_title);
                        $youtube_url = 'https://www.youtube.com/user/YOUR_YOUTUBE_CHANNEL_URL';
                        $linkedin_url = 'https://www.linkedin.com/shareArticle?url=' . urlencode($current_post_url) . '&title=' . urlencode($current_post_title);
                        $email_subject = urlencode($current_post_title);
                        $email_body = urlencode('Check out this post: ' . $current_post_url);
                        $email_url = 'mailto:?subject=' . $email_subject . '&body=' . $email_body;
                        $whatsapp_url = 'https://api.whatsapp.com/send?text=' . urlencode($current_post_title . ': ' . $current_post_url);
                        $skype_url = 'https://web.skype.com/share?url=' . urlencode($current_post_url);

                        // Output social media sharing links
                    ?>

                    <li><a href="<?php echo $facebook_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-facebook.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $twitter_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-x-twitter.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $youtube_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-youtube.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $linkedin_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-linkedin.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $email_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-mail.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $whatsapp_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-whatsapp.svg') ?>" alt=""></a></li>
                    <li><a href="<?php echo $skype_url; ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/assets/images/share-skype.svg') ?>" alt=""></a></li>
                </ul>
            </div>

        </div>  <!-- Single Blog Container  -->
</section><!-- Single Blog -->

<section class="section related-blog relative">
    <div class="cc-shape shape-medium shape-blue shape-left shape-top-0"></div>
    <div class="cc-shape shape-medium shape-red shape-right shape-top-0"></div>
    <div class="container single-blog-container">
        <div class="section-title text-center">
            <h2>Related <span>Post</span></h2>
        </div>
        <div class="cc-blog d-flex flex-wrap">

        <?php
            // Get the current post's ID
            $current_post_id = get_the_ID();

            // Get the post categories
            $post_categories = get_the_category($current_post_id);

            if ($post_categories) {
                $category_ids = array();
                foreach ($post_categories as $category) {
                    $category_ids[] = $category->term_id;
                }

                // Query for related posts based on categories
                $args = array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($current_post_id),
                    'posts_per_page' => 3, // Adjust the number of related posts to display
                    'ignore_sticky_posts' => 1,
                );

                $related_query = new WP_Query($args);

                // Output related posts
                if ($related_query->have_posts()) {
                    while ($related_query->have_posts()) {
                        $related_query->the_post();
                        ?>
                       <div class="blog-item text-center" <?php post_class(); ?>>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail( )){the_post_thumbnail(  );} ?>
                                </a>
                            </div>
                            <div class="post-details">
                                <a href="<?php the_permalink(  ); ?>"> <p class="post-excerpt">Elevate your WordPress journey! Our cutting-edge solutions boost</p></a>
                            </div>
                        </div> <!-- Blog Item  -->

                        <?php
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo 'No related posts found.';
                }
            } else {
                echo 'No categories found for this post.';
            }
        ?>

        </div> <!-- CC Blog  -->

    </div>
</section> <!--Related Blog  -->

<section class="section post-comments relative">
	<div class="cc-shape shape-medium shape-blue shape-left shape-top-0"></div>
	<div class="cc-shape shape-medium shape-red shape-right shape-top-0"></div>

	<div class="cc-shape shape-medium shape-red shape-left shape-bottom-0"></div>
	<div class="cc-shape shape-medium shape-blue shape-right shape-bottom-0"></div>

	<div class="container single-blog-container">
		<div class="section-title text-center">
			<h2><?php echo __('Total ', 'codeconfig') ?> <span><?php echo __('Comments ', 'codeconfig'); echo get_comments_number(); ?></span></h2>
		</div>

		<?php
			if(!post_password_required() && comments_open()){
			comments_template();
			};
		?>

		<div class="all-comment text-center">
			<a href="#" class="btn">view All</a>
		</div>
	</div>
</section> <!--Post Comments -->

<section class="section contact-form-section relative">

	<div class="cc-shape shape-medium shape-blue shape-left shape-top-0"></div>
	<div class="cc-shape shape-medium shape-red shape-right shape-bottom"></div>

	<div class="container single-blog-container">
		<div class="section-title text-center">
			<h2><?php echo __('Have something', 'codeconfig') ?> <span><?php echo __('to say?', 'codeconfig') ?></span></h2>
			<p><?php echo __("Your email stays private, we won't publish it.", "codeconfig") ?></p>
		</div>

		<div class="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="833c8ef" title="Contact form"]' ); ?>
		</div>
	</div>
</section>






<?php get_footer(); ?>
