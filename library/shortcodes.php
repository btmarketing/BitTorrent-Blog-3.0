<?php 

/*
Author: Dan Brown
URL: blog.bittorrent.com

Custom Shortcodes for BitTorrent Blog
*/


/*****************
CUSTOM SHORT CODES
*****************/
function bt_button( $atts, $content = null ) {
  extract(shortcode_atts(array(
      'centered' => 'yes',
      'size' => '',
   ), $atts));
  $the_size = '';
  $the_center ='text-center';
  if ($size == 'large') {
    $the_size = 'btn-lg';
  }
  elseif ($size == 'small') {
    $the_size = 'btn-sm';
  }
  if ($centered == 'no') {
    $the_center = 'text-left';
  }

  return '<div class="' . $the_center . '"><button type="button" class="btn btn-bt ' . $the_size . '">' . $content . '</button></div>';
}

function register_shortcodes(){
   add_shortcode('button', 'bt_button');
}

add_action( 'init', 'register_shortcodes');


?>