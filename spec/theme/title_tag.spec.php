<?php

describe(\Dxw\GovukTheme\Theme\TitleTag::class, function () {
    beforeEach(function () {
        $this->titleTag = new \Dxw\GovukTheme\Theme\TitleTag();
    });

    afterEach(function () {
    });

    it('is registrable', function () {
        expect($this->titleTag)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('adds support for title tag', function () {
            allow('add_theme_support')->toBeCalled();
            expect('add_theme_support')->toBeCalled()->once()->with('title-tag');
            $this->titleTag->register();
        });
    });
});
