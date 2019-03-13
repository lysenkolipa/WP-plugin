<?php
/**
 * Plugin Name:       WP Code Add
 * Description:       Smart surveys start now!
 * Version:           1.0.0
 * Author:            Lipa Lysenko     
 * Text Domain:       CodeAdd
 * License:           GPL-2.0+
 */

include(plugin_dir_path(__FILE__) . 'admin/settings.php');

function after_body_tag() {
  do_action('after_body_tag');
}

function filter_data() {
  $options = get_option('settings_page');
  foreach ($options as $key => $value) {
    switch ($key) {
      case 'after_head':
        add_action( 'wp_head', function() use ($value) { echo $value; }, 1);
        break;
      case 'before_head_end':
        add_action( 'wp_head', function() use ($value) { echo $value; }, 1000);
        break;
      case 'after_body':
        add_action( 'after_body_tag', function() use ($value) { echo $value; }, 1);
        break;
      case 'before_body_end':
        add_action( 'wp_footer', function() use ($value) { echo $value; }, 1000);
        break;    
    }
  }
}

filter_data();