<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'Theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'Neuron-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Nueron Theme <small>by RRF Online</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------

$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header Options',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'enable_header_top',
      'type'    => 'switcher',
      'title'   => 'Enable header top?',
      'desc'   => 'If you want to use header top, turn this on.',
      'default'   =>'ture',
    ),
    
    array(
      'id'      => 'header_links',
      'type'    => 'group',
      'title'   => 'Header left links',
      'button_title' => 'Add new',
      'accordion_title' => 'Add New Link',
      'fields'  => array(
        array(
          'id'    => 'linktext',
          'type'  =>  'text',
          'title' =>  'Link text',
        ),
        array(
          'id'    =>  'icon',
          'type'  =>  'icon',
          'title' =>  'Icon',
        ),
        array(
          'id'    =>  'link',
          'type'  =>  'text',
          'title' =>  'Link',
        ),
        array(
          'id'    =>  'link_target',
          'type'  =>  'select',
          'title' =>  'Link target',
          'options'=> array(
            '_self' => 'Open in same tab',
            '_blank' => 'Open in new tab',
          ),
        ),
      ),
      'dependency'   => array('enable_header_top', '==', 'true'),
    ),

  ), // end: fields
);
$options[]      = array(
  'name'        => 'socials',
  'title'       => 'Social Options',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'socials',
      'type'    => 'group',
      'title'   => 'Social links',
      'button_title' => 'Add new',
      'accordion_title' => 'Add New Link',
      'fields'  => array(
        array(
          'id'    =>  'icon',
          'type'  =>  'icon',
          'title' =>  'Icon',
        ),
        array(
          'id'    =>  'link',
          'type'  =>  'text',
          'title' =>  'Link',
        ),
        array(
          'id'    =>  'link_target',
          'type'  =>  'select',
          'title' =>  'Link target',
          'default' =>  '_blank',
          'options'=> array(
            '_self' => 'Open in same tab',
            '_blank' => 'Open in new tab',
          ),
        ),
      ),
      'dependency'   => array('enable_header_top', '==', 'true'),
    ),

  ), // end: fields
);



$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Homepage',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(
   
    array(
      'id'      => 'enable_homepage_promo',
      'type'    => 'switcher',
      'title'   => 'Enable promo area',
      'default'   => true,
      'desc'   => 'If you want to promo area, select yes.',
    ),

    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo area title',
      'default'   => 'Welcome to the Neuron Finance',
      'desc'   => 'Type Promo area title',
      'dependency'   => array('enable_homepage_promo', '==', 'true'),
      
    ),

    array(
      'id'      => 'promo_content',
      'type'    => 'textarea',
      'title'   => 'Promo area content',
      'default'   => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      'desc'   => 'Type promo area content',
      'dependency'   => array('enable_homepage_promo', '==', 'true'),
    ),
    
    array(
      'id'      => 'enable_homepage_content',
      'type'    => 'switcher',
      'title'   => 'Enable homepage content',
      'default'   => true,
      'desc'   => 'If you want to homepage content area, select yes.',
    ),

    array(
      'id'      => 'home_content_title',
      'type'    => 'text',
      'title'   => 'Home content title',
      'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'dependency' => array('enable_homepage_content', '==', 'true'),
    ),
    array(
      'id'      => 'home_content_text',
      'type'    => 'textarea',
      'title'   => 'Home area content',
      'dependency' =>array('enable_homepage_content', '==', 'true'),
    ),
    array(
      'id'      => 'home_content_img',
      'type'    => 'image',
      'title'   => 'Home area content image',
      'dependency' => array('enable_homepage_content', '==', 'true'),
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'service',
  'title'       => 'Services page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'service_title',
      'type'    => 'text',
      'title'   => 'Service area title',
      'help'   => 'Type service area title',
    ),

  ), // end: fields
);

$options[]      = array(
  'name'        => 'about',
  'title'       => 'About page',
  'icon'        => 'fa fa-car',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'enable_about_content',
      'type'    => 'switcher',
      'title'   => 'Enable about promo',
      'default'   => true,
      'desc'   => 'if you want to about area, select yes',
    ),
    array(
      'id'      => 'about_title',
      'type'    => 'text',
      'title'   => 'About area title',
      'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      'desc'   => 'if you want to about area, select yes',
      'dependency' => array('enable_about_content', '==', 'true')
    ),

    array(
      'id'      => 'about_content_text',
      'type'    => 'textarea',
      'title'   => 'About area content',
      'desc'   => 'if you want to about area, select yes',
      'dependency' =>array('enable_about_content', '==', 'true')
    ),
    array(
      'id'      => 'about_content_img',
      'type'    => 'image',
      'title'   => 'About area content image',
      'dependency'=> array ('enable_about_content', '==', 'true')
    ),

    array(
      'id'      => 'enable_about_promo',
      'type'    => 'switcher',
      'title'   => 'Enable about promo',
      'default'   => true,
      'desc'   => 'if you want to about area, select yes',
    ),
    array(
      'id'      => 'about_promo_title',
      'type'    => 'text',
      'title'   => 'About area title',
      'default'   => 'Welcome to the Neuron Finance',
      'desc'   => 'if you want to about area, select yes',
      'dependency' => array('enable_about_promo', '==', 'true')
    ),

    array(
      'id'      => 'about_business_content',
      'type'    => 'textarea',
      'title'   => 'About area content',
      'desc'   => 'if you want to about area, select yes',
      'dependency' =>array('enable_about_promo', '==', 'true')
    ),
    array(
      'id'      => 'faqs',
      'type'    => 'group',
      'title'   => 'FAQs',
      'button_title' => 'Add new',
      'accordion_title' => 'Add New FAQ',
      'fields'  => array(
        array(
          'id'    => 'title',
          'type'  =>  'text',
          'title' =>  'FAQ title',
        ),
        array(
          'id'    =>  'content',
          'type'  =>  'textarea',
          'title' =>  'FAQ content',
        ),
      ),
    ),

  ), // end: fields
);



CSFramework::instance( $settings, $options );
