<?php
/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 */
add_action('wp_enqueue_scripts', 'prefix_add_my_stylesheet');
/**
 * Enqueue plugin style-file
 */
function prefix_add_my_stylesheet()
{
  // Respects SSL, Style.css is relative to the current file
  wp_register_style('prefix-style', plugins_url('style.css', __FILE__));
  wp_enqueue_style('prefix-style');
}
/**
 * Plugin Name: Mijn eigen plugin
 * Plugin URI: gluwebURL
 * Description: Vertel hier iets over de werking van je plugin.
 Version: 1.0.0
 Author: Je Naam
 Author URI: gluwebURL
 License: GPL-2.0+
 */
// Voeg html toe onderin de pagina.
add_action('wp_footer', 'footerBox');
function footerBox()
{
  echo '<div class="infobox">' . get_option('footer_text') . '</div>';
}
add_action('wp_body_open', 'headerBox');
function headerBox()
{
  echo '<div class="infobox">' . get_option('header_text') . '</div>';
}
add_action('admin_menu', 'mijnplugin_menu');
function mijnplugin_menu()
{
  add_menu_page('Wijzig tekst', 'Eigen plugin', 'manage_options', 'eigenplugin_settings_page', 'mijnplugin_page');
}
function mijnplugin_page()
{
  echo '<h2>' . __('Footer Instellingen', 'menu-test') . '</h2>';
  include_once('eigenplugin_settings_page.php');
}