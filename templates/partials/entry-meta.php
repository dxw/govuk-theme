<div class="<?php echo apply_filters('govuk_theme_class', 'govuk-body-s') ?>">
    <span class="<?php echo apply_filters('govuk_theme_class', 'govuk-visually-hidden') ?>"><?php _e('Published by:', 'govuk-theme') ?> </span>
    <span class="author"><a class="<?php echo apply_filters('govuk_theme_class', 'govuk-link') ?>" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php echo get_the_author(); ?></a></span>,    
    <span class="<?php echo apply_filters('govuk_theme_class', 'govuk-visually-hidden') ?>"><?php _e('on:', 'govuk-theme') ?> </span>
    <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
</div>
