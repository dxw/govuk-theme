<?php

describe(\Dxw\GovukTheme\Theme\Menus::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->menus = new \Dxw\GovukTheme\Theme\Menus();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->menus)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('registers nav menus', function () {
            \WP_Mock::wpFunction('register_nav_menu', [
                'args' => [\WP_Mock\Functions::type('string'), \WP_Mock\Functions::type('string')],
                'times' => 2
            ]);

            $this->menus->register();
        });
    });
});
