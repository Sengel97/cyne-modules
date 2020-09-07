<?php

class advancedHeaderModule extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Advanced Header', 'fl-builder' ),
      'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/advanced-header/',
      'url' => CYNE_MODULES_URL . 'modules/advanced-header/',
      'icon' => 'text.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

FLBuilder::register_module( 'advancedHeaderModule', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
        // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'advancedHeaderModule_field'     => array(
            'type' => 'text',
            'label' => __( 'Advanced Header', 'fl-builder' ),
          ),

          'advancedHeaderModule_align' => array(
            'label' => 'Text Align',
            'type' => 'select',
            'options' => array(
              'cyne-align-left' => 'Left',
              'cyne-align-center' => 'Center',
              'cyne-align-right' => 'Right',
              'cyne-align-justify' => 'Justify'
            )
          ),
        )
      )
    )
  )
) );
