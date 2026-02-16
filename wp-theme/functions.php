<?php

add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_register_style('bundle', get_template_directory_uri() . '/assets/bundle.css', array(), '1.0', 'all');
	wp_enqueue_style('bundle');

	wp_register_style('additional', get_template_directory_uri() . '/assets/additional.css', array(), '1.0', 'all');
	wp_enqueue_style('additional');
}

function enqueue_swiper_assets()
{
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.0.5');

	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.0.5', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');


function theme_gsap_script()
{
	wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), false, true);
	wp_enqueue_script('gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js', array('gsap-js'), false, true);

	wp_enqueue_script('sliders-js', get_template_directory_uri() . '/js/sliders.js', array('swiper-js', 'gsap-js', 'gsap-st'), '1.0.0', true);
	
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', array('gsap-js', 'gsap-st'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');


function enqueue_custom_fonts()
{
	$fonts_dir = get_template_directory_uri() . '/assets/fonts/';
	$fonts_css = "
@font-face {
	font-family: Forum;
	src: url({$fonts_dir}Forum.woff2) format('woff2');
	font-weight: 400;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-ExtraLight.woff2) format('woff2');
	font-weight: 200;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-Light.woff2) format('woff2');
	font-weight: 300;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-Regular.woff2) format('woff2');
	font-weight: 400;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-Medium.woff2) format('woff2');
	font-weight: 500;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-SemiBold.woff2) format('woff2');
	font-weight: 600;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-Bold.woff2) format('woff2');
	font-weight: 700;
	font-style: normal;
	font-display: swap;
}
@font-face {
	font-family: Vela Sans;
	src: url({$fonts_dir}VelaSans-ExtraBold.woff2) format('woff2');
	font-weight: 800;
	font-style: normal;
	font-display: swap;
}
";
	wp_add_inline_style('bundle', $fonts_css);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');



include 'php/breadcrumbs.php';
include 'php/renderCards.php';
