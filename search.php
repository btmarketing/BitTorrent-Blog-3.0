<?php get_header(); ?>
      
<div class="container">

  <div id="content" class="clearfix row">
  
    <div id="main" class="col col-lg-12 clearfix" role="main">

      <div class="latest-div">
        <i class="fa fa-list-alt"></i><span>
        <?php _e("Search Results for","bonestheme"); ?>:</span> <?php echo esc_attr(get_search_query()); ?>
      </div>  
    
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
                <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> -- 
                <time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
                <span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
              </p>
            </div> <?php //end titlewrap ?>

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
  
    </div> <!-- end #main -->
            
  </div> <!-- end #content -->

</div> <!-- end .container -->

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