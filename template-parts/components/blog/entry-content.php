<?php

/**
 * Template for entry content.
 * 
 * To be used inside WordPress The Loop.
 * 
 * @package Abhigyan's Theme
 */
?>

<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading %s <span class="meta-nav">&rarr;</span>', "Abhigyan's Theme"),
                    [
                        'span' => [
                            'class' => []
                        ]
                    ]
                ),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            )
        );

        wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__('Pages:', "Abhigyan's Theme"),
                'after' => '</div>',
            ]
        );
    } else {
        new_theme_the_excerpt(200);
        printf('<br>');
        echo new_theme_excerpt_more();
    }


    ?>
</div>