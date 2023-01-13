# GOV.UK Design System WordPress theme

A WordPress theme built by [dxw](https://dxw.com) that implements the [GOV.UK Design System](https://design-system.service.gov.uk/), via [GOV.UK Frontend](https://github.com/alphagov/govuk-frontend).

Currently, the theme applies v3 of GOV.UK Frontend.

## Developing the theme

Install the dependencies:

```
npm install
composer install
```

Compile the assets:

```
npm run build
```

Run the tests:

```
vendor/bin/kahlan spec
```

Run the linter:

```
vendor/bin/php-cs-fixer fix
```

## Extending the theme

This is intended to be used as a parent theme, which is then extended/re-skinned via a child theme.

You can use the `govuk_theme_class` filter to help with this. It is applied to all `govuk-` prefixed classes, so you can use this to either append a custom class to specific instances where those classes are applied, append a custom class to all instances, or replace those classes completely.

You can also replace any of the individual template components, up to and including the overall layout template, in the child theme as required.

Note that the GDS Transport theme is only licensed for use on gov.uk domains, so if you're developing a theme for use elsewhere, you'll need to replace it with a suitable alternative.
