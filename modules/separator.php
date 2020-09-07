<?php

class separator extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Separator', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/separator/',
      'url' => CYNE_MODULES_URL . 'modules/separator/',
      'icon' => 'minus.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

FLBuilder::register_module( 'separator', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
        // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'separator_field' => array(
            'type' => 'checkbox',
            'label' => __( 'Separator', 'fl-builder' ),
          ),
        )
      )
    )
  )
) );
