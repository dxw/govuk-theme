<!DOCTYPE html>
<html lang="en" class="<?php echo apply_filters('govuk_theme_class', 'govuk-template') ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#0b0c0c">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" sizes="16x16 32x32 48x48" href="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/favicon.ico" type="image/x-icon">
    <link rel="mask-icon" href="/assets/images/govuk-mask-icon.svg" color="#0b0c0c">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/govuk-apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/govuk-apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/govuk-apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" href="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/govuk-apple-touch-icon.png">

    <meta property="og:image" content="/wp-content/themes/govuk-theme/static/lib/govuk-frontend/govuk/assets/images/govuk-opengraph-image.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class('govuk-template__body'); ?>>

    <script>
        document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
    </script>

    <a href="#main-content" class="<?php echo apply_filters('govuk_theme_class', 'govuk-skip-link') ?>">Skip to main content</a>

    <?php get_template_part('partials/global-header'); ?>

    <div class="<?php echo apply_filters('govuk_theme_class', 'govuk-width-container') ?>">

        <?php get_template_part('partials/breadcrumb'); ?>

        <main class="<?php echo apply_filters('govuk_theme_class', 'govuk-main-wrapper') ?>" id="main-content" role="main">
            <?php h()->w_requested_template(); ?>
        </main>
        
    </div>    

    <?php get_template_part('partials/global-footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
