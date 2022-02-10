<!-- HEADER -->
<div class="archive__header">
    <h1><?php echo h()->w_template_title(); ?></h1>
</div><!-- /.archive__header -->

<!-- LISTINGS -->
<div class="archive__listings" id="listing">

    <?php if (have_posts()) : ?>

        <?php 
            global $wp_query; 
            $perPage = get_option('posts_per_page');
            $page = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            $startCount = (($page-1) * $perPage) + 1;
            $endCount = $page * $perPage;
            $endCount = $endCount < $wp_query->found_posts ? $endCount : $wp_query->found_posts;
        ?>


        <h2>Results <?php echo $startCount ?> to <?php echo $endCount; ?> of <?php echo $wp_query->found_posts ?></h2>

        <!-- POSTS -->
        <ul class="govuk-list">
            <?php while (have_posts()) : ?>
                <li>
                    <?php the_post(); ?>

                    <h3 class="govuk-heading-m"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                    <p class="govuk-!-margin-bottom-2"><?php echo wp_kses_post(get_the_excerpt());?></p>
                    <p class="govuk-!-font-size-16"><a aria-hidden="true" tabindex="-1" href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>             
                </li>
            <?php endwhile; ?>
        </ul><!-- /.archive__posts -->

        <!-- PAGINATION -->
        <div class="archive__pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else: ?>
        <p>No results found.</p>

    <?php endif; ?>

</div><!-- /.archive__listings -->
