<div class="search-form__wrapper">
    <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">

        <input type="search" value="<?php echo is_search() ? get_search_query() : '' ?>" name="s" id="site-search" class="<?php echo apply_filters('govuk_theme_class', 'govuk-input search-form__input'); ?>" placeholder="<?php _e('Search', 'govuk-theme'); ?>">

        <label class="<?php echo apply_filters('govuk_theme_class', 'govuk-visually-hidden'); ?>" for="site-search"><?php _e('Search on ', 'govuk-theme'); ?> <?php bloginfo('name'); ?></label>

        <div class="search-form__submit-wrapper">
            <button class="<?php echo apply_filters('govuk_theme_class', 'govuk-button search-form__button') ?>" data-module="govuk-button"><?php _e('Search', 'govuk-theme'); ?>
                <svg class="search-form__icon" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <circle cx="12.0161" cy="11.0161" r="8.51613" stroke="currentColor" stroke-width="3"></circle>
                    <line x1="17.8668" y1="17.3587" x2="26.4475" y2="25.9393" stroke="currentColor" stroke-width="3"></line>
                </svg>
            </button>
        </div>
    </form>
</div>
