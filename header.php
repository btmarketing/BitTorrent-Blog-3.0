<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		
		<?php // end analytics ?>
		<!--[if gte IE 9]>
  	<style type="text/css">
    	.gradient {
      	filter: none;
    	}
  	</style>
		<![endif]-->

	</head>

	<body <?php body_class(); ?>>

    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><img height="24px" src="<?php echo get_template_directory_uri() . '/library/images/bt-logo-ret.png'; ?>" /></a>

            	<div class="socialtop hidden-xs">
            		<div class="slidesearch">
		            	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<label>
											<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
											<i class="fa fa-search"></i>
										</label>
										<input type="submit" class="search-submit" value="Search" />
									</form>
								</div>
	            	<ul class="sociallist">
	            		<a target="_blank" href="http://www.facebook.com/bittorrent"><li><i class="fa fa-facebook"></i></li></a>
	            		<a target="_blank" href="http://www.twitter.com/bittorrent"><li><i class="fa fa-twitter"></i></li></a>
	            		<a target="_blank" href="http://www.youtube.com/bittorrent"><li><i class="fa fa-youtube-play"></i></li></a>
	            		<a target="_blank" href="http://www.instagram.com/bittorrent"><li><i class="fa fa-instagram"></i></li></a>
	            		<a target="_blank" href="https://plus.google.com/+BittorrentInc/posts"><li><i class="fa fa-google-plus"></i></li></a>
	            		<a target="_blank" href="/rss"><li><i class="fa fa-rss"></i></li></a>
	            	</ul>
	        
	            </div>
	          </div>

            <div class="navbar-collapse collapse navbar-responsive-collapse">
              <?php bones_main_nav(); ?>
            </div>
          </div>
        </div> 
        
      </nav>
      <div class="container">
      <div class="catnav">
      	<div class="navbar">
            <div class="navbar-collapse collapse navbar-responsive-collapse">
              <?php bt_cat_nav(); ?>

            </div>
          </div>
        </div> 
      </div>

		</header> <?php // end header ?>
