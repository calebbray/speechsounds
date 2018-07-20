<?php
/**
 * Custom functionality required by your child theme can go here. Use this
 * to override any defaults provided by the Spine parent theme through
 * the provided actions and filters.
 */
?>
<?php
  function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
  }
  add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );

  function speech_sounds_setup() {
    remove_theme_support( 'automatic-feed-links' );
	  remove_theme_support( 'custom-background' );
    remove_theme_support( 'post-formats' );
    remove_theme_support( 'custom-header' );
  }

  add_action( 'after_setup_theme', 'speech_sounds_setup', 11 );

  function speech_sound_scripts() {
    wp_dequeue_style( 'twentyseventeen-fonts' );
	  wp_dequeue_style( 'twentyseventeen-style' );
  	wp_dequeue_style( 'twentyseventeen-ie8' );
  }

  add_action( 'wp_enqueue_scripts', 'speech_sound_scripts', 11 );

  function add_customizer_option( $wp_customize ) {
    $wp_customize->add_section('contact_information_section', array(
      'title'     =>    __('Contact Information', 'speechsoundsvisualized'),
      'priority'  =>    1000
    ) );
    
    $wp_customize->add_setting( 'primary_email_ssv', array(
      'default'   =>   'keri.jones@pullmanregional.org',
      'transport' =>   'refresh'
    ) );

    $wp_customize->add_control( 'primary_email_ssv', array(
      'type'      =>   'text',
      'section'   =>   'contact_information_section',
      'label'     =>   __( 'Contact Information', 'speechsoundsvisualized')
    ) );

    $wp_customize->add_setting( 'primary_location_ssv', array(
      'default'   =>   'Primary Location',
      'transport' =>   'refresh'
    ) );

    $wp_customize->add_control( 'primary_location_ssv', array(
      'type'      =>   'text',
      'section'   =>   'contact_information_section',
      'label'     =>   __( 'Primary Location', 'speechsoundsvisualized')
    ) );

    $wp_customize->add_setting( 'primary_address_ssv', array(
      'default'   =>   'Address',
      'transport' =>   'refresh'
    ) );

    $wp_customize->add_control( 'primary_address_ssv', array(
      'type'      =>   'text',
      'section'   =>   'contact_information_section',
      'label'     =>   __( 'Address', 'speechsoundsvisualized')
    ) );

    $wp_customize->add_setting( 'primary_city_state_zip_ssv', array(
      'default'   =>   'City State, Zip',
      'transport' =>   'refresh'
    ) );

    $wp_customize->add_control( 'primary_city_state_zip_ssv', array(
      'type'      =>   'text',
      'section'   =>   'contact_information_section',
      'label'     =>   __( 'City State, Zip', 'speechsoundsvisualized')
    ) );

    // $wp_customize->add_setting( 'header_bg_color', array(
    //   'default'   => '#4285f4',
    //   'transport' => 'refresh'
    // ));

    // $wp_customize->add_section( 'color_theme_section', array(
    //   'title'    => __('Color', 'speechsoundsvisualized'),
    //   'priority' => 1000
    // ));

    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_colors', array(
    //   'label'  => __('Header Color', 'speechsoundsvisualized'),
    //   'section' => 'color_theme_section',
    //   'settings' => 'header_bg_color'
    // ) ));
  }

  add_action( 'customize_register', 'add_customizer_option' );