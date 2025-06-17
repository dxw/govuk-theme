<!DOCTYPE html>
<html <?php language_attributes() ?> class="<?php echo apply_filters('govuk_theme_class', 'govuk-template') ?>">
<head>
    <?php get_template_part('partials/head'); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class('govuk-template__body'); ?>>

    <script>document.body.className += ' js-enabled' + ('noModule' in HTMLScriptElement.prototype ? ' govuk-frontend-supported' : '');</script>

    <a href="#main-content" class="<?php echo apply_filters('govuk_theme_class', 'govuk-skip-link') ?>" data-module="govuk-skip-link"><?php _e('Skip to main content', 'govuk-theme') ?></a>

    <?php get_template_part('partials/global-header'); ?>

    <div class="<?php echo apply_filters('govuk_theme_class', 'govuk-width-container') ?>">

        <?php get_template_part('partials/breadcrumb'); ?>

        <main class="<?php echo apply_filters('govuk_theme_class', 'govuk-main-wrapper') ?>" id="main-content">
            <?php h()->w_requested_template(); ?>
        </main>
        
    </div>    

    <?php get_template_part('partials/global-footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
