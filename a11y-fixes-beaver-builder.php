<?php
/**
 * Plugin Name: Accessibility Fixes for Beaver Builder
 * Plugin URI: 
 * Description: Addresses a11y issues with the Beaver Builder Plugin
 * Version: 0.1.0
 * Author: Forte Press
 * Author URI: https://forte-press.com
 * Copyright: (c) 2022 Forte Press
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fl-builder
 */

add_filter('fl_builder_module_frontend_file', 'afbb_button_frontend', 10, 2); 

function afbb_button_frontend( $path, $module) {
     if( 'button' != $module->slug) {
         return $path;
     }
     return __DIR__ . '/includes/button.php';
}

 
add_filter('fl_builder_render_module_html', 'afbb_button_render_frontend', 10, 4);

function afbb_button_render_frontend( $path, $type, $settings, $module) {
    if( 'button' != $type) {
        return $path;
    }
    return __DIR__ . '/includes/button.php';
}


 