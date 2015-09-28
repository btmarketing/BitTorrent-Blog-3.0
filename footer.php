
    <footer id="footer" class="clearfix">

      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
              &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
              Built with <a target="_blank" href="http://www.wordpress.org">Wordpress</a>
            </div>
          </div> <!-- end .row -->
        </div>
      </div>
      
      <!-- snippet for enabling/disabling blog-wide modal -->
        <?php global $bt_options ?>
        <?php $hello = $bt_options['themehello'] ?>
        <?php $PostModalOption = get_post_meta( $post->ID, '_btm_modal_allow', true); ?>
        <?php if ( is_single() && $bt_options['modalSwitch'] == '1' && ( $PostModalOption == 'modal_enabled' || $PostModalOption == '') ) {
          get_template_part( 'themodal'); 
        } elseif ( is_home() && $bt_options['modalSwitchIndex'] == '1') {
          get_template_part( 'themodal');
        } ?>


    </footer> <!-- end footer -->

    <?php if ($hello){ ?>
    
    <div class="email-capture">
      <h6>Sign up for the Sync newsletter.</h6>
      <a class="modal_close">x</a>
      <span>Become a Sync insider. Have tips, tricks, and updates sent straight to your inbox.</span>
      <form action="//getsync.us5.list-manage.com/subscribe/post?u=a3baea4e54ff8e8b235488c11&amp;id=9d685f8d9b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL">
        <div>
          <label>I'm using Sync for:</label>
          <input type="checkbox" value="Business" name="group[113][1]" id="mce-group[113]-113-0" class="interest"><label>Business</label>
          <input type="checkbox" value="Personal" name="group[113][2]" id="mce-group[113]-113-1" class="interest" checked=""><label>Personal</label>
        </div>
        <button class="btn-f hello-submit" name="subscribe" id="mc-embedded-emailcapture" type="submit">Sign up</button>
      </form>
    </div>

    <?php } ?>

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>

    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
