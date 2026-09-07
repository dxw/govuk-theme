<?php

describe(\Dxw\GovukTheme\Posts\PostTypes::class, function () {
	beforeEach(function () {
		$this->postTypes = new \Dxw\GovukTheme\Posts\PostTypes();
	});

	afterEach(function () {
	});

	it('is registrable', function () {
		expect($this->postTypes)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
	});

	describe('->register()', function () {
		xit('registers any custom post types', function () {
			$this->postTypes->register();
		});
	});
});
