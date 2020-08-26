<?php

describe(\Dxw\GovukTheme\Theme\Media::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->media = new \Dxw\GovukTheme\Theme\Media();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('is registrable', function () {
        expect($this->media)->to->be->an->instanceof(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        it('registers thumbnail sizes', function () {
            \WP_Mock::wpFunction('set_post_thumbnail_size', [
                'args' => [\WP_Mock\Functions::type('int'), \WP_Mock\Functions::type('int'), \WP_Mock\Functions::type('bool')],
                'times' => 1
            ]);

            \WP_Mock::wpFunction('add_image_size', [
                'args' => [\WP_Mock\Functions::type('string'), \WP_Mock\Functions::type('int'), \WP_Mock\Functions::type('int'), \WP_Mock\Functions::type('bool')],
                'times' => 2
            ]);

            $this->media->register();
        });
    });
});
