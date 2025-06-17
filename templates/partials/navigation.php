<section aria-label="Service information" class="govuk-service-navigation" data-module="govuk-service-navigation">
  <div class="govuk-width-container">
    <div class="govuk-service-navigation__container">
      <span class="govuk-service-navigation__service-name">
          <a href="<?php echo esc_url(home_url()) ?>" class="govuk-service-navigation__link">
              <?php echo esc_html(get_bloginfo('name')) ?>
          </a>
      </span>
      <nav aria-label="Menu" class="govuk-service-navigation__wrapper">
        <button type="button" class="<?php echo apply_filters('govuk_theme_class', 'govuk-service-navigation__toggle govuk-js-service-navigation-toggle') ?>" aria-controls="header-navigation" hidden>
            <?php _e('Menu', 'govuk-theme') ?>
        </button>
        <?php
        if (has_nav_menu('header')) {
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container_class' => 'menu-header',
                'depth' => 1,
                'menu_class' => 'govuk-service-navigation__list',
                'menu_id' => 'header-navigation',
                'container' => false
            ));
        };
        ?>
      </nav>
    </div>
  </div>
</section>
