<?php
// TODO: Put me somewhere else
if (post_password_required()) {
    return;
}
?>

<?php if (have_comments()) : ?>

    <section id="comments">
        <h3><?php printf(_n('One Response to &ldquo;%2$s&rdquo;', '%1$s Responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'roots'), number_format_i18n(get_comments_number()), get_the_title()); ?></h3>

        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav>
                <ul class="pager">
                    <?php if (get_previous_comments_link()) : ?>
                        <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'roots')); ?></li>
                    <?php endif; ?>
                    <?php if (get_next_comments_link()) : ?>
                        <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'roots')); ?></li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </section>
<?php endif; ?>

<?php if (comments_open()) : ?>
    <?php get_template_part('partials/comment-form'); ?>
<?php endif; ?>
