<?php


add_action( 'wp_footer', 'ipfl_addForm' );

function ipfl_addForm() {
  $formVar = get_option('ipfl_plugin_variable_form');
  $colorVar = get_option('ipfl_plugin_variable_color');
  $nameVar = get_option('ipfl_plugin_variable_name');
  $fullpageVar = get_option('ipfl_plugin_variable_fullpage');

  $launcherComponents = '';
  $launcherComponentsEmptyState = '';

  if( $formVar != null ) {

    if( $fullpageVar == '1')
      // fullpage experience
      include_once('pipefy-launcher-frontend-open-full.php');
    else {
      // popup experience
      include_once('pipefy-launcher-frontend-open.php');
    }

  } else {

        if( $fullpageVar == '1')
      // fullpage experience
      include_once('pipefy-launcher-frontend-open-full-empty-state.php');
      else {
      // popup experience
      include_once('pipefy-launcher-frontend-empty-state.php');
      }
  }
}

add_action('wp_enqueue_scripts','ipfl_enqueue_styles',12);

function ipfl_enqueue_styles() {
	$file_url = plugins_url('assets/css/frontend.css',__FILE__);
	wp_enqueue_style('sp_sytlesheet',$file_url);
}

add_action('wp_enqueue_scripts','ipfl_enqueue_js',12);

function ipfl_enqueue_js() {
	$file_url = plugins_url('assets/js/frontend.js',__FILE__);
	wp_enqueue_script('sp_sytlesheet',$file_url, '', '', true );
}
