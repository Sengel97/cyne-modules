<?php

class cf7 extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name'            => __( 'Contact Form 7', 'fl-builder' ),
      'description'     => __( 'A totally awesome module!', 'fl-builder' ),
      // 'group'           => __( 'Standard Modules', 'fl-builder' ),
      'category'        => __( 'Cyne', 'fl-builder' ),
      'dir'             => CYNE_MODULES_DIR . 'modules/',
      'url'             => CYNE_MODULES_URL . 'cyne-modules/',
      'icon'            => 'schedule.svg',
      'editor_export'   => true, // Defaults to true and can be omitted.
      'enabled'         => true, // Defaults to true and can be omitted.
      'partial_refresh' => true, // Defaults to false and can be omitted.
    ));

    
  }

}

global $form_titles;

$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
$cf7Forms = get_posts( $args );
$post_ids = wp_list_pluck( $cf7Forms , 'ID' );
$form_titles = wp_list_pluck( $cf7Forms , 'post_title' );

return $post_ids;
return $form_titles;

$contact_form_titles = array('test', 'test 2', 'test 3');

FLBuilder::register_module( 'cf7', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
      // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'contactForm7_field'     => array(
            'label' => __( 'Select Form', 'fl-builder' ),
            'type' => 'select',
            'options' => array(
              'option1' => '1',
              'option2' => '2',
              'option3' => '3',
              'option4' => '4',
              ),
          )
        )
      )
    )
  )
));


