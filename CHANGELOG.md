# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v0.5.1] - 2024-08-08

### Changed
- Use NPM scripts rather than Grunt
- Use a generic email for the author listed in composer.json

## [v0.5.0] - 2022-02-15

### Added
- Search form in header nav
- Search results template
- Grunt task option to retain accessible attributes for SVGs when compiled
- theme.json file
- Block editor SASS files
- Block editor JS files
- Aspect Ratio helper mixin
- Word Wrap helper mixin
- Font-face helper mixin
- Shade/Tint colour helper functions

### Changed
- CI migrated from Travis to GitHub actions
- Make base typography apply across the theme more generically
- Adds `blockquote` styling which inherits the `.govuk-inset-text` class
- Restructure Sass partials to mirror structure and intent of GOV.UK Frontend
- Widen page width to `1200px`

## [v0.4.1] - 2021-08-11

### Changed
- Migrated from node-sass to dart-sass
- Moved `<head>` content to a partial, so it can be over-ridden in a child theme, without needing to over-ride the whole layout template.

## [v0.4.0] - 2021-06-10

### Added
- All hardcoded text is available for internationalization, using the 'govuk-theme' text domain

### Changed
- The layout template uses WordPress' `language_attributes()` function to generate its html `lang` attribute, rather than the attribute being hardcoded as `en`.
- Fixed missing closing bracket on "article" tag in the article-list-item partial.

## [v0.3.0] - 2021-03-16

### Changed
- Use standard core functions for pagination, rather than custom class

## [v0.2.1] - 2021-03-11

### Removed
- Superfluous meta tag and favicons that were printed directly into the page head, and could not be over-written.

## [v0.2.0] - 2021-02-23

### Added
- Default table block receives govuk styling
- Breadcrumbs
- Customisable header & footer
- `govuk_theme_class` filter wherever govuk- prefixed classes are applied

### Removed
- Comments template
- Analytics class
- Plugin dependency check class

### Changed
- Tests migrated from Peridot to Kahlan
- HTML head output tidied
- JS & CSS assets paths set via `get_template_directory_uri()`, so they'll work in child themes too

## [0.1.1] - 2020-05-26

### Changed
- WP_Mock updated to v0.3.0
- Tests refactored to make them less brittle

# [Earlier Releases]

Releases before `0.1.1` predate this changelog.
