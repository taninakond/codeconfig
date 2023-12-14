<footer>
	<div class="footer-top">
		<div class="footer-top-wrap" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/footer-top-bg.jpg'); ?>);">
			<div class="container d-flex space-between">
				<div class="image-side d-flex">
					<img src="<?php echo get_theme_file_uri('/assets/images/footer-top-img.png'); ?>" alt="">
				</div>
				<div class="content-side">
					<?php if(is_active_sidebar( 'footertop' )){dynamic_sidebar( 'footertop' );} ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="d-flex space-between flex-wrap">
				<div class="left-side">
					<a href="<?php echo site_url( ); ?>" class="footer-logo"><img src="<?php echo get_theme_file_uri('/assets/images/footer-logo.png'); ?>" alt=""></a>
					<h4 class="subscribe-title"><strong>Subscribe </strong>to our newslatter</h4>
					<div class="subscribe-form">
						<form action="" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
							<div class="d-flex space-between align-center">
							<div class="email">
							<p><span data-name="your-email"><input aria-required="true" aria-invalid="false" value="" type="email" name="your-email" placeholder="Email Address"></span><br></p>
							</div>
							<div class="submit-btn">
							<p><input type="submit" value="Send"></p>
							</div>
							</div>
						</form>
					</div>
					<div class="social-icons">
					<?php if(is_active_sidebar( 'socialmedia' )){dynamic_sidebar( 'socialmedia' );} ?>
					</div>
				</div>
				<div class="right-side d-flex space-between">
					
					<div class="footer-menu company">
						<h4>Company</h4>
							<?php
							wp_nav_menu( [
							'theme_location' => 'company-menu',
							'menu_class' => 'company-menu',
							'container'      => false,
							// 'walker' => new Walker_Nav_Menu_Edit_Custom(), // Use the custom Walker
							] );
							?>
					</div>

					<div class="footer-menu resources">
						<h4>Resources</h4>
							<?php
							wp_nav_menu( [
							'theme_location' => 'resources-menu',
							'menu_class' => 'resources-menu',
							'container'      => false,
							// 'walker' => new Walker_Nav_Menu_Edit_Custom(), // Use the custom Walker
							] );
							?>
					</div>
					<div class="footer-menu products">
						<h4>Products</h4>
						<ul>
							<li><a href="#"><span><img src="./assets/images/ddm-footer.svg" alt=""></span>Dusky Dark Mode</a></li>
							<li><a href="#"><span><img src="./assets/images/ddm-footer.svg" alt=""></span>Dusky Dark Mode</a></li>
							<li><a href="#"><span><img src="./assets/images/ddm-footer.svg" alt=""></span>Dusky Dark Mode</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>© 2023 CodeConfig . All Right Reserved.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
