<?php

namespace Dxw\GovukTheme\Blocks;

class BlockEditor implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        remove_theme_support('core-block-patterns');
    }
}
