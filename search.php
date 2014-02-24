<?php get_header(); ?>
      
<div class="container">

  <div id="content" class="clearfix row">
  
    <div id="main" class="col col-lg-12 clearfix" role="main">

      <div class="latest-div">
        <i class="fa fa-list-alt"></i><span>
        <?php _e("Search Results for","bonestheme"); ?>:</span> <?php echo esc_attr(get_search_query()); ?>
      </div>  
    
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