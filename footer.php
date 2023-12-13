<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpwebdevs
 */

?>

<section class="wevdevs-footer section-padding">

	<div class="main-footer-topbar">
		<div class="main-footer-topbar-container">
			<div class="footer-topbar-wrapper">
				<div class="footer-topbar-content">
					<h2>You will love our solutions</h2>
					<p>Take a look at our highly rated 0+ premium and free plugins.</p>
				</div>

				<div class="footer-topbar-buttons">
					<a class="btn" href="">PRODUCTS</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="main-footer">
				<div class="main-footer-wrpper">

				<div class="footer-row">
					<div class="footer-logo">
						<a href="index.html"><img src="<?php echo get_theme_file_uri('/assets/images/icons/wp-webdevs-whait-logo.svg') ?>" alt=""></a>
						<p><small>Copyright 2023 © wpwebdevs – All Right Reserved</small></p>
					</div>
				</div>

				<div class="footer-row footer-product">
					<h5>Products</h5>

					<div class="footer-product-list">
						<a href="#"><span><img src="<?php echo get_theme_file_uri('/assets/images/icons/wpddm-single-logo.svg') ?>" alt=""></span>WPDDM</a>
					</div>
				</div>

				<div class="footer-row">
					<h5>Company</h5>
					
					<div class="footer-menu">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact US</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Affiliate Policy</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Refund Policy</a></li>

						</ul>
					</div>
				</div>

				<div class="footer-row footer-social-media">
					<h5>Social Media</h5>
					<div class="social-media">
						<a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/icons/fb-logo-icon.svg') ?>" alt=""></a>
						<a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/icons/twiiter-logo-icon.svg') ?>" alt=""></a>
						<a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/icons/youtube-logo-icon.svg') ?>" alt=""></a>
						<a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/icons/wordpress-logo-icon.svg') ?>" alt=""></a>
						<a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/icons/linkedin-logo-icon.svg') ?>" alt=""></a>
					</div>
				</div>
				</div>
		</div>
	</div>
</section>
<!-- FOOTER END -->
</div>

<?php wp_footer(); ?>

</body>
</html>
