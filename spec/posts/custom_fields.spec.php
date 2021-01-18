<?php

describe(\Dxw\GovukTheme\Posts\CustomFields::class, function () {
    beforeEach(function () {
        $this->customFields = new \Dxw\GovukTheme\Posts\CustomFields();
    });

    afterEach(function () {
    });

    it('is registrable', function () {
        expect($this->customFields)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
    });

    describe('->register()', function () {
        xit('registers any custom fields', function () {
            $this->customFields->register();
        });
    });
});
