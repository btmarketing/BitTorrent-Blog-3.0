<?php $start = get_stylesheet_directory_uri();
	$targetArray = array(
		"$start" . "/library/images/featured1.png",
		"$start" . "/library/images/featured2.png",
		"$start" . "/library/images/featured3.png",
		"$start" . "/library/images/featured4.png",
		"$start" . "/library/images/featured5.png",
	);
?>
<?php global $bt_options; ?>
<?php if( !is_paged() ): ?>
<?php while ( have_posts() ) :
    the_post();
    ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-post clearfix' ); ?> role="article">

		<header class="article-header">
			<div class="titlewrap clearfix">
				<h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p class="byline vcard">
					<span class="author">by <em><?php echo bones_get_the_author_posts_link() ?></em></span> on 
					<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
					<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
				</p>
			</div>

		</header> <?php // end article header ?>

		<?php if ( has_post_thumbnail() ) { ?>

		<?php if( $bt_options['featured'] == '2' || ( $bt_options['featured'] == '4' && is_single() ) || ( $bt_options['featured'] == '3' && is_home() ) ) { ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
		<section class="featured-content featured-img">
				<?php if ( has_post_thumbnail() ) { ?>
          <a class="featured-img" href="<?php the_permalink(); ?>">
          	<?php the_post_thumbnail( 'post-featured' ); ?>
          </a>
        <?php } ?>
			<?php } ?>
			</section>
			<?php } else { ?>
				<hr class="featuredHR">
				<?php } ?>

		<section class="entry-content clearfix">
			<?php the_content('Continue reading...'); ?>
			<?php wp_link_pages(
        array(     		
          'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
          'after' => '</div>'
        ) 
      ); ?>
		</section> <?php // end article section ?>

		<footer class="article-footer clearfix">
			<span class="category pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?></span>
  		<span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
		</footer> <?php // end article footer ?>


	</article> <?php // end article ?>

	<?php if( (3 == $wp_query->current_post) && !is_paged() ): break; endif; ?>


<?php endwhile; endif; ?>

<!-- MID FEATURED POSTS -->
<?php if (!is_paged()) { ?>
<?php $the_cat = $bt_options['mid-category'] ?>
<?php $the_cat_name = get_cat_name( $bt_options['mid-category'] ) ?>
<?php $the_cat_link = get_category_link( $bt_options['mid-category'] ) ?>
<div class="divider hidden-xs hidden-sm">
	<span class="line-left"></span>
	<span class="mid"><i class="fa fa-list-alt"></i>&nbsp;Latest in <a href="<?php echo $the_cat_link ?>"><?php echo $the_cat_name ?></a></span>
	<span class="line-right"></span>
</div>

<div class="featured-mid hidden-xs hidden-sm">
	<div class="row">
		<?php $query = new WP_Query( "category_name=$the_cat_name&posts_per_page=5" ); ?>
		<?php $n = 0 ?>
		<?php while ($query->have_posts()): $query->the_post(); ?>

		<?php if( $n < 3 ): ?>
		<?php $n++ ?>

		<div class="col-md-4">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-secondary' ); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>

					<div class="featured second" style="background: url('<?php echo $image[0]; ?>')">
					<? } else {
					$rand = array_rand($targetArray); ?>
					<div class="featured second" style="background: url('<?php echo $targetArray[$rand]; ?>')">
					<? } ?>
						<div class="title-background">
							<div class="title">
								<h4><?php the_title(); ?></h4>
							</div>
							<div class="featuredByline">
								by <em></em> on 
								<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
								<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
							</div>
						</div>
					</div>
				</a>
			</div>

		<?php else : ?>
		<?php $n++ ?>

		<div class="col-md-6">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-long' ); ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="featured third gap" style="background: url('<?php echo $image[0]; ?>')">
					<div class="title-background">
						<div class="title">
							<h4><?php the_title(); ?></h4>
						</div>
						<div class="featuredByline">
							by <em></em> on 
							<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
							<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
						</div>
					</div>
				</div>
			</a>
		</div>

		<?php endif; endwhile; ?>

	</div> <!-- /row -->
</div> <!-- /featured-mid -->
<div class="latest-div hidden-xs hidden-sm">
	<i class="fa fa-list-alt"></i><span>&nbsp;Other Posts</span>
</div>
<?php } ?>
<!-- END secondary-feature -->


<!-- CONTINUE LOOP -->
<div class="row double">
<?php 
while ( have_posts() ) : 
	the_post(); ?>
	<div class="item col-md-6">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-post clearfix' ); ?> role="article">

			<header class="article-header">
				<div class="titlewrap clearfix">
					<h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="byline vcard">
						<span class="author">by <em><?php echo bones_get_the_author_posts_link() ?></em></span> on 
						<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
						<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
					</p>
				</div> <?php //end titlewrap ?>

			</header> <?php // end article header ?>

			<?php if ( has_post_thumbnail() ) { ?>

			<?php if( $bt_options['featured'] == '2' || ( $bt_options['featured'] == '4' && is_single() ) || ( $bt_options['featured'] == '3' && is_home() ) ) { ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-grid' ); ?>
			<section class="featured-content featured-img">
				<?php if ( has_post_thumbnail() ) { ?>
          <a class="featured-img" href="<?php the_permalink(); ?>">
          	<?php the_post_thumbnail( 'post-grid' ); ?>
          </a>
        <?php } ?>
			<?php } ?>
			</section>
			<?php } else { ?>
				<hr class="featuredHR">
				<?php } ?>

			<section class="entry-content clearfix">
				<?php the_excerpt('Continue reading...'); ?>
				<?php wp_link_pages(
          array(                          		
            'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
            'after' => '</div>'
          ) 
				); ?>
			</section> <?php // end article section ?>

			<footer class="article-footer clearfix">
				<span class="category pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?></span>
    		<span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
  		</footer> <?php // end article footer ?>

		</article> <?php // end article ?>
	</div>
 	<?php endwhile; ?>

</div> <!-- end double -->


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



