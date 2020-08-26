<article <?php post_class('article-list-item'); ?>
    <header>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php get_template_part('partials/entry-meta'); ?>
    </header>

    <div class="entry excerpt rich-text">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button">Read more</a>
    </div>
</article>
