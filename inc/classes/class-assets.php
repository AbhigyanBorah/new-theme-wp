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

        //enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {
        //register scripts
        wp_register_script('main-js', NEW_THEME_URI . '/assets/main.js', [], filemtime(NEW_THEME_PATH . '/assets/main.js'), true);
        wp_register_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', ['jquery'], false, true);
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', ['jquery'], false, true);

        //enqueue scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('popper-js');
        wp_enqueue_script('bootstrap-js');
    }
}