<?php

/**
 * @package WK7-ASSESSMENT
 */

/*
Plugin Name: Assessment 7
Plugin URI: http://k0r3s.me
Description: My week seven weekly assesment project at the Jitu
Version: 1.0.0
Author: Joel Kores
Author URI: http://github.com/0xAckerMan
License: GPLv2 or Later
Text Domain: Assessment7 Plugin
*/

//Security Check here and there
defined('ABSPATH') or die("Caught you hacker");

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}


function activate_wkseven_plugin(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_wkseven_plugin');

function deactivate_wkseven_plugin(){
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_wkseven_plugin');

if (class_exists( 'Inc\\Init')){
    Inc\Init::register_sevices();
}