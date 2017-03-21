<?php
/**
 * Customize the output of menus for Foundation top bar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 // Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker

 if ( ! class_exists( 'Foundationpress_Top_Bar_Walker' ) ) :
 class Foundationpress_Top_Bar_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 		$indent = str_repeat("\t", $depth);
       	$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
 	}
 }


 if ( ! class_exists( 'Foundationpress_Mobile_Walker' ) ) :
 class Foundationpress_Mobile_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
 	}
 }
 endif;

 endif;

/*Custom Nav Walker*/
/**
 * Embassy_Walker_Nav_Menu class.
 *
 * @extends Walker_Nav_Menu
 */
class Embassy_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"vertical menu navigation__list--secondary\">\n";
  }
}

//add_filter( 'wp_nav_menu_objects', 'embassy_menu_parent_class' );

/**
 * embassy_menu_parent_class function.
 *
 * @access public
 * @param mixed $items
 * @return void
 */
function embassy_menu_parent_class( $items ) {

  $parents = array();
  foreach ( $items as $item ) {
    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
      $parents[] = $item->menu_item_parent;
    }
  }

  foreach ( $items as $item ) {
    if ( in_array( $item->ID, $parents ) ) {
      	$item->classes[] = 'has-dropdown';
    }
  }

  return $items;
}