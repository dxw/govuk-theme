<?php

describe(\Dxw\GovukTheme\Theme\TitleTag::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->titleTag = new \Dxw\GovukTheme\Theme\TitleTag();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->titleTag)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('adds support for title tag', function () {
            \WP_Mock::wpFunction('add_theme_support', [
                'args' => ['title-tag'],
                'times' => 1,
            ]);
            $this->titleTag->register();
        });
    });
});
