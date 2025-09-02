<?php
//about theme info
add_action( 'admin_menu', 'multipurpose_ecommerce_gettingstarted' );
function multipurpose_ecommerce_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'multipurpose-ecommerce'), esc_html__('About Theme', 'multipurpose-ecommerce'), 'edit_theme_options', 'multipurpose-ecommerce-guide-page', 'multipurpose_ecommerce_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function multipurpose_ecommerce_admin_theme_style() {
   wp_enqueue_style('multipurpose-ecommerce-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'multipurpose_ecommerce_admin_theme_style');

//guidline for about theme
function multipurpose_ecommerce_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'multipurpose-ecommerce' );
?>

<div class="wrapper-info">  
	<div id="tc-header">
		<div class="tc-container main-header">
			<a class="tc-logo"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/media/logo.png" alt="" />
			</a>
			<span class="tc-header-action">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customize', 'multipurpose-ecommerce'); ?></a>
			<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_FREE_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'multipurpose-ecommerce' ); ?></a>
			<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_BUY_PRO); ?>" target="_blank"> <?php esc_html_e( 'Get Premium', 'multipurpose-ecommerce' ); ?></a>
			<a href="<?php echo esc_url( 'https://www.themescaliber.com/products/wordpress-theme-bundle' ); ?>" class="bundle_btn" target="_blank"> <?php esc_html_e( 'Bundle of 220+ Themes at $99', 'multipurpose-ecommerce' ); ?></a>
			</span>
		</div>
	</div>
	<div class="tc-container tab-sec">
		<div class="tc-tabs">
			<ul>
				<li class="tablinks home active" onclick="multipurpose_ecommerce_openCity(event, 'tc_index')">
					<a href="#">
						<?php esc_html_e( 'Free Theme Information', 'multipurpose-ecommerce' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="multipurpose_ecommerce_openCity(event, 'tc_pro')">
					<a href="#">
						<?php esc_html_e( 'Premium Theme Information', 'multipurpose-ecommerce' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="multipurpose_ecommerce_openCity(event, 'tc_create')">
					<a href="#">
						<?php esc_html_e( 'Theme Support', 'multipurpose-ecommerce' ); ?>
					</a>
				</li>
			</ul>
		</div><!-- END .tc-tabs -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_index" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to Multipurpose Ecommerce Theme', 'multipurpose-ecommerce' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
				<hr>
				<div class="info-link">
					<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_FREE_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'multipurpose-ecommerce' ); ?></a>
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'multipurpose-ecommerce'); ?></a>
					<a class="get-pro" href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'multipurpose-ecommerce'); ?></a>
				</div>
				<div class="col-tc-6">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				</div>
				<div class="col-tc-6">
					<P><?php esc_html_e( 'Multipurpose Ecommerce Theme is an exceptional ecommerce WordPress theme which best suits online book store, mobile & tablet store, apparel store, fashion store, sport store, cosmetics shop, jewelry store and other online stores. The WooCommerce WordPress Theme also caters to the needs of fashion, shopping, online, store, products, marketplace, sales, platform, retail, digital, cart, checkout, customer, multivendor, commerce, website, electronic, handmade wooden watches, vintage jewelry, custom charms, grocery, clothing, and decorative stores, food, home appliances site corporate business, portfolio, and product showcase to build their stunning online presence. This theme offers various personalization options to help you give a look you require on your website. It very easy to navigate and fits various screen sizes. You can showcase full-width images, call to action buttons(CTA), left side-bar sections such as testimonial section to lure as many customers as possible. Furthermore, the social media integration will help you gain exposure in every nook and corner. Its an entirely SEO friendly theme that offers faster page load time and high performance. The theme has few shortcodes and numerous customizable options to fill your website with your colors. It emphasizes on the high-quality banner image that is impressive enough to attract any visitor the moment they visit your website. Built up of optimized, secure and clean codes, It is well worth your purchase. Its Bootstrap base aids web development by enabling multiple features and functionalities on the theme. Grab away this extremely user-friendly and highly professional eCommerce WordPress theme for your store now!', 'multipurpose-ecommerce' ); ?></P>
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_pro" class="tabcontent">
				<h3><?php esc_html_e( 'Multipurpose Ecommerce Theme Information', 'multipurpose-ecommerce' ); ?></h3>
				<hr>
				<div class="info-link-pro">
					<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_BUY_PRO ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'multipurpose-ecommerce' ); ?></a>
					<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'multipurpose-ecommerce' ); ?></a>
					<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'multipurpose-ecommerce' ); ?></a>
				</div>
				<div class="pro-image">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/media/responsive.png" alt="" />
				</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Multipurpose Ecommerce Pro Theme', 'multipurpose-ecommerce' ); ?></h4>
				<p><?php esc_html_e( 'Multipurpose eCommerce Theme is an exceptional eCommerce WordPress theme which best suits online bookstore, mobile & tablet store, apparel store, fashion store, sports store, cosmetics shop, jewelry store and other online stores. The WooCommerce WordPress Theme also caters to the needs of agencies, travel, fashion, design, art, digital agency, bloggers, corporate business, portfolio, and product showcase to build their stunning online presence. This theme offers various personalization options to help you give a look you require on your website. It very easy to navigate and fits various screen sizes. You can showcase full-width images, call to action buttons(CTA), sections such as testimonial section to lure as many customers as possible. Furthermore, the social media integration will help you gain exposure in every nook and corner.', 'multipurpose-ecommerce' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'multipurpose-ecommerce' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Separate Newsletter Section', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slide', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Post type', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'multipurpose-ecommerce' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'multipurpose-ecommerce' ); ?></li>
				</ul>				
			</div>	
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_create" class="tabcontent">
				<div class="tab-cont">
					<h4><?php esc_html_e( 'Need Support?', 'multipurpose-ecommerce' ); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'multipurpose-ecommerce' ); ?></P>
						<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_FREE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'multipurpose-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="tab-cont">	
					<h4><?php esc_html_e('Reviews', 'multipurpose-ecommerce'); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'multipurpose-ecommerce' ); ?></P>
						<a href="<?php echo esc_url( MULTIPURPOSE_ECOMMERCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'multipurpose-ecommerce'); ?></a>
					</div>
				</div>

				<div class="tc-section large-section">
					<h2>Let‘s customize your website</h2>
					<p>There are many changes you can make to customize your website. Explore customization options and make it unique.</p>
					<div class="tc-buttons">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="tc-btn primary large-button"><?php esc_html_e('Start Customizing', 'multipurpose-ecommerce'); ?></a>
					</div><!-- END .tc-buttons -->
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>
</div>
<?php } ?>