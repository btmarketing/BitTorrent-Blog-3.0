<?php get_header(); ?>

<div class="container">

	<div id="content" class="clearfix row">

		<div id="main" class="col-md-12 clearfix" role="main">

				<?php if (is_category()) { ?>
					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Category:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
					</div>	

				<?php } elseif (is_tag()) { ?>
					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
					</div>	

				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author;
				?>
					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>
					</div>	

				<?php } elseif (is_day()) { ?>

					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
					</div>	

				<?php } elseif (is_month()) { ?>
					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
					</div>	

				<?php } elseif (is_year()) { ?>
					<div class="latest-div">
						<i class="fa fa-list-alt"></i><span>
						<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
					</div>	
				<?php } ?>

			<?php get_template_part( 'loop', 'double' ); ?>

			<?php if (function_exists("emm_paginate")) { ?>
		    <?php emm_paginate(); ?>
			<?php } else { ?>
				<nav class="wp-prev-next">
						<ul class="clearfix">
							<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
							<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
						</ul>
				</nav>
			<?php } ?>

		</div> <?php // end #main ?>

	</div> <?php // end #content ?>

</div> <?php // end ./container ?>

<script type="text/javascript">
	jQuery(window).ready(function($) {
		var $container = $(".double");
		$container.imagesLoaded(function () {
    	$container.isotope({
        itemSelector: ".item",
	    });
		});
	});
</script>
<?php get_footer(); ?>
