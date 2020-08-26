<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!--[if lt IE 9]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

    <?php get_template_part('partials/global-header'); ?>

    <main class="main" role="main">
        <?php h()->w_requested_template(); ?>
    </main>

    <?php get_template_part('partials/global-footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
