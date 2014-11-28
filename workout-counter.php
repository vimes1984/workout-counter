<?php
/**
 * Workout counter
 *
 * input workout data output charts and stuff
 *
 * @package   workout-counter
 * @author    zdubbz <seangores@gmail.com>
 * @license   GPL-2.0+
 * @link      http://seangoresht.com
 * @copyright 11-29-2014 Company Name
 *
 * @wordpress-plugin
 * Plugin Name: Workout counter
 * Plugin URI:  http://seangoresht.com
 * Description: input workout data output charts and stuff
 * Version:     1.0.0
 * Author:      zdubbz
 * Author URI:  http://seangoresht.com
 * Text Domain: workout-counter-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if (!defined("WPINC")) {
	die;
}

require_once(plugin_dir_path(__FILE__) . "WorkoutCounter.php");

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook(__FILE__, array("WorkoutCounter", "activate"));
register_deactivation_hook(__FILE__, array("WorkoutCounter", "deactivate"));

WorkoutCounter::get_instance();