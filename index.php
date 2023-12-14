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
                <ul class="unstyle d-flex align-center hide-mobile">
                    <li class="transition">All</li>
                    <li class="transition">Popular</li>
                    <li class="transition">Recent</li>
                    <li class="transition">Products</li>
                    <li class="transition">Guides</li>
                    <li class="transition">Solutions</li>
                    <li class="transition">Others</li>
                </ul>
                <select name="" id="" class="hide-desktop hide-tab">
                    <option value="">All</option>
                    <option value="">Popular</option>
                    <option value="">Recent</option>
                    <option value="">Products</option>
                    <option value="">Guides</option>
                    <option value="">Solutions</option>
                    <option value="">Others</option>
                </select>
            </div>
            <div class="blog-search">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search anything...." name="search">
                        <button type="submit"><img src="/assets/images/search-icon.svg" alt=""></i></button>
                    </form>
                    </div>
            </div>
        </div> <!-- Blog Head  -->

        <div class="cc-blog d-flex flex-wrap">

            <?php while(have_posts()): the_post(); ?>
            <div class="blog-item text-center">
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()) {the_post_thumbnail(); } ?>
                </a>
                </div>
                <div class="post-details">
                    <ul class="post-meta unstyle flex-center">
                        <li><img src="<?php echo get_theme_file_uri('/assets/images/date-icon.svg'); ?>" alt=""><span><?php the_date(  ); ?></span></li>
                        <li><img src="<?php echo get_theme_file_uri('/assets/images/time-icon.svg'); ?>" alt=""><span><?php the_time( ); ?></span></li>
                        <li><img src="<?php echo get_theme_file_uri('/assets/images/comment-icon.svg'); ?>" alt=""><span><?php comments_number(  ); ?></span></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                    <a class="post-btn" href="<?php the_permalink(); ?>"><?php echo __('Continue Reading', 'codeconfig') ?><img src="<?php echo get_theme_file_uri('/assets/images/right-arrow.svg'); ?>" alt=""> </a>
                </div>
            </div> <!-- Blog Item  -->
            <?php endwhile; ?>

        </div> <!-- CC Blog  -->
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
                <img src="/assets/images/Excellent-Product-4.png" alt="">
                <p>Creative Feature-Packed Plugins</p>
            </a> <!-- Product Item  -->

            <a href="#" class="iconbox text-center" style="color:#F7F8FD">
                <img src="/assets/images/Excellent-Product-1.png" alt="">
                <p>Stellar Support Empowerment Guides</p>
            </a> <!-- Product Item  -->
            
            <a href="#" class="iconbox text-center" style="color:#F2E5FF">
                <img src="/assets/images/Excellent-Product-3.png" alt="">
                <p>Seamlessly Perfected Highly Optimized Code</p>
            </a> <!-- Product Item  -->

    </div>
</section> <!-- CodeConfig Excellent Products  -->

<?php get_footer() ;?>

