<?php get_header(); ?>


<div class="container">

	<div id="content" class="clearfix">

		<!-- Front Page Featured Posts -->
		<?php if( is_front_page() && !is_paged() ) { ?>
    <div id="featured-top" class="row clearfix">
    	<?php $my_query = new WP_Query('category_name=Featured&showposts=1');
			while ($my_query->have_posts()) : $my_query->the_post();
			$do_not_duplicate = $post->ID; ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="col-md-8">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-main' ); ?>
					<div class="featured first" style="background: url('<?php echo $image[0]; ?>')">
						<div class="title-background">
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</a>

			<?php endwhile; ?>

			<div class="col-md-4">

				<?php $my_query = new WP_Query('category_name=featured-secondary&showposts=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-secondary' ); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div class="featured second" style="background: url('<?php echo $image[0]; ?>')">
						<div class="title-background">
							<div class="title">
								<h4><?php the_title(); ?></h4>
							</div>
						</div>
					</div>
				</a>

				<?php endwhile; ?>

				<?php $my_query = new WP_Query('category_name=featured-third&showposts=1');
				while ($my_query->have_posts()) : $my_query->the_post();
				$do_not_duplicate = $post->ID; ?>

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-secondary' ); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<div class="featured second gap" style="background: url('<?php echo $image[0]; ?>')">
						<div class="title-background">
							<div class="title">
								<h4><?php the_title(); ?></h4>
							</div>
						</div>
					</div>
				</a>

				<?php endwhile; ?>

			</div>
		</div>
		<?php } ?>

		<!-- END Front Page Featured Posts -->

		<div class="latest-div">
			<i class="fa fa-list-alt"></i><span>&nbsp;Latest news</span>
		</div>

		<div id="main" class="clearfix" role="main">

			<?php get_template_part( 'loop', 'index' ); ?>

		</div> <?php // end #main ?>

	</div> <?php // end #content ?>

</div> <!-- end ./container -->


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
