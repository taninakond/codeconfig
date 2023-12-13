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

<main id="primary" class="site-main">

	<section class="webdevs-page-header coverbg" style="background-image: url('/wp-content/themes/wpwebdevs/assets/images/all-page-bg.png');">
		<div class="container">
			<div class="blog-content text-center">
				<h1><?php echo get_the_title(); ?></h1>

				<div class="date d-flex">
					<div class="date-icon">
						<img src="<?php echo get_theme_file_uri('/assets/images/icons/date-icon.svg'); ?>" alt="">
					</div>
					<h6><?php echo get_the_date(); ?></h6>
				</div>
			</div>
		</div>
	</section><!-- BLOG-HERO SECTION END-->

	<div class="wpwebdevs-blog-single">

		<div class="container">
			<div class="has-sidebar">
				<div class="default-editor">
					<?php
					while (have_posts()) :
						the_post();

						echo get_the_content();

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'wpwebdevs') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'wpwebdevs') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.

					echo '</div><div class="wpwebdevs-sidebar">';
					if (get_sidebar('sidebar-1')) {
						get_sidebar();
					}
					echo '</div>';

					?>
				</div>
			</div>
		</div>

</main><!-- #main -->

<?php
get_footer();
