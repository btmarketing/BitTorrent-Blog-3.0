<?php get_header(); ?>
      
    <div class="container">  

			<div id="content" class="clearfix">

				<div id="main" class="single-main clearfix" role="main">

					<!-- Featured image and title -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-single' ); ?>
							<div class="single-featured" style="background: url('<?php echo $image[0]; ?>')">
								<div class="title-background">
									<header class="article-header">
									<div class="title">
										<h2><?php the_title(); ?></h2>
										<p class="byline vcard">
											by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> on 
											<time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
											<span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
										</p>
									</div>
									</header>
								</div>
							</div>
						
						<div class="single-top"></div>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">




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

							<footer class="article-footer single-footer clearfix">
								<span class="tags pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="fa fa-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
              					<span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
            				</footer> <?php // end article footer ?>


						</article> <?php // end article ?>

					<?php get_template_part( 'author-info' ); ?>

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
