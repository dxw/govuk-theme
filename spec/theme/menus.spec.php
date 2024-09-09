<?php

namespace Dxw\GovukTheme\Theme;

use Kahlan\Arg;

describe(\Dxw\GovukTheme\Theme\Menus::class, function () {
	beforeEach(function () {
		$this->menus = new Menus();
	});

	afterEach(function () {
	});

	it('is registrable', function () {
		expect($this->menus)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
	});

	describe('->register()', function () {
		it('registers nav menus', function () {
			allow('register_nav_menu')->toBeCalled()->andReturn(null);
			expect('register_nav_menu')->toBeCalled()->times(2);
			$this->menus->register();
		});
	});
});
