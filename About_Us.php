<?php
/**
 *  Template Name: About_Us
 * */ 
get_header() ;?>

<section class="section about-hero relative">
    <div class="cc-shape shape-small shape-blue shape-bottom shape-right"></div>
    <div class="cc-shape shape-oval shape-blue shape-top shape-left-0"></div>
    <div class="cc-shape shape-small shape-red shape-top-0 shape-right"></div>

    <div class="container">
        <div class="section-title text-center relative">
            <div class="heading-bg-2"></div>
            <div class="cc-shape shape-small shape-red shape-top-0 shape-left"></div>

            <h1>Explore Our Solutions</h1>
            <p>We are a team dedicated to supporting businesses in their growth journey by providing simple and affordable solutions.</p>
        </div>
    </div>
</section><!-- About Hero  -->


<section class="section codeconfig-about relative">
    <div class="cc-shape shape-small shape-red shape-top-0 shape-right"></div>
    <div class="cc-shape shape-medium shape-red shape-bottom-0 shape-left"></div>

    <div class="container">
        <div class="about-items">
            <div class="d-flex space-between align-center about-item">
                <div class="section-title">
                    <h2>Who <span>We Are</span></h2>
                    <p>Elevate your WordPress journey! Our cutting-edge solutions boost performance, streamline functionality, and make it all smoother, faster, and simpler.</p>
                </div>
                <div class="section-image">
                    <img src="/assets/images/our-goal.png" alt="">
                </div>
            </div>

            <div class="d-flex space-between align-center about-item ">
                <div class="section-title">
                    <h2>Our <span>Goal</span></h2>
                    <p>We're all about crafting top-notch custom PHP applications with a focus on WordPress. Our mission is simple: deliver high-quality and scalable solutions. We bring our coding expertise to the table, incorporating the latest industry trends to create plugins that cater to eCommerce, Project Management, and Enterprise Solutions.</p>
                </div>
                <div class="section-image">
                    <img src="/assets/images/our-goal.png" alt="">
                </div>
            </div>
        </div><!-- About Items  -->
        
    </div>
</section> <!-- CodeConfig About  -->


<section class="section codeconfig-Team relative">
    <div class="cc-shape shape-large shape-red shape-top-0 shape-left"></div>
    <div class="cc-shape shape-medium shape-blue shape-top-0 shape-right"></div>
    <div class="cc-shape shape-medium shape-blue shape-bottom-0 shape-middle"></div>
    <div class="cc-shape shape-xsmall-2 shape-blue shape-bottom-0 shape-left"></div>
    <div class="cc-shape shape-xsmall-2 shape-red shape-bottom-0 shape-right"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Meet With <span>Our Team</span></h2>
            <p>At the core of our team lies an unwavering passion for creativity and dedication. We thrive on the art of crafting exceptional products that redefine experiences.</p>
        </div>

        <div class="team-members flex-center flex-wrap">
            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Jakirul_Islam.png" alt="">
                </div>
                <h4 class="name">Jakirul Islam</h4>
                <h5 class="title">CEO & Founder</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Tanin_Ahmed.png" alt="">
                </div>
                <h4 class="name">Tanin Ahmed</h4>
                <h5 class="title">Tanin Ahmed</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Mr_XYZ.png" alt="">
                </div>
                <h4 class="name">Saiful Islam</h4>
                <h5 class="title">WordPress Developer</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Ahnaf_Istiyad.png" alt="">
                </div>
                <h4 class="name">Ahanaf Istiyad</h4>
                <h5 class="title">WordPress Developer</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Mahmudul_Hasan.png" alt="">
                </div>
                <h4 class="name">Mahmudul Hasan</h4>
                <h5 class="title">UI/UX Designer</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Mehedy_Hasan.png" alt="">
                </div>
                <h4 class="name">Mehedy Hasan</h4>
                <h5 class="title">Frontend  Developer</h5>
            </div> <!-- Member  -->

            <div class="member text-center">
                <div class="member-photo">
                    <img src="/assets/images/Jakirul_Islam.png" alt="">
                </div>
                <h4 class="name">Brian Jackson</h4>
                <h5 class="title">CMO Of Kinsta</h5>
            </div> <!-- Member  -->
        </div> <!-- team-members -->
    </div>
</section> <!-- CodeConfig Team  -->

<section class="section codeconfig-counter about-counter relative">
    <div class="cc-shape shape-medium shape-red shape-left shape-bottom"></div>
    <div class="cc-shape shape-medium shape-blue shape-right shape-bottom"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2>Explore <span>Our Solutions</span></h2>
            <p>Elevate your WordPress journey! Our cutting-edge solutions boost performance, streamline functionality, and make it all smoother, faster, and simpler.</p>
        </div>

        <div class="counter-wrapper">
            <?php $counter_list = get_field('counter_list'); foreach($counter_list as $counter): ?>
            <div class="counter-box text-center">
                <div class="counter-icon flex-center"><img src="<?php echo $counter['add_counter_image']['url']; ?>" alt="<?php echo $counter['add_counter_image']['alt']; ?>"></div>
                <h2><span class="cc_counter"><?php echo $counter['counter_quantity']; ?></span><?php echo $counter['quantity_mark']; ?></h2>
                <p><?php echo $counter['counter_title']; ?></p>
            </div> <!-- Counter Item  -->
            <?php endforeach ; ?>
        </div>
        
    </div>
</section> <!-- CodeConfig Counter  -->

<?php get_footer() ;?>