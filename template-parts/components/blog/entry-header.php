<?php

/**
 * Template for post entry header feature image
 * 
 * @package Abhigyan's Theme
 */
$the_post_id = get_the_ID();
$hide_title = get_post_meta($the_post_id, '_hide_page_title', true);
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
$heading_class = !empty($hide_title) && 'yes' === $hide_title ? 'hide' : '';
?>
<header class="entry-header">
    <?php
    //featured image
    if ($has_post_thumbnail) {
    ?>
    <div class="entry-image mb-3">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php
                the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width: 343px) 343px, 229px',
                        'class' => 'attachment-featured-large size-featured-image'
                    ]
                )
                ?>
        </a>
    </div>
    <?php
    }

    //Title
    if (is_single() || is_page()) {
        printf(
            '<h1 class="page-title text-dark %1$s">%2$s</h1>',
            esc_attr($heading_class),
            wp_kses_post(get_the_title())
        );
    } else {
        printf(
            '<h3 class="entry-title mb-3"><a href="%1$s" class="text-dark">%2$s</a></h3>',
            esc_url(get_the_permalink()),
            wp_kses_post(get_the_title())
        );
    }
    ?>

</header>