<nav class="header-navigation" role="navigation">
    <button type="button" id="js-navigation-toggle" class="navigation-toggle visible-min-width">
        <span class="sr-only">Menu</span>
        <!--[if gte IE 9]><!-->
        <svg id="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8"><path fill="#333" class="st0" d="M1.5 1.8c-.2 0-.4-.1-.5-.3S.8 1.2.8 1s0-.4.2-.5.3-.2.5-.2h9c.2 0 .4.1.5.2s.2.3.2.5 0 .4-.2.5-.3.2-.5.2h-9zm9 1.4c.2 0 .4.1.5.2s.2.3.2.5 0 .5-.2.6-.3.2-.5.2h-9c-.2.1-.4 0-.5-.2S.8 4.2.8 4s0-.4.2-.5.3-.2.5-.2h9zm0 3c.2 0 .4.1.5.2s.2.3.2.5 0 .5-.2.6-.3.2-.5.2h-9c-.2.1-.4 0-.5-.2S.8 7.2.8 7s0-.4.2-.5.3-.2.5-.2h9z"/></svg>
        <!--<![endif]-->
    </button>
    <?php
    if (has_nav_menu('header')) {
        wp_nav_menu(array(
            'theme_location' => 'header',
            'container_class' => 'menu-header',
        ));
    }
    ?>
</nav>
