<?php
// Ensure Post Thumbnails are Enabled
function theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_setup' );

// 1. Create Custom Post Type for Brands
function create_brand_post_type() {
	$args = array(
		'public' => true,
		'label'  => 'Brands',
		'supports' => array( 'title', 'editor', 'thumbnail' ), // Ensure 'thumbnail' is supported
	);
	register_post_type( 'brand', $args );
}
add_action( 'init', 'create_brand_post_type' );

// 2. Create Custom Taxonomy for Brand Categories (Optional)
function create_brand_taxonomy() {
	$args = array(
		'label' => 'Brand Categories',
		'rewrite' => array( 'slug' => 'brand-category' ),
		'hierarchical' => true,
	);
	register_taxonomy( 'brand_category', 'brand', $args );
}
add_action( 'init', 'create_brand_taxonomy' );

// 3. Display Brands with Images in the Specified HTML Structure
function display_brands() {
	$args = array(
		'post_type' => 'brand',
		'posts_per_page' => -1, // Display all brands
	);
	$brands = new WP_Query( $args );

	if ( $brands->have_posts() ) {
		echo '<div class="client-slider-slick">';
		while ( $brands->have_posts() ) {
			$brands->the_post();
			echo '<div class="single-client">';
			if ( has_post_thumbnail() ) {
				$image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				echo '<img src="' . esc_url( $image_url ) . '" class="img-client" alt="' . esc_attr( get_the_title() ) . '">';
			} else {
				echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/default-client.png" class="img-client" alt="default image">';
			}
			echo '</div>';
		}
		echo '</div>';
		wp_reset_postdata();
	} else {
		echo 'No brands found';
	}
}

// Shortcode to display brands catalog with images
function brands_catalog_shortcode() {
	ob_start();
	display_brands();
	return ob_get_clean();
}
add_shortcode( 'brands_catalog', 'brands_catalog_shortcode' );
