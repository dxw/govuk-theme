<nav class="header-navigation" role="navigation">
    <button type="button" class="<?php echo apply_filters('govuk_theme_class', 'govuk-header__menu-button govuk-js-header-toggle') ?>" aria-controls="header-navigation" aria-label="Show or hide Top Level Navigation">Menu</button>
    <?php
    if (has_nav_menu('header')) {
        wp_nav_menu(array(
            'theme_location' => 'header',
            'container_class' => 'menu-header',
            'depth' => 1,
            'menu_class' => apply_filters('govuk_theme_class', 'govuk-header__navigation'),
            'menu_id' => 'header-navigation',
            'container' => false
        ));
    }
    ?>
</nav>
