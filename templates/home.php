<header>
    <h1><?php echo bloginfo('name'); ?></h1>
    <h2><?php echo bloginfo('description'); ?></h2>
</header>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php get_template_part('partials/article-list-item'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="pager">
    <?php get_template_part('partials/pager') ?>
</div>
