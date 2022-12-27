<?php

/**
 * Theme Sidebars
 * 
 * @package ABhigyan's Theme
 */

namespace NEW_THEME\Inc;

use NEW_THEME\Inc\Traits\Singleton;

class Sidebars
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

        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    public function register_sidebars()
    {
        register_sidebar(array(
            'name'          => __('Sidebar', "Abhigyan's Theme"),
            'id'            => 'sidebar-1',
            'description'   => __('Main Sidebar', "Abhigyan's Theme"),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
        register_sidebar(array(
            'name'          => __('Footer', "Abhigyan's Theme"),
            'id'            => 'sidebar-2',
            'description'   => __('Footer Sidebar', "Abhigyan's Theme"),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }

    public function register_clock_widget()
    {
        register_widget('NEW_THEME\Inc\Clock_Widget');
    }
}