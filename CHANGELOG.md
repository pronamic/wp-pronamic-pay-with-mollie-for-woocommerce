# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.1.0] - 2024-02-08

### Added

- Added support for Mollie card field/component in WooCommerce legacy checkout. [#40](https://github.com/pronamic/wp-pronamic-pay-mollie/pull/40)

### Changed

- The HTTP timeout option is increased when connecting to Mollie via WP-Cron, WP-CLI or the Action Scheduler library. [pronamic/wp-pay-core#170](https://github.com/pronamic/wp-pay-core/issues/170)

### Fixed

- Fixed "Fatal error: Uncaught Error: Call to undefined function wc_get_order()" in source text if WooCommerce is not active. ([c4ccf37](https://github.com/pronamic/wp-pronamic-pay-woocommerce/commit/c4ccf3729ea994df23737181c5771abcaf8cd6c6))

### Composer

- Changed `wp-pay-extensions/woocommerce` from `v4.7.0` to `v4.7.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.7.1
- Changed `wp-pay-gateways/mollie` from `v4.8.1` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.9.0
- Changed `wp-pay/core` from `v4.14.3` to `v4.15.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.15.0

Full set of changes: [`1.0.1...1.1.0`][1.1.0]

[1.1.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.0.1...v1.1.0

## [1.0.1] - 2023-12-18

### Commits

- Added YouTube video. ([e3e2861](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/e3e2861ba5f0da04d8b2134e29ccfc1937c7a62c))

### Composer

- Changed `woocommerce/action-scheduler` from `3.7.0` to `3.7.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.1
- Changed `wp-pay-extensions/woocommerce` from `v4.6.3` to `v4.7.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.7.0
- Changed `wp-pay/core` from `v4.14.2` to `v4.14.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.3

Full set of changes: [`1.0.0...1.0.1`][1.0.1]

[1.0.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.0.0...v1.0.1

## [1.0.0] - 2023-06-06

- First release.

[1.0.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/releases/tag/v1.0.0
