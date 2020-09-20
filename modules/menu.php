<?php

class menu extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Menu', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/menu/',
      'url' => CYNE_MODULES_URL . 'modules/menu/',
      'icon' => 'menu.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

require_once CYNE_MODULES_DIR . 'functions.php';

FLBuilder::register_module( 'menu', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
        // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'menu_select' => array(
            'label' => __( 'Select Menu', 'fl-builder' ),
            'type' => 'select',
            'options' => menu_func(),
          ),
        )
      )
    )
  )
) );
