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

if (!defined('NEW_THEME_BUILD_URI')) {
    define('NEW_THEME_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('NEW_THEME_BUILD_JS_URI')) {
    define('NEW_THEME_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('NEW_THEME_BUILD_JS_PATH')) {
    define('NEW_THEME_BUILD_JS_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('NEW_THEME_BUILD_IMG_URI')) {
    define('NEW_THEME_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('NEW_THEME_BUILD_CSS_URI')) {
    define('NEW_THEME_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('NEW_THEME_BUILD_CSS_PATH')) {
    define('NEW_THEME_BUILD_CSS_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

require_once NEW_THEME_PATH . '/inc/helpers/autoloader.php';
require_once NEW_THEME_PATH . '/inc/helpers/template-tags.php';

function new_theme_get_theme_instance()
{
    NEW_THEME::get_instance();
}

new_theme_get_theme_instance();
function abhigyan_enqueue_scripts()
{
}

add_action('wp_enqueue_scripts', 'abhigyan_enqueue_scripts');