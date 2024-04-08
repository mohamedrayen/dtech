<?php
/* Template Name: Home page */
get_header();
?>
	<!-- banner section -->
	<section class="xs-banner banner-v2">
		<div class="container">
			<div class="row">
				<div class="col-md-7 align-self-center">
					<div class="xs-banner-content">
						<h1 class="banner-sub-title wow fadeInLeft">WE PROVIDE</h1>
						<h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">PREMIUM HOSTING</h2>
						<p class="wow fadeInUp" data-wow-duration="1.5s">Share processes and data securely on a need to know basis  without the need for reconciliation it combines a permissione.</p>
						<div class="xs-btn-wraper wow fadeInUp" data-wow-duration="1.7s">
							<a href="#" class="btn btn-primary">Get Started</a>
							<a href="#" class="btn btn-outline-primary">Know More</a>
						</div>
					</div><!-- .xs-banner-content END -->
				</div>
				<div class="col-md-5">
					<div class="xs-banner-image">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/welcome/banner_image-3.png" alt="Welcome banner image">
					</div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- End banner section -->

	<!-- domain search section -->
	<div class="xs-domain-search">
		<div class="container">
			<div class="domain-search-form-group wow fadeIn">
				<form action="#" method="POST" class="domain-search-form">
					<input type="search" placeholder="Enter Address" id="domain-search">
					<div class="select-group">
						<select name="domainList">
							<option value="com" selected>.com</option>
							<option value="net">.net</option>
							<option value="io">.io</option>
							<option value="info">.info</option>
							<option value="store">.store</option>
						</select>
						<input type="submit" value="Search">
					</div>
				</form>
				<ul class="xs-domain-info">
					<li>
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/domain/com.png" alt="Domain name">
						<strong>$2.95</strong>
					</li>
					<li>
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/domain/co.png" alt="Domain name">
						<strong>$4.5</strong>
					</li>
					<li>
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/domain/net.png" alt="Domain name">
						<strong>$5.8</strong>
					</li>
					<li>
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/domain/info.png" alt="Domain name">
						<strong>$7.9</strong>
					</li>
					<li>
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/domain/store.png" alt="Domain name">
						<strong>$1.00</strong>
					</li>
				</ul>
			</div>
		</div><!-- .container END -->
	</div><!-- End domain search section -->

	<!-- why choose section -->
	<section class="why-choose-section xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<div class="xs-heading wow fadeIn">
						<h2 class="heading-sub-title">Best Hosting</h2>
						<h3 class="heading-title">WHY <span>CHOOSE US</span></h3>
					</div><!-- .xs-heading END -->
				</div>
			</div><!-- .row END -->
			<div class="row choose-us-v2">
				<div class="col-lg-4 col-md-6">
					<div class="why-choose-us-block wow fadeInUp">
						<div class="choose-us-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-4.png" alt="D technologie hosting image">
						</div>
						<h4 class="xs-title">Uptime Guarantee</h4>
						<p>Share processes and data secure <br> lona need to know basis</p>
					</div><!-- .why-choose-us-block END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
						<div class="choose-us-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-5.png" alt="D technologie hosting image">
						</div>
						<h4 class="xs-title">Safe and Secured</h4>
						<p>Our team assured your web site is always safe and secure</p>
					</div><!-- .why-choose-us-block END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
						<div class="choose-us-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/chooseUs/choose-us-6.png" alt="D technologie hosting image">
						</div>
						<h4 class="xs-title">Our Dedicated Support</h4>
						<p>We finally found a host that truly understood the unique</p>
					</div><!-- .why-choose-us-block END -->
				</div>
			</div>
		</div><!-- .container END -->
	</section><!-- END why choose section -->

	<!-- pricing section -->
	<section class="pricing-section xs-section-padding xs-bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<div class="xs-heading wow fadeIn">
						<h2 class="heading-sub-title">Pricing Plans</h2>
						<h3 class="heading-title">OUR <span>BEST PRICING</span></h3>
					</div><!-- .xs-heading END -->
				</div>
			</div><!-- .row END -->
			<div class="row">
				<div class="col-md-12 xs-pricing-group">
					<ul class="nav nav-tabs main-nav-tab tab-swipe wow fadeIn" role="tablist">
						<li>
							<a id="monthly-tab" class="active show" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
						</li>
						<li>
							<a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Yearly</a>
						</li>
					</ul>
					<div class="tab-content pricing-v2">
						<div class="tab-pane fadeIn animated show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-1.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">Cloud Hosting</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The High performance cloud platform ever</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>49</h2>
												<h6 class="discount-price">25% Discount<del>$49.99</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing active">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-2.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">VPS Hosting</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The ideal solution for corporate websites and larger blogs</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>39</h2>
												<h6 class="discount-price">25% Discount<del>$49.99</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-3.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">Dedicated Hosting</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The High performance cloud platform ever</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>49</h2>
												<h6 class="discount-price">25% Discount<del>$49.99</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
							</div>
						</div>
						<div class="tab-pane fadeIn animated" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-1.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">Dedicated Server</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The High performance cloud platform ever</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>100</h2>
												<h6 class="discount-price">50% Discount<del>$200.0</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing active">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-2.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">Reseller Hosting</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The ideal solution for corporate websites and larger blogs</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>59</h2>
												<h6 class="discount-price">25% Discount<del>$108.99</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="xs-single-pricing">
										<div class="pricing-header">
											<div class="pricing-img-block">
												<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/pricing/pricing-3.png" alt="D technologie pricing image">
											</div>
											<h4 class="xs-title">Shared Hosting</h4>
										</div><!-- .pricing-header END -->
										<div class="pricing-body">
											<p>The High performance cloud platform ever</p>
											<div class="pricing-price">
												<p>Starting at</p>
												<h2><sup>$</sup>19</h2>
												<h6 class="discount-price">20% Discount<del>$29.99</del></h6>
											</div>
										</div><!-- .pricing-body END -->
										<div class="pricing-footer">
											<a href="#" class="btn btn-primary">Buy Now</a>
										</div><!-- .pricing-footer END -->
									</div><!-- .xs-single-pricing END -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 mx-auto">
					<div class="pricing-info wow fadeIn">
						<h5><a href="pricing.html">See plan details</a>and pricing for more information </h5>
						<ul class="xs-list list-inline">
							<li><i class="icon icon-back_up"></i>Daily backups</li>
							<li><i class="icon icon-migration"></i>Free migrations</li>
							<li><i class="icon icon-checkmark"></i>Staging environments</li>
						</ul>
					</div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- END pricing section -->

	<!-- hosting info section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="hosting-info-wraper-2 wow fadeInLeft" data-wow-duration="1.5s">
						<h2 class="content-title">Powerful Server and Platform</h2>
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/gaurd-icon.png" alt="hosting info icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title small">Better Security and faster Server</h4>
								<p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
							</div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/cloud-icon.png" alt="hosting info icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title small">No-Downtime website transfers </h4>
								<p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
							</div>
						</div><!-- .hosting-info-list END -->
						<div class="media hosting-info-list">
							<div class="d-flex info-icon">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/clock-icon.png" alt="hosting info icon">
							</div>
							<div class="media-body">
								<h4 class="xs-title small">Deployment within few minutes </h4>
								<p>Our best-in-class WordPress solution, with additio nal optiz ation to make running a WooCommerce</p>
							</div>
						</div><!-- .hosting-info-list END -->
						<a href="#" class="btn btn-primary">Get Started</a>
					</div><!-- .hosting-info-wraper END -->
				</div>
				<div class="col-lg-6">
					<div class="hosting-info-img wow fadeInRight" data-wow-duration="2s">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-3.png" alt="Hosting info image">
					</div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- END hosting info section -->

	<!-- hosting info section -->
	<section class="xs-section-padding xs-bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hosting-info-img wow fadeInRight">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/info-img-4.png" alt="Hosting info image">
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="hosting-info-wraper">
						<div class="spinner-icon wow">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/info/electric-wave.png" alt="hosting info info">
						</div>
						<div class="wow fadeInUp" data-wow-duration="1.5s">
							<h2 class="content-title">Optimized Hosting for  WordPress</h2>
							<p>WordPress is a powerful content management system designed to work. We’re turning our passion for WordPress into the most amazing managed platform for your  WordPress websites ever. </p>
							<ul class="xs-list check">
								<li>No Limits on Traffic, Storage, and Websites*</li>
								<li>Free Domain Registration with Annual Plans.</li>
								<li>Free SSL Encryption with Let's Encrypt 1-Click Installer</li>
							</ul>
							<a href="#" class="btn btn-primary">Get Started</a>
						</div>
					</div><!-- .hosting-info-wraper END -->
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- END hosting info section -->

	<!-- call to action section -->
	<section class="call-to-action-section call-to-action-v2 wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="call-to-action-content">
						<h2>We don’t compromise with the best Hosting Solution</h2>
						<div class="xs-btn-wraper">
							<a href="#" class="btn btn-secondary">Get Started</a>
							<a href="#" class="btn btn-outline-primary">Know More</a>
						</div>
					</div>
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
		<div class="icon-bg" style="background-image: url(<?= get_stylesheet_directory_uri() ?>/assets/images/icon-bg-2.png)"></div>
	</section><!-- END call to action section -->

	<!-- service section -->
	<section class="service-section xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mx-auto wow fadeIn">
					<div class="xs-heading">
						<h2 class="heading-sub-title">Best Service</h2>
						<h3 class="heading-title">OUR <span>BEST SERVICE</span></h3>
					</div><!-- .xs-heading END -->
				</div>
			</div><!-- .row END -->
			<div class="row">
				<div class="col-lg-4 col-md-6 xs-mb-8">
					<div class="xs-service-block wow fadeInUp">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-7.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="shared-hosting.html">Shared Hosting</a></h4>
						<p>Share processes and data secure <br> lon a need to know basis </p>
						<a href="shared-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
				<div class="col-lg-4 col-md-6 xs-mb-8">
					<div class="xs-service-block wow fadeInUp" data-wow-duration="1.5s">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-8.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="reseller-hosting.html">Reseller Hosting</a></h4>
						<p>Out of the handful of hosting and solutions we tested </p>
						<a href="reseller-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
				<div class="col-lg-4 col-md-6 xs-mb-8">
					<div class="xs-service-block wow fadeInUp" data-wow-duration="2s">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-9.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="vps-hosting.html">VPS Hosting</a></h4>
						<p>We finally found a host that truly understood the unique </p>
						<a href="vps-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-service-block wow fadeInUp" data-wow-duration="2.5s">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-10.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="cloud-hosting.html">Cloud Hosting</a></h4>
						<p>Share processes and data secure <br> lon a need to know basis </p>
						<a href="cloud-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-service-block wow fadeInUp" data-wow-duration="3s">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-11.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="dedicated-hosting.html">Dedicated Hosting</a></h4>
						<p>Out of the handful of hosting and solutions we tested </p>
						<a href="dedicated-hosting.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-service-block wow fadeInUp" data-wow-duration="3.5s">
						<div class="service-img">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/service/service-12.png" alt="hosting service icon">
						</div>
						<h4 class="xs-title"><a href="domain.html">Domain Name</a></h4>
						<p>We finally found a host that truly understood the unique </p>
						<a href="domain.html" class="simple-btn icon-right">Learn More<i class="icon icon-play2"></i></a>
					</div><!-- .xs-service-block END -->
				</div>
			</div>
		</div><!-- .container END -->
	</section><!-- END service section -->

	<!-- testimonial section -->
	<section class="xs-testimonial-section testimonial-v2 wow fadeIn">
		<div class="container">
			<div class="xs-testimonial-slider testimonial-slider owl-carousel">
				<div class="xs-testimonial-item">
					<div class="testimonial-content">
						<p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
						<div class="commentor-bio media">
							<div class="d-flex round-avatar">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/avatar/avatar-1.png" alt="avatar image">
							</div>
							<div class="media-body align-self-center">
								<h4 class="commentor-title">Richard I Jones</h4>
								<p class="commentor-info">WWW Realty</p>
								<i class="icon icon-quote"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="xs-testimonial-item">
					<div class="testimonial-content">
						<p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
						<div class="commentor-bio media">
							<div class="d-flex round-avatar">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/avatar/avatar-2.png" alt="avatar image">
							</div>
							<div class="media-body align-self-center">
								<h4 class="commentor-title">Cecilia H King</h4>
								<p class="commentor-info">The White Rabbit</p>
								<i class="icon icon-quote"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="xs-testimonial-item">
					<div class="testimonial-content">
						<p>Our best-in-class WordPress solution with additio nal optiz ation to make an running a WooCommerce</p>
						<div class="commentor-bio media">
							<div class="d-flex round-avatar">
								<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/avatar/avatar-3.png" alt="avatar image">
							</div>
							<div class="media-body align-self-center">
								<h4 class="commentor-title">Joe D Walczak</h4>
								<p class="commentor-info">Hechinger</p>
								<i class="icon icon-quote"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .container END -->
	</section><!-- END testimonial section -->

	<!-- blog section -->
	<section class="xs-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<div class="xs-heading wow fadeIn">
						<h2 class="heading-sub-title">Latest Info</h2>
						<h3 class="heading-title">GET <span>LATEST INFO</span></h3>
					</div><!-- .xs-heading END -->
				</div>
			</div><!-- .row END -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="xs-blog-post wow fadeInUp">
						<div class="post-image">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/blogs/blogs-4.jpg" alt="hosting blog images">
						</div><!-- .post-image END -->
						<div class="entry-header">
							<div class="post-meta">
								<span class="post-cat"><a href="#">Cloud Hosting</a></span>
							</div>
							<h2 class="entry-title"><a href="blog-single.html">Best domain name for Business</a></h2>
							<div class="entry-meta">
								<span class="meta-date">7 March, 2024</span>
							</div>
						</div><!-- .entry-header END -->
					</div><!-- .xs-blog-post END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-blog-post wow fadeInUp" data-wow-duration="1.5s">
						<div class="post-image">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/blogs/blogs-5.jpg" alt="hosting blog images">
						</div><!-- .post-image END -->
						<div class="entry-header">
							<div class="post-meta">
								<span class="post-cat"><a href="#">Reseller Hosting</a></span>
							</div>
							<h2 class="entry-title"><a href="blog-single.html">Best reseller hosting for start business</a></h2>
							<div class="entry-meta">
								<span class="meta-date">1 June, 2017</span>
							</div>
						</div><!-- .entry-header END -->
					</div><!-- .xs-blog-post END -->
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="xs-blog-post wow fadeInUp" data-wow-duration="2s">
						<div class="post-image">
							<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/blogs/blogs-6.jpg" alt="hosting blog images">
						</div><!-- .post-image END -->
						<div class="entry-header">
							<div class="post-meta">
								<span class="post-cat"><a href="#">Shared Hosting</a></span>
							</div>
							<h2 class="entry-title"><a href="blog-single.html">Domain name for student</a></h2>
							<div class="entry-meta">
								<span class="meta-date">2 April, 2017</span>
							</div>
						</div><!-- .entry-header END -->
					</div><!-- .xs-blog-post END -->
				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</section><!-- END blog section -->

	<!-- language switcher strart -->
	<!-- xs modal -->
	<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="language-content">
					<p>Switch The Language</p>
					<ul class="flag-lists">
						<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
						<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
						<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
						<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
						<li><a href="#"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- End xs modal --><!-- end language switcher strart -->

	<!-- language switcher strart -->
	<!-- xs modal -->
	<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="xs-search-panel">
					<form action="#" method="POST" class="xs-search-group">
						<input type="search" class="form-control" name="search" id="search" placeholder="Search">
						<button type="submit" class="search-button"><i class="icon icon-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- End xs modal --><!-- end language switcher strart -->

	<!-- offset cart strart -->
	<!-- sidebar cart item -->
	<div class="xs-sidebar-group cart-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading media">
					<div class="media-body">
						<a href="#" class="close-side-widget">
							X
						</a>
					</div>
				</div>
				<div class="xs-empty-content">
					<h3 class="widget-title">Shopping cart</h3>
					<h4 class="xs-title">No products in the cart.</h4>
					<p class="empty-cart-icon">
						<i class="icon icon-shopping-cart"></i>
					</p>
					<p class="xs-btn-wraper">
						<a class="btn btn-primary" href="#">Return To Shop</a>
					</p>
				</div>
			</div>
		</div>
	</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

	<!-- offset cart strart -->
	<!-- sidebar cart item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-logo-wraper">
						<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/blue_logo.png" alt="sidebar logo">
					</div>
					<p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
					<ul class="sideabr-list-widget">
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/location.png" alt="">
								</div>
								<div class="media-body">
									<p>759 Pinewood Avenue</p>
									<span>Marquette, Michigan</span>
								</div>
							</div><!-- address 1 -->
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/mail.png" alt="">
								</div>
								<div class="media-body">
									<a href="mailto:contact@d-technology.com">contact@d-technology.com</a>
									<span>Online Support</span>
								</div>
							</div><!-- address 1 -->
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/phone.png" alt="">
								</div>
								<div class="media-body">
									<p>906-624-2565</p>
									<span>Mon-Fri 8am-5pm</span>
								</div>
							</div><!-- address 1 -->
						</li>
					</ul><!-- .sideabr-list-widget -->
					<div class="subscribe-from">
						<p>Get Subscribed!</p>
						<form action="#" method="POST" id="subscribe-form" class="subscribe-form">
							<label for="sub-input"></label>
							<div class="form-group">
								<input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
								<button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
							</div>
						</form>
					</div>
					<ul class="social-list version-2">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
					</ul><!-- .social-list -->
					<div class="text-center">
						<a href="#" class="btn btn-primary">Purchase Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->

<?php
get_footer();