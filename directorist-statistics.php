<?php

/**
 * Plugin Name: Directorist - Statistics
 * Plugin URI: https://github.com/MahfuzulAlam/directorist-statistics
 * Description: This is an extension of the Directorist plugin, showing the statistics of the listings
 * Version: 1.0.0
 * Author: wpWax
 * Author URI: https://wpwax.com
 * License: GPLv2 or later
 * Text Domain: directorist-statistics
 * Domain Path: /languages
 */

// prevent direct access to the file
defined('ABSPATH') || die('No direct script access allowed!');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once(dirname(__FILE__) . '/vendor/autoload.php');
}

/**
 * The code that runs during plugin activation
 */
function activate_directorist_statistics()
{
    Inc\Base\Activate::activate();
}

/**
 * The code that runs during plugin deactivation
 */
function deactivate_directorist_statistics()
{
    Inc\Base\Deactivate::deactivate();
}


function Directorist_Statistics()
{
    /**
     * The code that runs during plugin activation
     */
    register_activation_hook(__FILE__, 'activate_directorist_statistics');
    /**
     * The code that runs during plugin deactivation
     */
    register_deactivation_hook(__FILE__, 'deactivate_directorist_statistics');
    /**
     * Initialize all the core classes of the plugin
     */
    if (class_exists('Inc\\Init')) {
        Inc\Init::register_services();
    }
}

// Check if Directorist plugin is active
if (in_array('directorist/directorist-base.php', (array) get_option('active_plugins'))) {
    Directorist_Statistics();
}
