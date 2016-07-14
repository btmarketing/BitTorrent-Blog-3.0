<?php get_header(); ?>

<div class="container">

  <div id="content" class="clearfix">

    <div class="latest-div">
      <i class="fa fa-list-alt"></i><span>&nbsp;Press Room</span>
    </div>

    <div id="main" class="clearfix" role="main">

      <div class="row">
        <div class="col-md-12">
          <div class="entry-content press-content">
            <h3>Live Blogs:</h3>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
              <span class="time"><?php the_time('F j, Y'); ?></span>
            </div>

            <?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>
          </div>
        </div> <!--/col-md-8-->
      </div> <!--/row-->

      <nav class="wp-prev-next">
				<ul class="clearfix pagination">
					<li class="prev-link"><?php next_posts_link( __( '<i class="fa fa-chevron-left"></i>' . ' Previous Page', 'bonestheme' )) ?></li>
					<li class="next-link"><?php previous_posts_link( __( 'Next Page ' . '<i class="fa fa-chevron-right"></i>', 'bonestheme' )) ?></li>
				</ul>
			</nav>

    </div> <?php // end #main ?>

  </div> <?php // end #content ?>

</div> <!-- end ./container -->

<?php get_footer(); ?>
