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
        'desc' => 'Enter full URL. ex: http://www.twitter.com/slightlyoffbeat',
        'id' => $prefix . 'news_url',
        'type' => 'text'
      ),
    ),
  );

  return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'bittorrent_custom_metaboxes' );




?>