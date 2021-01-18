<?php

use Kahlan\Plugin\Double;

describe(\Dxw\GovukTheme\Lib\Whippet\TemplateTags::class, function () {
    beforeEach(function () {
        $helpersMock = Double::instance(
            ['extends'=> '\Dxw\Iguana\Theme\Helpers']
        );
        $this->templateTags = new \Dxw\GovukTheme\Lib\Whippet\TemplateTags(
            $this->helpersMock
        );
    });

    afterEach(function () {
    });

    describe('->w_template_title()', function () {
        xit('displays the title of the page', function () {
            $this->templateTags->w_template_title();
        });
    });
});
