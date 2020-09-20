<?php

// Contact Form 7
function cf7_func() {
    
    $options = array( '' => __('None', 'cyne-modules') );

    if ( class_exists( 'WPCF7_ContactForm' ) ) {
        $args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
        if( $cf7Forms = get_posts( $args ) ){
            foreach ( $cf7Forms as $cf7Form )
            $options[$cf7Form->ID] = $cf7Form->post_title;
        }
    }

    return $options;

}


// Menu
function menu_func() {

    $menu_options = array( '' => __('None', 'cyne-modules') );

    $menus = wp_get_nav_menus();

    foreach($menus as $menu) {
        $menu_options[$menu->term_id] = $menu->name;
    }

    return $menu_options;
}