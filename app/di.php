<?php

$registrar->addInstance(\Dxw\Iguana\Theme\Helpers::class, new \Dxw\Iguana\Theme\Helpers());
$registrar->addInstance(\Dxw\Iguana\Theme\LayoutRegister::class, new \Dxw\Iguana\Theme\LayoutRegister(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(\Dxw\Iguana\Extras\UseAtom::class, new \Dxw\Iguana\Extras\UseAtom());

// Libraries and support code
$registrar->addInstance(\Dxw\GovukTheme\Lib\Whippet\TemplateTags::class, new \Dxw\GovukTheme\Lib\Whippet\TemplateTags(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));

// Theme behaviour, media, assets and template tags
$registrar->addInstance(\Dxw\GovukTheme\Theme\Scripts::class, new \Dxw\GovukTheme\Theme\Scripts(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(\Dxw\GovukTheme\Theme\Media::class, new \Dxw\GovukTheme\Theme\Media());
$registrar->addInstance(\Dxw\GovukTheme\Theme\Menus::class, new \Dxw\GovukTheme\Theme\Menus());
$registrar->addInstance(\Dxw\GovukTheme\Theme\Widgets::class, new \Dxw\GovukTheme\Theme\Widgets());
$registrar->addInstance(\Dxw\GovukTheme\Theme\Analytics::class, new \Dxw\GovukTheme\Theme\Analytics());
$registrar->addInstance(\Dxw\GovukTheme\Theme\TitleTag::class, new \Dxw\GovukTheme\Theme\TitleTag());
$registrar->addInstance(\Dxw\GovukTheme\Theme\Pagination::class, new \Dxw\GovukTheme\Theme\Pagination(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));

// Post types and additional fields
$registrar->addInstance(\Dxw\GovukTheme\Posts\PostTypes::class, new \Dxw\GovukTheme\Posts\PostTypes());
$registrar->addInstance(\Dxw\GovukTheme\Posts\CustomFields::class, new \Dxw\GovukTheme\Posts\CustomFields());

// Plugin dependency check - pass in any required plugins
$registrar->addInstance(\Dxw\GovukTheme\Theme\Plugins::class, new \Dxw\GovukTheme\Theme\Plugins([
//    'advanced-custom-fields/acf.php', // Path to main plugin file
]));
