<?php
/*
Single Post Template: Single - Hero
This will display the hero image by itself.  No gradient or text over it.
*/
?>

<?php $start = get_stylesheet_directory_uri();
	$targetArray = array(
		"$start" . "/library/images/featured1.png",
		"$start" . "/library/images/featured2.png",
		"$start" . "/library/images/featured3.png",
		"$start" . "/library/images/featured4.png",
		"$start" . "/library/images/featured5.png",
	);
?>

<?php get_header(); ?>
      
    <div class="container">  

			<div id="content" class="clearfix">

				<div id="main" class="single-main clearfix" role="main">

					<!-- Featured image and title -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-test' ); ?>
							<?php if ( has_post_thumbnail() ) { ?>
							<div class="single-featured full single-hero" style="background-image: url('<?php echo $image[0]; ?>')">
							<?php } else { 
								$rand = array_rand($targetArray); ?>
								<div class="single-featured no-img" style="background-image: url('<?php echo $targetArray[$rand]; ?>')">
							<?php } ?>
								<img src="<?php echo $image[0]; ?>" />
							</div>
							<div class="title mb single-hero">
								<h2><?php the_title(); ?></h2>
								<p class="byline vcard">
									by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> on 
									<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
									<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
								</p>
							</div>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix single-hero'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">




							<section class="entry-content single-content clearfix" itemprop="articleBody">
							<div class="single-pad">
								<?php the_content(); ?>
								<?php wp_link_pages(
                                	array(

                                        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
                                        'after' => '</div>'
                                	) 
                                ); ?>
              </div>
							</section> <?php // end article section ?>

						</article> <?php // end article ?>

					<?php get_template_part( 'author-info' ); ?>
					<?php if ( is_single() ) {?>
					  <div id="single-post-nav">
					    <ul class="pager">

					      <?php $trunc_limit = 30; ?>

					      <?php if( '' != get_previous_post() ) { ?>
					        <li class="previous">
					          <?php previous_post_link( '<span class="previous-page">%link</span>', __( '<i class="fa fa-caret-left"></i>', 'bones' ) . '&nbsp;' . brew_truncate_text( get_previous_post()->post_title, $trunc_limit ) ); ?>
					        </li>
					      <?php } // end if ?>

					      <?php if( '' != get_next_post() ) { ?>
					        <li class="next">
					          <?php next_post_link( '<span class="no-previous-page-link next-page">%link</span>', '&nbsp;' . brew_truncate_text( get_next_post()->post_title, $trunc_limit ) . '&nbsp;' . __( '<i class="fa fa-caret-right"></i>', 'bones' ) ); ?>
					        </li>
					      <?php } // end if ?>

					    </ul>
					  </div><!-- /#single-post-nav -->
					<?php } ?>
					<?php $orig_post = $post;  
					global $post;  
					$tags = wp_get_post_tags($post->ID); 
					if ($tags) { ?>
					<div class="col-md-12 divider">
						<span class="line-left"></span>
						<span class="mid"><i class="fa fa-list-alt"></i>&nbsp;Related Posts:</span>
						<span class="line-right"></span>
					</div>
					<div class="featured-mid">
						<div class="row">

							  <?php $tag_ids = array();  
						    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
						    $args=array(  
						    'tag__in' => $tag_ids,  
						    'post__not_in' => array($post->ID),  
						    'posts_per_page'=>5, 
						    'caller_get_posts'=>1  
						    );

						    $my_query = new wp_query( $args );  
								$num = 0;
								$count = $my_query->found_posts;
						    while( $my_query->have_posts() ) {  
						    	$my_query->the_post(); ?>
						    	<?php if( $n < 3 ): ?>
										<?php $n++ ?>
						    	<div class="mb">
						    		<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						    	</div>
										<div class="col-md-4 hidden-xs hidden-sm">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-secondary' ); ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php if ( has_post_thumbnail() ) { ?>
													<div class="featured second" style="background: url('<?php echo $image[0]; ?>')">
													<?php } else { 
														$rand = array_rand($targetArray); ?>
													<div class="featured second" style="background: url('<?php echo $targetArray[$rand]; ?>')">
													<? } ?>
														<div class="title-background">
															<div class="title">
																<h4><?php the_title(); ?></h4>
															</div>
															<div class="featuredByline">
																by <em><?php the_author(); ?> </em> on 
																<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
																<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
															</div>
														</div>
													</div>
												</a>
											</div>

										<?php elseif( $count >= 5 ) : ?>
										<?php $n++ ?>

										<div class="col-md-6 hidden-xs hidden-sm">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-long' ); ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php if ( has_post_thumbnail() ) { ?>
												<div class="featured third gap" style="background: url('<?php echo $image[0]; ?>')">
												<?php } else { 
													$rand = array_rand($targetArray); ?>
												<div class="featured third gap" style="background: url('<?php echo $targetArray[$rand]; ?>')">
												<?php } ?>
													<div class="title-background">
														<div class="title">
															<h4><?php the_title(); ?></h4>
														</div>
														<div class="featuredByline">
															by <em><?php the_author(); ?></em> on 
															<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
															<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
														</div>
													</div>
												</div>
											</a>
										</div>

									<?php endif; ?>
						  	<? }    
						    $post = $orig_post;  
						    wp_reset_query();  
						    ?>  
						</div> <!--/row-->
					</div> <!-- featured-mid-->
					<?php } ?>

            		<?php comments_template(); ?>

					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

			</div> <?php // end #content ?>

    </div> <?php // end ./container ?>

<?php get_footer(); ?>
