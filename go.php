<?php
/**
 * Plugin Name: Go
 * Plugin URI: https://www.godaddy.com
 * Description: Adds layouts for the CoBlocks Layout Selector to make building pages much easier and faster.
 * Author: GoDaddy
 * Author URI: https://www.godaddy.com
 * Version: 1.0.0
 * Text Domain: go-plugin
 * Domain Path: /languages
 * Tested up to: 5.4
 *
 * Go Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with Go Plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Go_Plugin
 */

defined( 'ABSPATH' ) || exit;

define( 'GO_PLUGIN_VERSION', '1.0.0' );
define( 'GO_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'GO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Check if a specific theme slug is the currently active theme.
 *
 * @param string $slug The theme slug.
 *
 * @return boolean
 */
function go_plugin_is_active_theme( $slug ) {
	$active_theme = wp_get_theme();
	return $slug === $active_theme->stylesheet;
}

/**
 * Add categories to the layout selector if they don't already exist.
 *
 * @param array $categories The loaded categories.
 *
 * @return array
 */
function go_plugin_layout_selector_categories( $categories ) {
	// Don't load if Go is the active plugin.
	if ( go_plugin_is_active_theme( 'go' ) ) {
		return $categories;
	}

	$loaded_slugs = array_column( $categories, 'slug' );

	if ( ! in_array( 'about', $loaded_slugs, true ) ) {
		$categories[] = array(
			'slug'  => 'about',
			'title' => __( 'About', 'go' ),
		);
	}

	if ( ! in_array( 'contact', $loaded_slugs, true ) ) {
		$categories[] = array(
			'slug'  => 'contact',
			'title' => __( 'Contact', 'go' ),
		);
	}

	if ( ! in_array( 'home', $loaded_slugs, true ) ) {
		$categories[] = array(
			'slug'  => 'home',
			'title' => __( 'Home', 'go' ),
		);
	}

	if ( ! in_array( 'portfolio', $loaded_slugs, true ) ) {
		$categories[] = array(
			'slug'  => 'portfolio',
			'title' => __( 'Portfolio', 'go' ),
		);
	}

	return $categories;
}

add_filter( 'coblocks_layout_selector_categories', 'go_plugin_layout_selector_categories' );

/**
 * Get the layouts for the layout selector.
 *
 * @param array $layouts The loaded layouts.
 *
 * @return array
 */
function go_plugin_layout_selector_layouts( $layouts ) {
	// Don't load if Go is the active plugin.
	if ( go_plugin_is_active_theme( 'go' ) ) {
		return $layouts;
	}

	$paths = glob( GO_PLUGIN_DIR . '/layouts/*/*.php' );

	foreach ( $paths as $filepath ) {
		$layout_blocks = include $filepath;
		// The category slug is the sub-directory name where the template resides.
		$layout_category = implode( '', array_slice( explode( '/', $filepath ), -2, 1 ) );

		$layouts[] = array(
			'category' => $layout_category,
			'blocks'   => $layout_blocks,
		);
	}

	return $layouts;
}

add_filter( 'coblocks_layout_selector_layouts', 'go_plugin_layout_selector_layouts' );
