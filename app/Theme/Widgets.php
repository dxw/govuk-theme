<?php

namespace Dxw\GovukTheme\Theme;

class Widgets implements \Dxw\Iguana\Registerable
{
	//
	// Register sidebars.
	//
	public function widgetsInit()
	{
		register_sidebar([
			'name' => __('Primary'),
			'id' => 'sidebar-primary',
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		]);

		register_sidebar([
			'name' => __('Footer'),
			'id' => 'sidebar-footer',
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		]);
	}

	public function register()
	{
		add_action('widgets_init', [$this, 'widgetsInit']);
	}
}
