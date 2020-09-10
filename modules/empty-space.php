<?php

class emptySpace extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Empty Space', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/empty-space/',
      'url' => CYNE_MODULES_URL . 'modules/empty-space/',
      'icon' => 'minus.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

FLBuilder::register_module( 'emptySpace', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
        // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'empty_space_height' => array(
            'type' => 'text',
            'label' => __( 'Empty Space Height in px', 'fl-builder' ),
            'default' => '35',
          ),
        )
      )
    )
  )
) );
