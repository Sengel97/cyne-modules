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

require_once CYNE_MODULES_DIR . 'modules/includes/functions.php';

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
            'options' => cf7_func()
          )
        )
      )
    )
  )
));


