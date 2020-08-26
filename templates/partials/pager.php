<?php if ($wp_query->max_num_pages > 1) : ?>

    <div class="pager">
        <?php h()->pagination(); ?>
    </div>

<?php endif; ?>
