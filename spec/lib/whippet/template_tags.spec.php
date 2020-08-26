<?php

describe(\Dxw\GovukTheme\Lib\Whippet\TemplateTags::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
        $this->helpersMock = Mockery::mock(\Dxw\Iguana\Theme\Helpers::class);
        $this->templateTags = new \Dxw\GovukTheme\Lib\Whippet\TemplateTags(
            $this->helpersMock
        );
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    describe('->w_template_title()', function () {
        xit('displays the title of the page', function () {
            $this->templateTags->w_template_title();
        });
    });
});
