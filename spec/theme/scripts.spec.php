<?php

describe(\Dxw\GovukTheme\Theme\Scripts::class, function () {
    beforeEach(function () {
        allow('esc_url')->toBeCalled()->andRun(function ($a) {
            return '_'.$a.'_';
        });
        $this->helpers = new \Dxw\Iguana\Theme\Helpers();
        $this->scripts = new \Dxw\GovukTheme\Theme\Scripts($this->helpers);
    });

    afterEach(function () {
    });

    it('is registrable', function () {
        expect($this->scripts)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('registers nav scripts', function () {
            allow('add_action')->toBeCalled();
            expect('add_action')->toBeCalled()->once()->with('wp_enqueue_scripts', [$this->scripts, 'wpEnqueueScripts']);
            expect('add_action')->toBeCalled()->once()->with('wp_print_scripts', [$this->scripts, 'wpPrintScripts']);

            $this->scripts->register();
        });
    });

    describe('->getAssetPath()', function () {
        it('gets the path of the assets', function () {
            allow('get_stylesheet_directory_uri')->toBeCalled()->andReturn('http://foo.bar.invalid/cat/dog');
            expect($this->scripts->getAssetPath('meow'))->toEqual('http://foo.bar.invalid/cat/static/meow');
        });
    });

    describe('->assetPath()', function () {
        it('echos the path of the assets', function () {
            allow('get_stylesheet_directory_uri')->toBeCalled()->andReturn('http://foo.bar.invalid/cat/dog');
            ob_start();
            $this->scripts->assetPath('meow');
            $result = ob_get_contents();
            ob_end_clean();
            expect($result)->toEqual('_http://foo.bar.invalid/cat/static/meow_');
        });
    });

    describe('->wpEnqueueScripts()', function () {
        it('enqueues some of the JavaScript files', function () {
            allow('get_stylesheet_directory_uri')->toBeCalled()->andReturn('http://a.invalid/zzz');

            allow('wp_deregister_script')->toBeCalled();

            expect('wp_deregister_script')->toBeCalled()->once()->with('jquery');

            allow('wp_enqueue_script')->toBeCalled();

            expect('wp_enqueue_script')->toBeCalled()->once()->with('jquery', 'http://a.invalid/static/lib/jquery.min.js');

            expect('wp_enqueue_script')->toBeCalled()->once()->with('modernizr', 'http://a.invalid/static/lib/modernizr.min.js');

            expect('wp_enqueue_script')->toBeCalled()->once()->with('main', 'http://a.invalid/static/main.min.js', ['jquery', 'modernizr'], '', true);

            allow('wp_enqueue_style')->toBeCalled();

            expect('wp_enqueue_style')->toBeCalled()->once()->with('main', 'http://a.invalid/static/main.min.css');

            $this->scripts->wpEnqueueScripts();
        });
    });

    describe('->wpPrintScripts()', function () {
        it('prints some elements tags directly', function () {
            allow('get_stylesheet_directory_uri')->toBeCalled()->andReturn('http://a.invalid/zzz');
            ob_start();
            $this->scripts->wpPrintScripts();
            $result = ob_get_contents();
            ob_end_clean();
            expect(preg_match_all("/<meta .*>/", $result))->toEqual(1);
            expect(preg_match_all("/<link .*>/", $result))->toEqual(2);
        });
    });
});
