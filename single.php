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
                    <li><img src="<?php echo get_theme_file_uri('/assets/images/date-icon.svg') ?>" alt=""><span><?php echo get_the_date(); ?></span></li>
                    <li><img src="<?php echo get_theme_file_uri('/assets/images/time-icon.svg') ?>" alt=""><span><?php echo get_the_time(); ?></span></li>
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
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-facebook.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-x-twitter.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-youtube.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-linkedin.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-mail.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-whatsapp.svg') ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/share-skype.svg') ?>" alt=""></a></li>
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
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=>3, // Number of related posts to display.
            'caller_get_posts'=>1
            );
            $my_query = new wp_query( $args );
            while( $my_query->have_posts() ) {
            $my_query->the_post();
            ?>

            <div class="blog-item text-center">
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                   <?php if(has_post_thumbnail( )){the_post_thumbnail(  );} ?>
                    </a>
                </div>
                <div class="post-details">
                   <a href="<?php the_permalink(  ); ?>"> <p class="post-excerpt">Elevate your WordPress journey! Our cutting-edge solutions boost</p></a>
                </div>
            </div> <!-- Blog Item  -->

            <?php }
            }
            $post = $orig_post;
            wp_reset_query();
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
			<h2><?php echo __('Total ', 'codeconfig') ?> <span><?php echo __('Comments', 'codeconfig'); echo get_comments_number(); ?></span></h2>
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
