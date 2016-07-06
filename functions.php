<?php
/***********************************************************************
	Declare WooCommerce support
/***********************************************************************/
function tutsplus_woocommerce_theme_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'tutsplus_woocommerce_theme_support' );
/***********************************************************************
	Adding WooCommerce compatibility to theme structure
/***********************************************************************/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function tutsplus_before_main_content() {
	echo '<div class="container">';
}
add_action( 'woocommerce_before_main_content', 'tutsplus_before_main_content' );

function tutsplus_after_main_content() {
	echo '</div>';
}
add_action( 'woocommerce_after_main_content', 'tutsplus_after_main_content' );