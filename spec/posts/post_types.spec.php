<?php

describe(\Dxw\GovukTheme\Posts\PostTypes::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->postTypes = new \Dxw\GovukTheme\Posts\PostTypes();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->postTypes)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        xit('registers any custom post types', function () {
            $this->postTypes->register();
        });
    });
});
