<?php

class abg extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Advanced Button Group', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/advanced-button-group/',
      'url' => CYNE_MODULES_URL . 'modules/advanced-button-group/',
      'icon' => 'button.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

require_once CYNE_MODULES_DIR . 'functions.php';

FLBuilder::register_module( 'abg', array(
    'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
        'sections' => array(
            'button-general' => array(
                'title'         => __( 'Button Group Options', 'fl-builder' ),
                'fields' => array(
                    'button_alignment'    => array(
                        'type'      => 'align',
                        'label'     =>  __( 'Button Group Alignment', 'fl-builder' ),
                        'default'   => 'left',
                    ),
                )
            ),
            'button-section-1' => array(
                'title'         => __( 'Button #1', 'fl-builder' ),
                'fields' => array(
                    'button_1_text' => array(
                        'label' => __( 'Button Text', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_1_link' => array(
                        'label' => __( 'Button Link', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_1_new_tab' => array(
                        'label' => __( 'Open link in a new tab?', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            '_self' => 'No',
                            '_blank' => 'Yes'
                        )
                    ),
                    'button_1_style' => array(
                        'label' => __( 'Button Style', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            'btn-primary' => 'Primary',
                            'btn-secondary' => 'Secondary'
                        )
                    ),
                )
            ),
            'button-section-2' => array(
                'title'         => __( 'Button #2', 'fl-builder' ),
                'fields' => array(
                    'button_2_text' => array(
                        'label' => __( 'Button Text', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_2_link' => array(
                        'label' => __( 'Button Link', 'fl-builder' ),
                        'type' => 'text',
                    ),
                    'button_2_new_tab' => array(
                        'label' => __( 'Open link in a new tab?', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            '_self' => 'No',
                            '_blank' => 'Yes'
                        )
                    ),
                    'button_2_style' => array(
                        'label' => __( 'Button Style', 'fl-builder' ),
                        'type' => 'select',
                        'options' => array(
                            'btn-primary' => 'Primary',
                            'btn-secondary' => 'Secondary'
                        )
                    ),
                )
            ),
        )
    )
));
