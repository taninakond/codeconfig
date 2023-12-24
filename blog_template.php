

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