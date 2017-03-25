<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

/*
function foundationpress_add_fields_to_ticket($default_fields)
{
	$default_fields[] = array(
					'field_name'		 => 'ticket_desc_name',
					'field_title'		 => 'Ticket Description', 'tc',
					'placeholder'		 => '',
					'field_type'		 => 'text',
					'tooltip'			 => __( 'Description', 'tc' ),
					'table_visibility'	 => true,
					'post_field_type'	 => 'post_meta'
				);

	$default_fields[] = array(
					'field_name'		 => 'ticket_image',
					'field_title'		 => 'Image ticket', 'tc',
					'placeholder'		 => '',
					'field_type'		 => 'image',
					'tooltip'			 => __( 'Image ticket', 'tc' ),
					'table_visibility'	 => true,
					'post_field_type'	 => 'post_meta'
				);
	return $default_fields;
}

add_filter('tc_ticket_fields', 'foundationpress_add_fields_to_ticket');*/
