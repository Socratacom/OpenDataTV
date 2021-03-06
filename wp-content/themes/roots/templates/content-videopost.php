<script
  type="text/javascript"
  data-lf-domain="{network name (domain.fyre.co)}"
  src="//cdn.livefyre.com/libs/commentcount/v1.0/commentcount.js">
</script>

<?php while (have_posts()) : the_post();
  $video_quote = get_field('quote');
  $post_views = '[post_view]';
?>
  <article <?php post_class(); ?>>
    <div class=container>
      <div class="row">
        <div class="videoWrapper">
          <?php
            $videoUrl = get_field('youtube_link');
            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoUrl . '?modestbranding=1&amp;rel=0&amp;vq=hd1080&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
          ?>
        </div>
      </div>

      <div class="row">
        <div class="template-socialBar">
          <div class="socialBar-label">
            Share:
          </div>
          <div class="socialBar-addThis">
            <div class="addThis-widget">
              <div class="addthis_toolbox addthis_64x64_style">
                <a class="addthis_button_email">
                  <i class="icon-email"></i>
                </a>
                <a class="addthis_button_linkedin">
                  <i class="icon-linked"></i>
                </a>
                <a class="addthis_button_google_plusone_share">
                  <i class="icon-google-plus"></i>
                </a>
                <a class="addthis_button_twitter">
                  <i class="icon-twitter"></i>
                </a>
                <a class="addthis_button_facebook">
                  <i class="icon-facebook"></i>
                </a>
                <a class="addthis_button_expanded">
                  <i class="icon-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="socialBar-statsContainer">
            <div class="statsContainer-stats">
              <div class="stats-number">
                <p><?php echo do_shortcode($post_views); ?></p>
              </div>
              <div class="stats-label">
                <p>views</p>
              </div>
            </div>
            <div class="statsContainer-stats">
              <div class="stats-number">
                <p><span class="livefyre-commentcount" data-lf-site-id="371534" data-lf-article-id="<?php the_ID(); ?>">
0</span></p>
              </div>
              <div class="stats-label">
                <p>comments</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
       </div>

      <div class="row">

        <div class="col-sm-8">
          <div class="entry-content">
            <div class="content-quote">
              <?php
                echo '<i class="icon-quotes-left"></i><p>' . $video_quote . '</p><i class="icon-quotes-right"></i>';
              ?>
            </div>
              <?php
                echo '<div class="content-body">';
                the_content();
                echo '</div>';
              ?>
            <?php comments_template('/templates/comments.php'); ?>
          </div>
        </div>

        <div class="col-sm-4 border-left">
          <div class="template-speaker">

          <?php
            // field type post object
            $speaker = get_field('speaker');

            $speaker_id = $speaker->ID;
            $speaker_name = $speaker->post_title;
            $speaker_description = $speaker->post_content;
            $link = get_permalink($speaker_id);
            $featured_image = get_the_post_thumbnail($speaker_id, 'full', array('class' => 'img-responsive') );

            echo '<div class="speaker-title"><p>About our speaker</p></div>';
            echo '<div class="speaker-img">' . $featured_image . '</div>';
            echo '<div class="speaker-title"><a href="' . $link . '"><p>' . $speaker_name . '</p></a></div>';
            echo '<div class="speaker-subtitle"><p></p></div>';
            echo '<div class="speaker-description">' . $speaker_description . '</div>';
          ?>

          </div>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
