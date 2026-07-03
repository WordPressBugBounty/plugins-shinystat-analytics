<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       https://www.shinystat.com
 * @since      1.0.0
 *
 * @package    Shinystat_Analytics
 */


// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

function shinystat_analytics_uninstall() {
	$shinystat_analytics_option_prefix = 'shinystat_analytics';

	$shinystat_analytics_options = array(
		$shinystat_analytics_option_prefix . '_account_name',
		$shinystat_analytics_option_prefix . '_account_type',
		$shinystat_analytics_option_prefix . '_conv_name',
		$shinystat_analytics_option_prefix . '_advanced_options_add_param_name',
		$shinystat_analytics_option_prefix . '_advanced_options_add_param_value'
	);

	foreach ( $shinystat_analytics_options as $shinystat_analytics_option_name ) 
		delete_option( $shinystat_analytics_option_name );
}

shinystat_analytics_uninstall();

