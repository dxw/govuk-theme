<?php

use Kahlan\Arg;

describe(\Dxw\GovukTheme\Theme\Media::class, function () {
	beforeEach(function () {
		$this->media = new \Dxw\GovukTheme\Theme\Media();
	});

	afterEach(function () {
	});

	it('is registrable', function () {
		expect($this->media)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
	});

	describe('->register()', function () {
		it('registers thumbnail sizes', function () {
			allow('set_post_thumbnail_size')->toBeCalled();
			expect('set_post_thumbnail_size')->toBeCalled()->once()->with(Arg::toBeAn('integer'), Arg::toBeAn('integer'), Arg::toBeA('boolean'));
			allow('add_image_size')->toBeCalled();
			expect('add_image_size')->toBeCalled()->times(2)->with(Arg::toBeA('string'), Arg::toBeAn('integer'), Arg::toBeAn('integer'), Arg::toBeA('boolean'));
			$this->media->register();
		});
	});
});
