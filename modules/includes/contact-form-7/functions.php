<?php 


function cf7_func() {
    // global $form_titles;

    $args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
    $cf7Forms = get_posts( $args );
    $post_ids = wp_list_pluck( $cf7Forms , 'ID' );
    $form_titles = wp_list_pluck( $cf7Forms , 'post_title' );

    // return $post_ids;
    return $form_titles;
}