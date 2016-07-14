<?php get_header(); ?>

<div class="container">

  <div id="content" class="clearfix">

    <div class="latest-div">
      <i class="fa fa-list-alt"></i><span>&nbsp;Live Blog</span>
    </div>

    <div class="live-blog-info">
      <h2><?php the_title(); ?></h2>
    </div>
    <div id="main" class="clearfix" role="main">

      <div class="row">
        <div class="col-md-8">
          <div class="entry-content press-content live-blog">
            <h3 class="live-blog__title">Latest:</h3>
            <p class="live-blog__refresh">(refresh to update)</p>

            <?php if( have_rows('live_update') ): ?>

            	<?php while( have_rows('live_update') ): the_row();

            		// vars
            		$liveTitle = get_sub_field('live_update_title');
            		$liveContent = get_sub_field('live_update_content');
                $liveTime = get_sub_field('live_update_time');


            		?>
                <div class="live-post">
                  <span class="live-post__time"><?php echo $liveTime; ?></span>
              		<h4 class="live-post__title"><?php echo $liveTitle; ?></h4>
                  <?php echo $liveContent; ?>
                </div>

            	<?php endwhile; ?>


            <?php endif; ?>


          </div>
        </div> <!--/col-md-8-->
        <div class="col-md-4">
          <div class="press-sidebar">
            <strong>Follow BitTorrent News</strong>
            <ul class="muted">
              <li><a href="http://www.twitter.com/bitorrentnews" target="_blank">Twitter</a></li>
            </ul>
            <strong>Contact</strong>
              <ul>
                <li><a href="mailto:press@bittorrent.com">press@bittorrent.com</a></li>
              </ul>
            <strong>Press-kit</strong>
            <ul class="muted">
              <li><a href="http://apps.bittorrent.com/bittorrent_press_kit.zip" target="_blank">Get the Press Kit</a></li>
            </ul>
          </div> <!--/press-sidebar-->
        </div> <!--col-md-4-->
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
