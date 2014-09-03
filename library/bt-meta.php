<?php 

/*
Author: Dan Brown
URL: blog.bittorrent.com

Custom Meteaboxes for BitTorrent Blog
*/


/*****************
CUSTOM META BOXES
*****************/
function bittorrent_custom_metaboxes( $meta_boxes ) {
  $prefix = '_btm_'; // Prefix for all fields


  // adding custom fields for staff page

  $meta_boxes[] =
  array(
    'id' => 'news_metabox',
    'title' => 'News Story Info',
    'pages' => array('custom_news'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name' => 'URL',
        'desc' => 'Enter full URL. ex: http://www.theverge.com/story',
        'id' => $prefix . 'news_url',
        'type' => 'text'
      ),
      array(
        'name' => 'Publication/Site',
        'desc' => 'Enter the name of the publication/source/website',
        'id' => $prefix . 'source',
        'type' => 'text'
      ),
    ),
  );

  $meta_boxes[] = 
  array(
    'id' => 'layout_metabox',
    'title' => 'Blog Post Layout Selector',
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name'    => 'Layout',
        'desc'    => 'If using a special layout, select below',
        'id'      => $prefix . 'layout_select',
        'type'    => 'select',
        'options' => array(
          array( 'name' => 'Default', 'value' => '', ),
          array( 'name' => 'Hero Layout', 'value' => 'hero', ),
          array( 'name' => 'Video Layout', 'value' => 'video', ),
          array( 'name' => 'CTA Layout', 'value' => 'cta', ),
          array( 'name' => 'Bundle Layout', 'value' => 'bundle', ),

        ),
      ),
    ),
  );

  $meta_boxes[] = 
  array(
    'id' => 'bundle_metabox',
    'title' => 'Bundle Metabox',
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name' => 'Bundle URL',
        'desc' => 'Enter full URL. ex: http://bundles.bittorrent.com/embed/bundles/generalelectric',
        'id' => $prefix . 'bundle_url',
        'type' => 'text'
      ),
    ),
  );

  $meta_boxes[] = 
  array(
    'id' => 'video_metabox',
    'title' => 'Video Metabox',
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name' => 'Video URL',
        'desc' => 'Enter full URL. ex: https://www.youtube.com/watch?v=EicjjaD8_kE',
        'id' => $prefix . 'video_url',
        'type' => 'text'
      ),
    ),
  ); 

  $meta_boxes[] = 
  array(
    'id' => 'cta_metabox',
    'title' => 'CTA Metabox',
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name' => 'Main Text',
        'desc' => 'The main title in this header/hero',
        'id' => $prefix . 'cta_main',
        'type' => 'text'
      ),
      array(
        'name' => 'Secondary Text',
        'desc' => 'Can accept html',
        'id' => $prefix . 'cta_secondary',
        'type' => 'textarea_code'
      ),
      array(
        'name' => 'Button 1 Text',
        'desc' => 'Text for button 1. Accepts HTML (for fontawesome)',
        'id' => $prefix . 'cta_btn1_text',
        'type' => 'textarea_code'
      ),
      array(
        'name' => 'Button 1 URL',
        'desc' => 'full URL for button 1 destination',
        'id' => $prefix . 'cta_btn1_url',
        'type' => 'text'
      ),
      array(
        'name' => 'Button 2 Text',
        'desc' => 'Text for button 2. Accepts HTML (for fontawesome)',
        'id' => $prefix . 'cta_btn2_text',
        'type' => 'textarea_code'
      ),
      array(
        'name' => 'Button 2 URL',
        'desc' => 'full URL for button 2 destination',
        'id' => $prefix . 'cta_btn2_url',
        'type' => 'text'
      ),
      array(
        'name' => 'Text Color Picker',
        'id'   => $prefix . 'cta_input_color',
        'type' => 'colorpicker',
        'default'  => '#ffffff',
      ),
    ),
  ); 

  $meta_boxes[] = 
  array(
    'id' => 'modal_metabox',
    'title' => 'Blog Post Modal Options',
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
      array(
        'name'    => 'Enable/Disable',
        'desc'    => 'must also be enabled in admin panel',
        'id'      => $prefix . 'modal_allow',
        'type'    => 'select',
        'options' => array(
          array( 'name' => 'Enable', 'value' => 'modal_enabled', ),
          array( 'name' => 'Disable', 'value' => 'modal_disabled', ),

        ),
        'default' => 'Enable',
      ),
    ),
  );





  return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'bittorrent_custom_metaboxes' );




?>