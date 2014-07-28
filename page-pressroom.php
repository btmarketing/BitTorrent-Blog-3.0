<?php get_header(); ?>
<?php get_template_part( 'content', 'custom_news' ); ?>
<?php global $post; ?>

      <div class="container">

        <div id="content" class="clearfix">

          <div class="latest-div">
      <i class="fa fa-list-alt"></i><span>&nbsp;Press Room</span> 

    </div>

    <div id="main" class="clearfix" role="main">
    <div class="row">
      <div class="col-md-8">
        <div class="entry-content press-content">
          <h3>BitTorrent News</h3>
          <?php $custom_query = new WP_Query('tag=pressroom'); // any post tagged with "pressroom"
            while($custom_query->have_posts()) : $custom_query->the_post(); ?>

              <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                <span class="time"><?php the_time('F j, Y'); ?></span>
              </div>

            <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>

        </div> <!--/entry-content-->
      </div> <!--col-md-8-->
      <div class="col-md-4">
        <div class="press-sidebar">
          <strong>About BitTorrent</strong>
          <ul class="muted">
            <li><a href="http://www.bittorrent.com/company/about" target="_blank">About Us</a></li>
            <li><a href="http://www.bittorrent.com/company/about/management" target="_blank">Management Team</a></li>
            <li><a href="http://www.bittorrent.com/company/about/partners" target="_blank">Partners</a></li>
          </ul>
          <strong>Press Contact</strong>
            <ul>
              <li><a href="mailto:press@bittorrent.com">press@bittorrent.com</a></li>
            </ul>
          <strong>Press-kit</strong>
          <ul class="muted">
            <li><a href="http://apps.bittorrent.com/bittorrent_press_kit.zip" target="_blank">Get the Press Kit</a></li>
          </ul>
        </div> <!--/press-sidebar-->
        <div class="press-sidebar bump">
          <h4>In the News</h4>
          <?php query_posts('post_type=custom_news&posts_per_page=10');?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php $news_url = get_post_meta( $post->ID, '_btm_news_url', true ); ?>
          <?php $the_source = get_post_meta( $post->ID, '_btm_source', true ); ?>
          <div class="news-item">
            <p><a href="<?php echo $news_url ?>" target="_blank"><?php the_title(); ?></a><br>
            <span class="source"><em><?php echo $the_source ?></em></span><br>
            <span class="time"><?php the_time('F j, Y'); ?></span></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div> <!--/press-sidebar-->
      </div> <!--col-md-4-->
    </div> <!--/row-->


    </div> <?php // end #main ?>

  </div> <?php // end #content ?>

</div> <!-- end ./container -->

<?php get_footer(); ?>
