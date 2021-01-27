<?php

$registrar->addInstance(new \Dxw\Iguana\Theme\Helpers());
$registrar->addInstance(new \Dxw\Iguana\Theme\LayoutRegister(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(new \Dxw\Iguana\Extras\UseAtom());

// Libraries and support code
$registrar->addInstance(new \Dxw\GovukTheme\Lib\Whippet\TemplateTags(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));

// Theme behaviour, media, assets and template tags
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Scripts(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Media());
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Menus());
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Widgets());
$registrar->addInstance(new \Dxw\GovukTheme\Theme\TitleTag());
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Pagination(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(new \Dxw\GovukTheme\Theme\Tables());
$registrar->addInstance(new \Dxw\GovukTheme\Theme\WpHead());

// Post types and additional fields
$registrar->addInstance(new \Dxw\GovukTheme\Posts\PostTypes());
$registrar->addInstance(new \Dxw\GovukTheme\Posts\CustomFields());
