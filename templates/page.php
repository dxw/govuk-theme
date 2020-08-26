<article>
    <header>
        <h1><?php the_title(); ?></h1>
    </header>

    <div class="entry content rich-text">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <?php the_content(); ?>
    </div>

</article>
