<?php

use Kahlan\Plugin\Double;

describe(\Dxw\GovukTheme\Theme\Pagination::class, function () {
    beforeEach(function () {
    });

    afterEach(function () {
    });

    it('registers the function in the constructor', function () {
        $helpersMock = Double::instance(
            ['extends'=> '\Dxw\Iguana\Theme\Helpers']
        );
        expect($helpersMock)->toReceive('registerFunction')->once();
        $pagination = new \Dxw\GovukTheme\Theme\Pagination($helpersMock);
    });

    describe('->pagination()', function () {
        xit('adds custom pagination links', function () {
            $this->pagination->pagination();
        });
    });
});
