<div class="<?php echo apply_filters('govuk_theme_class', 'govuk-body-s') ?>">
    <span class="<?php echo apply_filters('govuk_theme_class', 'govuk-visually-hidden') ?>">Published by: </span>
    <span class="author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span>,    
    <span class="<?php echo apply_filters('govuk_theme_class', 'govuk-visually-hidden') ?>">on: </span>
    <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
</div>
