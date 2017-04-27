<?php
/*
Plugin Name: Simplest Under Construction
Description: This is the simplest plugin to restrict a Wordpress site to the public. You can allow them by IP or user role.
Author: Bilal TAS
Author URI: http://bilaltas.net
Version: 0.3
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'SUC_FILE', __FILE__ );
define( 'SUC_DEBUG', false );


// Front-End
if ( !is_admin() )
	require_once( dirname( SUC_FILE ).'/suc_files/under_construction_public.php' );


// Back-End
else
	require_once( dirname( SUC_FILE ).'/suc_files/under_construction.php' );


// For Both
require_once( dirname( SUC_FILE ).'/suc_files/under_construction_admin-public_functions.php' );


// Check the plugin updates
require 'plugin-update-checker/plugin-update-checker.php';
$sucUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/bilaltas/simplest-under-construction/',
	__FILE__,
	'simplest-under-construction'
);