<?php

describe(\Dxw\GovukTheme\Theme\Widgets::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->widgets = new \Dxw\GovukTheme\Theme\Widgets();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->widgets)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('initialises the widgets', function () {
            \WP_Mock::expectActionAdded('widgets_init', [$this->widgets, 'widgetsInit']);
            $this->widgets->register();
        });
    });

    describe('->widgetsInit()', function () {
        it('registers any widgets in the theme ', function () {
            \WP_Mock::wpFunction('__', [
                'return' => function ($a) {
                    return $a;
                }
            ]);

            \WP_Mock::wpFunction('register_sidebar', [
                'args' => [\WP_Mock\Functions::type('array')],
                'times' => 2,
            ]);

            $this->widgets->widgetsInit();
        });
    });
});
