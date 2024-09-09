<?php

describe(\Dxw\GovukTheme\Theme\WpHead::class, function () {
	beforeEach(function () {
		$this->wpHead = new \Dxw\GovukTheme\Theme\WpHead();
	});

	afterEach(function () {
	});

	it('is registrable', function () {
		expect($this->wpHead)->toBeAnInstanceOf(\Dxw\Iguana\Registerable::class);
	});

	describe('->register()', function () {
		it('adds actions', function () {
			allow('add_action')->toBeCalled();
			expect('add_action')->toBeCalled()->once()->with('init', [$this->wpHead, 'init']);
			$this->wpHead->register();
		});
	});

	describe('->init()', function () {
		it('modifies the output of the WordPress head', function () {
			$actions = [
				['wp_head', 'print_emoji_detection_script', 7],
				['wp_print_styles', 'print_emoji_styles'],
				['admin_print_styles', 'print_emoji_styles'],
				['admin_print_scripts', 'print_emoji_detection_script'],
				['wp_head', 'rsd_link'],
				['wp_head', 'wp_generator'],
				['wp_head', 'wlwmanifest_link'],
				['wp_head', 'feed_links_extra', 3],
				['wp_head', 'start_post_rel_link', 10, 0],
				['wp_head', 'parent_post_rel_link', 10, 0],
				['wp_head', 'adjacent_posts_rel_link', 10, 0],
			];

			allow('remove_action')->toBeCalled();

			foreach ($actions as $args) {
				if (count($args) == 2) {
					list($a, $b) = $args;
					expect('remove_action')->toBeCalled()->once()->with($a, $b);
				}
				if (count($args) == 3) {
					list($a, $b, $c) = $args;
					expect('remove_action')->toBeCalled()->once()->with($a, $b, $c);
				}
				if (count($args) == 4) {
					list($a, $b, $c, $d) = $args;
					expect('remove_action')->toBeCalled()->once()->with($a, $b, $c, $d);
				}
			}
			$this->wpHead->init();
		});
	});
});
