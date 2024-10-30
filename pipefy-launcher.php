<?php
/**
 * Plugin Name: Insert Pipefy Form Launcher
 * Version: 1.0.0
 * Plugin URI: http://thiagomatsunaga.com/pipefy-launcher
 * Description: Insert your Pipefy form easily in your WordPress website.
 * Author: Thiago Matsunaga
 * Author URI: http://thiagomatsunaga.com
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: insert-pipefy-form-launcher
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Thiago Matsunaga
 * @since 1.0.0
 */

 // Including Back-end Code

add_action('admin_menu', 'ipfl_my_admin_menu');

function ipfl_my_admin_menu() {
  add_management_page('Insert Pipefy Form Launcher', 'Insert Pipefy Form Launcher', 'manage_options', __FILE__, 'ipfl_add_form_admin_page');
}

// Including Back-end code
function ipfl_add_form_admin_page() {
  $formVar = get_option('ipfl_plugin_variable_form', '');
  $colorVar = get_option('ipfl_plugin_variable_color', '');
  $nameVar = get_option('ipfl_plugin_variable_name', '');
  $fullpageVar = get_option('ipfl_plugin_variable_fullpage', '0');
  update_option( 'ipfl_plugin_variable_fullpage', '0' );

  if (isset($_POST['change-clicked'])) {
    $sanitize_form_field = sanitize_text_field($_POST['formfield']);
    update_option( 'ipfl_plugin_variable_form', $sanitize_form_field);
    $formVar = get_option('ipfl_plugin_variable_form', 'form');

    $sanitize_color_var = sanitize_text_field($_POST['colorfield']);
    update_option( 'ipfl_plugin_variable_color', $sanitize_color_var);
    $colorVar = get_option('ipfl_plugin_variable_color', 'form');

    $sanitize_name_var = sanitize_text_field($_POST['namefield']);
    update_option( 'ipfl_plugin_variable_name', $sanitize_name_var);
    $nameVar = get_option('ipfl_plugin_variable_name', 'form');

    $sanitize_full_page = sanitize_text_field($_POST['fullpagefield']);
      if( $sanitize_full_page == '1' ) {
        update_option( 'ipfl_plugin_variable_fullpage', $sanitize_full_page);
        $fullpageVar = get_option('ipfl_plugin_variable_fullpage', 'form');
      } else {
        update_option( 'ipfl_plugin_variable_fullpage', '0' );
        $fullpageVar = get_option('ipfl_plugin_variable_fullpage', 'form');
      }
  }

	include_once('pipefy-launcher-settings.php');

}

// Register Scripts and Styles in Admin panel
add_action( 'admin_enqueue_scripts', 'ipfl_custom_color_picker_scripts');

function ipfl_custom_color_picker_scripts() {
  wp_enqueue_style( 'wp-color-picker' );
  wp_enqueue_script( 'iris', admin_url( 'js/iris.min.js' ), array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), false, 1 );
  wp_enqueue_script( 'cp-active', plugins_url('assets/js/backend.js', __FILE__), array('jquery'), '', true );
}


// Including Front-end code
include_once('pipefy-launcher-frontend.php');

// Including Front-end code
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'ipfl_add_plugin_page_settings_link');

function ipfl_add_plugin_page_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'tools.php?page=insert-pipefy-form-launcher/pipefy-launcher.php' ) .
		'">' . __('Settings') . '</a>';
	return $links;
}
