<footer class="global-footer" role="contentinfo">
    <div class="row">
        <nav class="footer-navigation">
            <?php
            if (has_nav_menu('footer')) {
                wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'footer'));
            }
            ?>
        </nav>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
