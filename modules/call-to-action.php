<?php

class calltoaction extends FLBuilderModule {

  public function __construct()
  {
    parent::__construct(array(
      'name' => __( 'Call to Action', 'fl-builder' ),
    //   'description' => __( 'An Advanced Header module!', 'fl-builder' ),
      // 'group' => __( 'Standard Modules', 'fl-builder' ),
      'category' => __( 'Cyne', 'fl-builder' ),
      'dir' => CYNE_MODULES_DIR . 'modules/call-to-action/',
      'url' => CYNE_MODULES_URL . 'modules/call-to-action/',
      'icon' => 'button.svg',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled' => true, // Defaults to true and can be omitted.
      'partial_refresh' => false, // Defaults to false and can be omitted.
    ));
  }

}

FLBuilder::register_module( 'calltoaction', array(
  'general-tab' => array(
    'title' => __( 'General', 'fl-builder' ),
    'sections' => array(
      'general-section' => array(
        // 'title'         => __( '', 'fl-builder' ), ??
        'fields' => array(
          'cta_title' => array(
            'type' => 'text',
            'label' => __( 'Title', 'fl-builder' ),
          ),
          'cta_editor' => array(
            'type' => 'editor',
            'label' => __( 'Text', 'fl-builder' ),
          ),
          'cta_alignment'    => array(
            'type'      => 'align',
            'label'     =>  __( 'Text Alignment', 'fl-builder' ),
            'default'   => 'left',
          ),
          'cta_button_text'    => array(
            'type' => 'text',
            'label' => __('Button Text', 'fl-builder'),
            'default' => __('Read more', 'fl-builder'),
          ),
          'cta_button_link' => array(
            'type' => 'text',
            'label' => __( 'Button Link', 'fl-builder' ),
            'default' => '#',
            'placeholder' => 'https://example.com/',
          ),
        )
      )
    )
  )
) );
