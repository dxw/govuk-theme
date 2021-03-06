<?php

global $post;

$ancestors = array_reverse(get_post_ancestors($post->ID)); ?>

<div class="govuk-breadcrumbs ">
    <ol class="govuk-breadcrumbs__list">
        <?php if (!is_front_page()) : ?>
            <li class="govuk-breadcrumbs__list-item">
                <a class="govuk-breadcrumbs__link" href="<?php echo get_site_url(); ?>">Home</a>
            </li>
            <?php foreach ($ancestors as $ancestor) : ?>
                <li class="govuk-breadcrumbs__list-item">
                    <a class="govuk-breadcrumbs__link" href="<?php the_permalink($ancestor) ?>"><?php echo get_the_title($ancestor) ?></a>
                </li>
            <?php endforeach; ?>
            <li class="govuk-breadcrumbs__list-item"><?php the_title() ?></li>
        <?php endif; ?>
    </ol>
</div>
