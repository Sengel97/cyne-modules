<?php

class advancedButton extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Advanced Button', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/advanced-button/',
      'url' => CYNE_MODULES_URL . 'modules/advanced-button/',
      'icon' => 'button.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

require_once CYNE_MODULES_DIR . 'functions.php';

FLBuilder::register_module( 'advancedButton', array(
    'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
        'sections' => array(
            'advanced-button' => array(
                // 'title'         => __( 'Button', 'fl-builder' ),
                'fields' => array(
                    'button_text' => array(
                        'label' => __( 'Button Text', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_link' => array(
                        'label' => __( 'Button Link', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_new_tab' => array(
                        'label' => __( 'Open link in a new tab?', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            '_self' => 'No',
                            '_blank' => 'Yes'
                        )
                    ),
                    'button_style' => array(
                        'label' => __( 'Button Style', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            'btn-primary' => 'Primary',
                            'btn-secondary' => 'Secondary'
                        )
                    ),
                    'button_alignment'    => array(
                        'type'      => 'align',
                        'label'     =>  __( 'Button Alignment', 'fl-builder' ),
                        'default'   => 'left',
                    ),
                )
            )
        )
    )
));
