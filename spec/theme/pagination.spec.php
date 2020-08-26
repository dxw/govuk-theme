<?php

describe(\Dxw\GovukTheme\Theme\Pagination::class, function () {
    beforeEach(function () {
        \WP_Mock::setUp();
    });

    afterEach(function () {
        \WP_Mock::tearDown();
    });

    it('registers the function in the constructor', function () {
        $helpersMock = Mockery::mock(\Dxw\Iguana\Theme\Helpers::class);
        $helpersMock->shouldReceive('registerFunction')->once();
        $pagination = new \Dxw\GovukTheme\Theme\Pagination($helpersMock);
    });

    describe('->pagination()', function () {
        xit('adds custom pagination links', function () {
            $this->pagination->pagination();
        });
    });
});
