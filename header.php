<?php global $bt_options; ?>
<?php 
	$fb = $bt_options['themefb'];
	$tw = $bt_options['themetwitter'];
	$yt = $bt_options['themeyoutube'];
	$ig = $bt_options['themeinstagram'];
	$gp = $bt_options['themegplus'];
	$rss = $bt_options['themerss'];
	$thelogo = $bt_options['themeLogo']['url'];
?>

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

		<script type="text/javascript">
			var _gas = _gas || [];
			_gas.push(['_setAccount', 'UA-31513607-1']); // REPLACE WITH YOUR GA NUMBER
			_gas.push(['_setDomainName', 'blog.bittorrent.com']); // REPLACE WITH YOUR DOMAIN
			_gas.push(['_trackPageview']);
			_gas.push(['_gasTrackForms']);
			_gas.push(['_gasTrackOutboundLinks']);
			_gas.push(['_gasTrackMaxScroll']);
			_gas.push(['_gasTrackDownloads']);
			_gas.push(['_gasTrackVideo']);
			_gas.push(['_gasTrackAudio']);
			_gas.push(['_gasTrackYoutube', {force: true}]);
			_gas.push(['_gasTrackVimeo', {force: true}]);
			_gas.push(['_gasTrackMailto']);

			(function() {
			var ga = document.createElement('script');
			ga.id = 'gas-script';
			ga.setAttribute('data-use-dcjs', 'true'); // CHANGE TO TRUE FOR DC.JS SUPPORT
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = '//cdnjs.cloudflare.com/ajax/libs/gas/1.11.0/gas.min.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
			})();
		</script> 
		
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

              <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><img class="fadeit" height="48px" src="<?php echo $thelogo ?>" /></a>

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
	            		<?php if ($fb){ ?><a target="_blank" href="<?php echo $fb ?>"><li><i class="fa fa-facebook"></i></li></a><?php } ?>
	            		<?php if ($tw){ ?><a target="_blank" href="<?php echo $tw ?>"><li><i class="fa fa-twitter"></i></li></a><?php } ?>
	            		<?php if ($yt){ ?><a target="_blank" href="<?php echo $yt ?>"><li><i class="fa fa-youtube-play"></i></li></a><?php } ?>
	            		<?php if ($ig){ ?><a target="_blank" href="<?php echo $ig ?>"><li><i class="fa fa-instagram"></i></li></a><?php } ?>
	            		<?php if ($gp){ ?><a target="_blank" href="<?php echo $gp ?>"><li><i class="fa fa-google-plus"></i></li></a><?php } ?>
	            		<?php if ($rss){ ?><a target="_blank" href="<?php echo $rss ?>"><li><i class="fa fa-rss"></i></li></a><?php } ?>
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
