# Changelog

The changelog describes what have been "Added", "Changed", "Removed" and "Deprecated" between versions. 

## 1.1.0

First release as `wearesho-team/effective-interest-rate`. The package replaces `nyholm/effective-interest-rate`
and keeps its namespace, so it installs as a drop-in replacement.

- Explicit nullable type for the `Calculator` constructor argument, which fixes the "implicitly nullable" deprecation on PHP 8.4.
- PHP 8.4 is the minimum version.
- Tests run on PHPUnit 13 in GitHub Actions on PHP 8.4 and 8.5, with a PSR-12 lint. Travis CI, StyleCI and Scrutinizer
  are gone.

## 1.0.0

- First release. 
