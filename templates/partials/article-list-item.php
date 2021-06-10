<article <?php post_class('article-list-item'); ?>>
    <header>
        <h1><a class="<?php echo apply_filters('govuk_theme_class', 'govuk-link') ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php get_template_part('partials/entry-meta'); ?>
    </header>

    <div class="entry excerpt rich-text">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="<?php echo apply_filters('govuk_theme_class', 'govuk-link') ?>"><?php _e('Read more', 'govuk-theme') ?></a>
    </div>
</article>
