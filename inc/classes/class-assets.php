<?php

/**
 * Enqueue theme assets
 * 
 * @package ABhigyan's Theme
 */

namespace NEW_THEME\Inc;

use NEW_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {

        //load classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions 
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //register styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(NEW_THEME_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', NEW_THEME_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('main-css', NEW_THEME_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(NEW_THEME_BUILD_CSS_PATH . '/main.css'), 'all');
        // wp_register_style('fonts-css', get_template_directory_uri() . '/assets/src/library/fonts/fonts.css', [], false, 'all');

        //enqueue styles
        wp_enqueue_style('font-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('style-css');
        wp_enqueue_style('main-css');
    }

    public function register_scripts()
    {
        //register scripts
        wp_register_script('main-js', NEW_THEME_BUILD_JS_URI . '/main.js', ['jquery'], filemtime(NEW_THEME_BUILD_JS_PATH . '/main.js'), true);
        wp_register_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', ['jquery'], false, true);
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', ['jquery'], false, true);

        //enqueue scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('popper-js');
        wp_enqueue_script('bootstrap-js');
    }
}