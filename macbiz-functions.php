<?php

/**
 * Mayo Theme Functions
 */

//Theme customizer configuration
require_once('includes/classes/Macbiz.class.customizer.php');
require_once('includes/macbiz-customizer.php');

//custom shortcodes
require_once('includes/macbiz-shortcodes.php');

//utility functions
require_once('includes/macbiz-utilities.php');

//menus
require_once('includes/macbiz-menus.php');

//images
require_once('includes/macbiz-images.php');

// Adding excerpt for pages
add_post_type_support( 'page', 'excerpt' );