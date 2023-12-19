<?php
/**
 *  Template Name: Blog
 * */ 

get_header() ;?>


<section class="section Blog-hero relative">
        <div class="cc-shape shape-small shape-blue shape-bottom shape-right"></div>
        <div class="cc-shape shape-oval shape-blue shape-top shape-left-0"></div>
        <div class="cc-shape shape-small shape-red shape-top-0 shape-right"></div>

        <div class="container">
            <div class="blog-banner d-flex space-between align-center">
                <div class="section-title relative">
                    <div class="heading-bg-2"></div>
                    <div class="cc-shape shape-small shape-red shape-top-0 shape-left"></div>

                        <h1><?php echo __('Blog', 'codeconfig'); ?>.</h1>
                        <h4><?php echo __('Join With Our Amazing Community!', 'codeconfig'); ?></h4>
                        <div class="subscribe-form">
                            <?php echo do_shortcode( '[contact-form-7 id="2281502" title="Blog Subscribe from"]' ); ?>
                        </div>
                        <p><?php echo __('Unlock access to exclusive guides, tips, updates, e-books, and more.', 'codeconfig'); ?></p>
                </div>
                <div class="blog-banner-img">
                    <img src="<?php echo get_theme_file_uri('/assets/images/blog-banner.png'); ?>" alt="">
                </div>
            </div> <!-- Blog Banner -->
        </div>
</section><!-- Blog Hero  -->
    
<section class="section blog-section">

    <div class="container relative">
        <div class="cc-shape shape-medium shape-blue shape-left shape-top-0"></div>
        <div class="cc-shape shape-medium shape-red shape-right shape-top-0"></div>

        <div class="cc-shape shape-medium shape-red shape-left shape-top-center"></div>
        <div class="cc-shape shape-medium shape-blue shape-right shape-top-center"></div>

        <div class="cc-shape shape-medium shape-blue shape-left shape-bottom-0"></div>
        <div class="cc-shape shape-medium shape-red shape-right shape-bottom-0"></div>

        <div class="blog-head d-flex space-between">
            <div class="blog-filter-menu">
                <ul class="tabs unstyle d-flex align-center hide-mobile">
                    <li onclick="showTab('all', this)" class="transition tab-btn active">All</li>
                    <li onclick="showTab('popular', this)" class="transition tab-btn">Popular</li>
                    <li onclick="showTab('recent', this)" class="transition tab-btn">Recent</li>
                    <li onclick="showTab('product', this)" class="transition tab-btn">Products</li>
                    <li onclick="showTab('guide', this)" class="transition tab-btn">Guides</li>
                    <li onclick="showTab('solution', this)" class="transition tab-btn">Solutions</li>
                    <li onclick="showTab('other', this)" class="transition tab-btn">Others</li>
                </ul>
                <select name="" id="" class="tabs hide-desktop hide-tab" onchange="showTab(this.value)">
                    <option class="tab-btn" value="all">All</option>
                    <option class="tab-btn" value="popular">Popular</option>
                    <option class="tab-btn" value="recent">Recent</option>
                    <option class="tab-btn" value="product">Products</option>
                    <option class="tab-btn" value="guide">Guides</option>
                    <option class="tab-btn" value="solution">Solutions</option>
                    <option class="tab-btn" value="other">Others</option>
                </select>
            </div>
            <div class="blog-search">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search anything...." name="search">
                        <button type="submit"><img src="<?php echo get_theme_file_uri('/assets/images/search-icon.svg') ?>" alt=""></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- Blog Head  -->


        <div id="all" class="cc-blog d-flex flex-wrap post-tab-body active-tab">

            <?php
                    // The Query
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 10, // Limit to one post
                        'order'          => 'DESC', // Order by post date in descending order
                    );

                    $query = new WP_Query($args);

                    // The Loop
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            ?>

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
                else :
                    // If no posts are found
                    echo __('No post found.', 'codeconfig');
                endif;

                // Restore original post data
                wp_reset_postdata();
                ?>

        </div> <!-- CC Blog All -->

        <div id="popular" class="cc-blog d-flex flex-wrap post-tab-body">

            <?php
                // Query popular posts based on post views
                $popular_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Adjust the number of popular posts to display
                    'orderby'        => 'comment_count',
                    'order'          => 'DESC',
                );

                $popular_query = new WP_Query($popular_args);

                // Output popular posts
                if ($popular_query->have_posts()) {

                    while ($popular_query->have_posts()) {
                        $popular_query->the_post();
                        ?>

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
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo __('No popular posts found.', 'codeconfig');
                }
            ?>

        </div> <!-- CC Blog Popular-->

        <div id="recent" class="cc-blog d-flex flex-wrap post-tab-body">

            <?php
                    // The Query
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5, // Limit to one post
                        'order'          => 'DESC', // Order by post date in descending order
                    );

                    $query = new WP_Query($args);

                    // The Loop
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            ?>

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
                else :
                    // If no posts are found
                    echo __('No Recent posts found.', 'codeconfig');
                endif;

                // Restore original post data
                wp_reset_postdata();
                ?>

        </div> <!-- CC Blog Recent -->

        <div id="product" class="cc-blog d-flex flex-wrap post-tab-body">

            <?php
                // Specify the category slug or ID
                $category_slug = 'products'; // Replace with your actual category slug
                $category_id = get_cat_ID($category_slug);

                // Query posts in the specified category
                $category_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Adjust the number of posts to display
                    'cat'            => $category_id,
                    'orderby'        => 'date', // You can change the sorting order as needed
                    'order'          => 'DESC',
                );

                $category_query = new WP_Query($category_args);

                // Output posts in the specified category
                if ($category_query->have_posts()) {
                    while ($category_query->have_posts()) {
                        $category_query->the_post();
                        ?>

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
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo __('No posts found about Products.', 'codeconfig');
                }
                ?>

        </div> <!-- CC Blog Product -->

        <div id="guide" class="cc-blog d-flex flex-wrap post-tab-body">

            <?php
                // Specify the category slug or ID
                $category_slug = 'guides'; // Replace with your actual category slug
                $category_id = get_cat_ID($category_slug);

                // Query posts in the specified category
                $category_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Adjust the number of posts to display
                    'cat'            => $category_id,
                    'orderby'        => 'date', // You can change the sorting order as needed
                    'order'          => 'DESC',
                );

                $category_query = new WP_Query($category_args);

                // Output posts in the specified category
                if ($category_query->have_posts()) {
                    while ($category_query->have_posts()) {
                        $category_query->the_post();
                        ?>

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
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo __('No posts found about Guides.', 'codeconfig');
                }
                ?>

        </div> <!-- CC Blog Guide -->

        <div id="solution" class="cc-blog d-flex flex-wrap post-tab-body"">

            <?php
                // Specify the category slug or ID
                $category_slug = 'solutions'; // Replace with your actual category slug
                $category_id = get_cat_ID($category_slug);

                // Query posts in the specified category
                $category_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Adjust the number of posts to display
                    'cat'            => $category_id,
                    'orderby'        => 'date', // You can change the sorting order as needed
                    'order'          => 'DESC',
                );

                $category_query = new WP_Query($category_args);

                // Output posts in the specified category
                if ($category_query->have_posts()) {
                    while ($category_query->have_posts()) {
                        $category_query->the_post();
                        ?>

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
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo __('No posts found about Solutions.', 'codeconfig');
                }
                ?>

        </div> <!-- CC Blog Solution -->

        <div id="other" class="cc-blog d-flex flex-wrap post-tab-body">

            <?php
                // Specify the category slug or ID
                $category_slug = 'others'; // Replace with your actual category slug
                $category_id = get_cat_ID($category_slug);

                // Query posts in the specified category
                $category_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Adjust the number of posts to display
                    'cat'            => $category_id,
                    'orderby'        => 'date', // You can change the sorting order as needed
                    'order'          => 'DESC',
                );

                $category_query = new WP_Query($category_args);

                // Output posts in the specified category
                if ($category_query->have_posts()) {
                    while ($category_query->have_posts()) {
                        $category_query->the_post();
                        ?>

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
                    }
                    // Restore original post data
                    wp_reset_postdata();
                } else {
                    echo __('No Others post found.', 'codeconfig');
                }
                ?>

        </div> <!-- CC Blog Other -->


        <div class="blog-pagination">
            <div class="pagination"> 
                <?php the_posts_pagination( array(
                'prev_text' => __( '<span class="dashicons dashicons-arrow-left-alt"></span>', 'codeconfig' ),
                'next_text' => __( '<span class="dashicons dashicons-arrow-right-alt"></span>', 'codeconfig' ), ) );
                ?>               
            </div>
        </div> <!-- Blog Pagination  -->
    </div>
</section> <!-- Blog section  -->

<section class="section codeconfig-excellent-products blog-product relative">
    <div class="cc-shape shape-blue shape-medium shape-left shape-bottom-0"></div>
    <div class="cc-shape shape-red shape-medium shape-right shape-bottom"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2>Find Our <span>Product Focused Articles</span></h2>
            <p>Discover the ultimate product resource hub, unveiling articles, guides, -books, and essential assets for effortless product mastery.</p>
        </div>

        <div class="iconbox-wrapper d-flex flex-wrap">
            
            <a href="#" class="iconbox text-center" style="color:#F2E5FF">
                <img src="<?php echo get_theme_file_uri('/assets/images/Excellent-Product-4.png') ?>" alt="">
                <p>Creative Feature-Packed Plugins</p>
            </a> <!-- Product Item  -->

            <a href="#" class="iconbox text-center" style="color:#F7F8FD">
                <img src="<?php echo get_theme_file_uri('/assets/images/Excellent-Product-1.png') ?>" alt="">
                <p>Stellar Support Empowerment Guides</p>
            </a> <!-- Product Item  -->
            
            <a href="#" class="iconbox text-center" style="color:#F2E5FF">
                <img src="<?php echo get_theme_file_uri('/assets/images/Excellent-Product-3.png') ?>" alt="">
                <p>Seamlessly Perfected Highly Optimized Code</p>
            </a> <!-- Product Item  -->

    </div>
</section> <!-- CodeConfig Excellent Products  -->

<?php get_footer() ;?>

