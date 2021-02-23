# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

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
