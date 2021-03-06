<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group left-inner-addon">
    <i class="icon-search"></i>
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> title or keywords" required>

    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default icon-search">
      </button>
      <button type="submit" class="search-submit btn btn-default icon-search">
      </button>
    </span>
  </div>
</form>
