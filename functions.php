<?php 



function mytheme_support() {
    $defaults_header = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support('custom-header', $defaults_header);
    add_theme_support('title-tag');
};

add_action('after_setup_theme', 'mytheme_support');

