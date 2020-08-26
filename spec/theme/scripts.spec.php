<?php

describe(\Dxw\GovukTheme\Theme\Scripts::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        \WP_Mock::wpFunction('esc_url', [
            'return' => function ($a) {
                return '_'.$a.'_';
            },
        ]);
        $this->helpers = new \Dxw\Iguana\Theme\Helpers();
        $this->scripts = new \Dxw\GovukTheme\Theme\Scripts($this->helpers);
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->scripts)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('registers nav scripts', function () {
            \WP_Mock::expectActionAdded('wp_enqueue_scripts', [$this->scripts, 'wpEnqueueScripts']);
            \WP_Mock::expectActionAdded('wp_print_scripts', [$this->scripts, 'wpPrintScripts']);

            $this->scripts->register();
        });
    });

    describe('->getAssetPath()', function () {
        it('gets the path of the assets', function () {
            \WP_Mock::wpFunction('get_stylesheet_directory_uri', [
                'args' => [],
                'return' => 'http://foo.bar.invalid/cat/dog'
            ]);
            expect($this->scripts->getAssetPath('meow'))->to->be->equal('http://foo.bar.invalid/cat/static/meow');
        });
    });

    describe('->assetPath()', function () {
        it('echos the path of the assets', function () {
            \WP_Mock::wpFunction('get_stylesheet_directory_uri', [
                'args' => [],
                'return' => 'http://foo.bar.invalid/cat/dog',
            ]);
            ob_start();
            $this->scripts->assetPath('meow');
            $result = ob_get_contents();
            ob_end_clean();
            expect($result)->to->be->equal('_http://foo.bar.invalid/cat/static/meow_');
        });
    });

    describe('->wpEnqueueScripts()', function () {
        it('enqueues some of the JavaScript files', function () {
            \WP_Mock::wpFunction('get_stylesheet_directory_uri', [
                'args' => [],
                'return' => 'http://a.invalid/zzz',
            ]);

            \WP_Mock::wpFunction('wp_deregister_script', [
                'args' => ['jquery'],
                'times' => 1,
            ]);

            \WP_Mock::wpFunction('wp_enqueue_script', [
                'args' => ['jquery', 'http://a.invalid/static/lib/jquery.min.js'],
                'times' => 1,
            ]);

            \WP_Mock::wpFunction('wp_enqueue_script', [
                'args' => ['modernizr', 'http://a.invalid/static/lib/modernizr.min.js'],
                'times' => 1,
            ]);

            \WP_Mock::wpFunction('wp_enqueue_script', [
                'args' => ['main', 'http://a.invalid/static/main.min.js', ['jquery', 'modernizr'], '', true],
                'times' => 1,
            ]);

            \WP_Mock::wpFunction('wp_enqueue_style', [
                'args' => ['main', 'http://a.invalid/static/main.min.css'],
                'times' => 1,
            ]);

            $this->scripts->wpEnqueueScripts();
        });
    });

    describe('->wpPrintScripts()', function () {
        it('prints some elements tags directly', function () {
            \WP_Mock::wpFunction('get_stylesheet_directory_uri', [
                'args' => [],
                'return' => 'http://a.invalid/zzz',
            ]);
            ob_start();
            $this->scripts->wpPrintScripts();
            $result = ob_get_contents();
            ob_end_clean();
            expect(preg_match_all("/<meta .*>/", $result))->to->equal(1);
            expect(preg_match_all("/<link .*>/", $result))->to->equal(2);
        });
    });
});
