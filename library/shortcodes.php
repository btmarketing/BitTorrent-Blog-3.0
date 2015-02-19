<?php 

/*
Author: Dan Brown
URL: blog.bittorrent.com

Custom Shortcodes for BitTorrent Blog
*/


/*****************
CUSTOM SHORT CODES
*****************/
// button shortcode
function bt_button( $atts, $content = null ) {
  extract(shortcode_atts(array(
      'centered' => 'yes',
      'size' => '',
      'link' => '',
      'tracking' => '',
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

  return '<div class="button-wrap ' . $the_center . '"><a href="' . $link . '" target="_blank"><button type="button" class="btn btn-bt ' . $the_size . ' ' . $tracking . '">' . $content . '</button></a></div>';
}

function bt_gif( $atts, $content = null ) {
  extract(shortcode_atts(array(
      'static' => '',
      'gif' => '',
      'align' => 'alignnone',
    ), $atts));
  $the_gif = "'" . $gif . "'";
  $the_align = $align;
  if ($align == "center") {
    $the_align = "aligncenter";
  }
  elseif ($align == "left") {
    $the_align = "alignleft";
  }
  elseif ($align == "right") {
    $the_align = "alignright";
  }

  return '<img class="' . $the_align . '" src="' . $static . '" onclick="this.src=' . $the_gif . '">';
}

function register_shortcodes(){
   add_shortcode('button', 'bt_button');
   add_shortcode('clickgif', 'bt_gif');
}

add_action( 'init', 'register_shortcodes');


?>