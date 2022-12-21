<?php

use NEW_THEME\Inc\NEW_THEME;

/**
 * Theme Functions.
 * 
 * @package Abhigyan's Theme
 */



if (!defined('NEW_THEME_PATH')) {
    define('NEW_THEME_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('NEW_THEME_URI')) {
    define('NEW_THEME_URI', untrailingslashit(get_template_directory_uri()));
}

require_once NEW_THEME_PATH . '/inc/helpers/autoloader.php';

function new_theme_get_theme_instance()
{
    NEW_THEME::get_instance();
}

new_theme_get_theme_instance();
function abhigyan_enqueue_scripts()
{
}

add_action('wp_enqueue_scripts', 'abhigyan_enqueue_scripts');