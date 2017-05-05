<?php
/**
 * Plugin Name: Wordpress Allowed Hosts
 * Plugin URI: https://github.com/alash3al/wp-allowed-hosts
 * Description: A plugin that protectet your wordpress installation from spoofed HTTP requests .
 * Version: 1.0
 * Author: Mohammed Al Ashaal
 * Author URI: http://alash3al.xyz/
 */
if ( function_exists("add_action") ) {
	function alash3al_allowed_hosts(){
		if ( defined("WP_ALLOWED_HOSTS") && ! empty(WP_ALLOWED_HOSTS) ) {
			$allowed = str_replace(",", "|", preg_replace('~\s~', "", WP_ALLOWED_HOSTS));
			$die = false;
			if ( $_SERVER["SERVER_NAME"] !== $_SERVER["HTTP_HOST"] ) {
				$die = true;
			} else if ( ! preg_match("~^". ($allowed) ."$~", $_SERVER["SERVER_NAME"]) ) {
				$die = true;
			}
			if ( $die ) {
				header("Location: " . get_home_url());
				die();
			}
		}
	}
	add_action("init", "alash3al_allowed_hosts");
}

