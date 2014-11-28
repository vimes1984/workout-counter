<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   workout-counter
 * @author    zdubbz <seangores@gmail.com>
 * @license   GPL-2.0+
 * @link      http://seangoresht.com
 * @copyright 11-29-2014 Company Name
 */

// If uninstall, not called from WordPress, then exit
if (!defined("WP_UNINSTALL_PLUGIN")) {
	exit;
}

// TODO: Define uninstall functionality here