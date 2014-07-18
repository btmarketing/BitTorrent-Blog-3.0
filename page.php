<?php

?>

<?php get_header(); ?>

      <div class="container">

        <div id="content" class="clearfix">

          <div class="latest-div">
      <i class="fa fa-list-alt"></i><span>&nbsp;Latest Posts</span> 

    </div>

    <div id="main" class="clearfix" role="main">
    <div class="row">
      <div class="col-md-8">
        <div class="entry-content page-content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>
          <?php endwhile; ?>    
            
            <?php else : ?>
            
            <article id="post-not-found">
                <header>
                  <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                </header>
                <section class="post_content">
                  <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>
            
            <?php endif; ?>

        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>


    </div> <?php // end #main ?>

  </div> <?php // end #content ?>

</div> <!-- end ./container -->

<?php get_footer(); ?>
