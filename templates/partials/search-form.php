<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

    <input type="search" value="<?php echo is_search() ? get_search_query() : '' ?>" name="s" id="site-search" class="search-field form-control" placeholder="<?php _e('Search on ', 'govuk-theme'); ?> <?php bloginfo('name'); ?>">

    <label class="govuk-visually-hidden" for="site-search"><?php _e('Search on ', 'govuk-theme'); ?> <?php bloginfo('name'); ?></label>

    <button type="submit" class="search-submit"><?php _e('Search', 'govuk-theme'); ?></button>
</form>
