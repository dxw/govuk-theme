<?php

use \Kahlan\Arg;

describe(\Dxw\GovukTheme\Theme\Widgets::class, function () {
    beforeEach(function () {
        $this->widgets = new \Dxw\GovukTheme\Theme\Widgets();
    });

    afterEach(function () {
    });

    it('is registrable', function () {
        expect($this->widgets)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('initialises the widgets', function () {
            allow('add_action')->toBeCalled();
            expect('add_action')->toBeCalled()->once()->with('widgets_init', [$this->widgets, 'widgetsInit']);
            $this->widgets->register();
        });
    });

    describe('->widgetsInit()', function () {
        it('registers any widgets in the theme ', function () {
            allow('__')->toBeCalled()->andRun(function ($a) {
                return $a;
            });

            allow('register_sidebar')->toBeCalled();
            expect('register_sidebar')->toBeCalled()->times(2)->with(Arg::toBeAn('array'));

            $this->widgets->widgetsInit();
        });
    });
});
