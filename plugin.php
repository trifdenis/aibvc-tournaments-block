<?php
/**
 * Plugin Name: aibvc-tournaments-block
 * Plugin URI: https://www.aibvc.it
 * Description: Blocco Gutenberg per la visualizzazione dei tornei AIBVC.
 * Author: 5G
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package aibvc-tournaments-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
