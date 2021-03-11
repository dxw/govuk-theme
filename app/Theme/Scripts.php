<?php

namespace Dxw\GovukTheme\Theme;

class Scripts implements \Dxw\Iguana\Registerable
{
    public function __construct(\Dxw\Iguana\Theme\Helpers $helpers)
    {
        $helpers->registerFunction('assetPath', [$this, 'assetPath']);
        $helpers->registerFunction('getAssetPath', [$this, 'getAssetPath']);
    }

    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'wpEnqueueScripts']);
    }

    public function getAssetPath($path)
    {
        return dirname(get_template_directory_uri()).'/static/'.$path;
    }

    public function assetPath($path)
    {
        echo esc_url($this->getAssetPath($path));
    }

    public function wpEnqueueScripts()
    {
        //
        // Do not add javascript to your theme here, unless you're sure you should.
        //
        // Normally, you should add Javascript to assets/js/main.js or make a file in assets/js/plugins.
        //
        // You can/should enqueue a script here only if it is a widely used library that is required by a plugin (or is likely to be later)
        //

        // We need to register our own jQuery, because WP is on jQuery 2.x which breaks support for IE 6-8.
        // This will not affect admin pages
        // This will break any plugin that requires a feature/behaviour in jQuery 2.x which is missing/different in jQuery 1.10.x
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', $this->getAssetPath('lib/jquery.min.js'));

        // Because it's awesome
        wp_enqueue_script('modernizr', $this->getAssetPath('lib/modernizr.min.js'));

        // Pretty much everything else should be compiled by Grunt.
        wp_enqueue_script('main', $this->getAssetPath('main.min.js'), ['jquery', 'modernizr'], '', true);

        wp_enqueue_style('main', $this->getAssetPath('main.min.css'));
    }
}
