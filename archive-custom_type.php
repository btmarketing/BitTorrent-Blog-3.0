<?php get_header(); ?>

      <div class="container">

  			<div id="content" class="row clearfix">

					<div id="main" class="col-md-8 clearfix" role="main">

					<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

							<header class="article-header">

								<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="byline vcard"><?php
									printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link());
								?></p>

							</header> <?php // end article header ?>

							<section class="entry-content clearfix">

								<?php the_excerpt(); ?>

							</section> <?php // end article section ?>

							<footer class="article-footer">

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

						<?php endwhile; ?>

								<nav class="wp-prev-next">
									<ul class="clearfix pagination">
										<li class="prev-link"><?php next_posts_link( __( '<i class="fa fa-chevron-left"></i>' . ' Previous Page', 'bonestheme' )) ?></li>
										<li class="next-link"><?php previous_posts_link( __( 'Next Page ' . '<i class="fa fa-chevron-right"></i>', 'bonestheme' )) ?></li>
									</ul>
								</nav>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div> <?php // end #main ?>

					<?php get_sidebar(); ?>

  			</div> <?php // end #content ?>

      </div> <?php // end ./container ?> 

<?php get_footer(); ?>
