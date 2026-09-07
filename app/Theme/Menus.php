<?php

namespace Dxw\GovukTheme\Theme;

class Menus implements \Dxw\Iguana\Registerable
{
	public function register()
	{
		register_nav_menu('header', 'Header Menu');
		register_nav_menu('footer', 'Footer Menu');
	}
}
