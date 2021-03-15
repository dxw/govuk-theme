<?php if ($wp_query->max_num_pages > 1) : ?>

    <nav class="<?php echo apply_filters('govuk_theme_class', 'govuk-pagination__container') ?>" role="pagination" aria-label="Pagination Navigation">
        <?php echo paginate_links([
            'type' => 'list',
            'prev_next' => false,
            'before_page_number' => '<span class="govuk-visually-hidden">Page </span>'
        ]); ?>
    </nav>

<?php endif; ?>
