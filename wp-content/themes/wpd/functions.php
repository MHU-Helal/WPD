<?php
add_action("after_setup_theme", "theme_setup");

function theme_setup()
{
    add_theme_support("wp-block-styles");

    // To add a custom header image
    add_theme_support("custom-header");
    
    // To add custom widgets
    add_theme_support("widgets");

    // To add a custom background image
    $defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'left',    // 'left', 'center', 'right'
        'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
        'default-size'           => 'cover',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support("custom-background", $defaults);

    // To add title
    add_theme_support("title-tag");

    // To add post thumbnail
    add_theme_support("post-thumbnails", array('post', 'page', 'movie'));

    // To add a custom lgoo image
    add_theme_support("custom-logo", array(
        "height" => 200,
        "width" => 200,
    ));

    // To add post-formats
    add_theme_support("post-formats", array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat'
    ));

    // To add html5 support
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
