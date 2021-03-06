<footer class="bodyfooter" role="contentinfo">

  <?php
    if (is_page('home') || is_search()) :
  ?>

    <section class="social">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-headline">
              <h3>Engage With the Open Data Movement</h3>
            </div>
            <div class="social-subhead">
              <p>Share the ODTV Channel:</p>
            </div>
            <div class="social-icons">
              <div class="addthis_toolbox addthis_64x64_style">
                <a class="addthis_button_email"></a>
                <a class="addthis_button_linkedin"></a>
                <a class="addthis_button_google_plusone_share"></a>
                <a class="addthis_button_twitter"></a>
                <a class="addthis_button_facebook"></a>
                <a class="addthis_button_expanded"></a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="social-contribute">
              <div class="contribute-headline">
                <h4>Contribute</h4>
              </div>
              <div class="contribute-body">
                <p>Have an open data success you'd like to share? Suggest a topic for us to cover.</p>
              </div>
              <div class="contribute-button">
                <button class="btn btn-primary" data-toggle="modal" data-target="#form-modal">
                  Drop us a line
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="social-twitter">
              <div class="twitter-icon">
                <i class="icon-twitter"></i>
              </div>
              <div class="twitter-body">
                <?php
                   echo do_shortcode('[widget id="pi_tweet_scroll-2"]');
                 ?>
              </div>
              <div class="twitter-author">
                <p>Socrata Team</p>
              </div>
              <div class="twitter-handle">
                <p>@socrata</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="social-signup">
              <div class="signup-headline">
                <h4>Join the Movement</h4>
              </div>
              <div class="signup-body">
                <p>Stay informed on the latest in open data. Subscribe to our monthly newsletter today!</p>
              </div>
              <div class="signup-form">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php
    endif
  ?>

  <section class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="subfooter-presented">
            Open Data Tv is Presented By: <a href="http://www.socrata.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/socrata-logo.png" class="img-responsive"></a>
          </div>
          <div class="subfooter-copyright">
            <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'items_wrap' => '<ul id="%1$s" class="%2$s list-inline">%3$s</ul>', 'menu_class' => 'footer')); ?>
            <div class="copyright">Copyright <?php echo date('Y'); ?> Open Data TV</div>
          </div>
        </div>

      </div>
    </div>
  </section>

</footer>


<div class="video-modal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModal2Label" aria-hidden="true">
</div>

<div class="form-modal modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="myModal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
