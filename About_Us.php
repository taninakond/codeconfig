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

            <?php $about_us_banner = get_field('about_us_banner'); if($about_us_banner){echo $about_us_banner['about_us_banner_content']; } ?>
        </div>
    </div>
</section><!-- About Hero  -->


<section class="section codeconfig-about relative">
    <div class="cc-shape shape-small shape-red shape-top-0 shape-right"></div>
    <div class="cc-shape shape-medium shape-red shape-bottom-0 shape-left"></div>

    <div class="container">
        <div class="about-items">

            <?php $about_items = get_field('about_items'); foreach($about_items as $about): ?>
            <div class="d-flex space-between align-center about-item">
                <div class="section-title">
                    <?php echo $about['about_content']; ?>
                </div>
                <div class="section-image">
                    <img src="<?php echo $about['add_about_image']['url']; ?>" alt="<?php echo $about['add_about_image']['alt']; ?>">
                </div>
            </div>
            <?php endforeach; ?>

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
           <?php $team_section_title = get_field('team_section_title'); if($team_section_title){echo $team_section_title['team_section_content'];} ?>
        </div>

        <div class="team-members flex-center flex-wrap">

            <?php $team_member_list = get_field('team_member_list'); foreach($team_member_list as $member): ?>
            <div class="member text-center">
                <div class="member-photo">
                    <img src="<?php echo $member['add_team_member_photo']['url']; ?>" alt="<?php echo $member['add_team_member_photo']['alt']; ?>">
                </div>
                <h4 class="name"><?php echo $member['name_of_team_member']; ?></h4>
                <h5 class="title"><?php echo $member['title_of_team_member']; ?></h5>
            </div> <!-- Member  -->
            <?php endforeach; ?>
        </div> <!-- team-members -->
    </div>
</section> <!-- CodeConfig Team  -->

<section class="section codeconfig-counter about-counter relative">
    <div class="cc-shape shape-medium shape-red shape-left shape-bottom"></div>
    <div class="cc-shape shape-medium shape-blue shape-right shape-bottom"></div>
    <div class="container">
        <?php get_template_part( '/counter_template' ); ?>
    </div>
</section> <!-- CodeConfig Counter  -->

<?php get_footer() ;?>