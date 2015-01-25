<?php
/**
 * Create Plugin GitHub Updater
 *
 * @package   GitHub_Updater
 * @author    Create Plugin
 * @license   GPL-2.0+
 * @link      https://github.com/createplugin/github-updater-develop
 */

/*
Plugin Name:       Create Plugin Github Updater 1
Plugin URI:        https://github.com/createplugin/github-updater-develop
Description:       A plugin to automatically update GitHub or Bitbucket hosted plugins and themes into WordPress. Plugin class based upon <a href="https://github.com/codepress/github-plugin-updater">codepress/github-plugin-updater</a>. Theme class based upon <a href="https://github.com/WordPress-Phoenix/whitelabel-framework">Whitelabel Framework</a> modifications.
Version:           0.1
Author:            Andy Fragen
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       createplugin-github-updater
GitHub Plugin URI: https://github.com/createplugin/github-updater-develop
GitHub Branch:     develop
Requires WP:       3.8
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load main class
if ( ! class_exists( 'GitHub_Updater' ) ) {
	require 'includes/class-github-updater.php';
	load_plugin_textdomain( 'github-updater', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

// Instantiate class GitHub_Updater
new GitHub_Updater;

/**
 * Calls GitHub_Updater::init() in init hook so other remote upgrader apps like
 * InfiniteWP, ManageWP, MainWP, and iThemes Sync will load and use all
 * of GitHub_Updater's methods, especially renaming.
 */
add_action( 'init', array( 'GitHub_Updater', 'init' ) );
