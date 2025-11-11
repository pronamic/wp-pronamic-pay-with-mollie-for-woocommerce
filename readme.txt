=== Pronamic Pay with Mollie for WooCommerce ===
Contributors: pronamic
Tags: pronamic, pay, mollie, woo, woocommerce
Requires at least: 5.9
Tested up to: 6.8
Requires PHP: 8.2
Stable tag: 1.7.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Connect Mollie to WooCommerce with Pronamic Pay. This free plugin is all that you need to start selling with WooCommerce.

== Description ==

[Pronamic Pay](https://www.pronamicpay.com/) · [Pronamic](https://www.pronamic.eu/) · [GitHub](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce)

Connect Mollie to WooCommerce with Pronamic Pay. This free plugin is all that you need to start selling with WooCommerce. After onboarding with Mollie you can integrate all major payment methods in WooCommerce. Simply activate the desired payment methods and you can add them to your checkout.

https://youtu.be/eVwbLKr47iw

### Features

This plugin is developed from the idea that online payments should be easy. Some of the features:

- Easy install
- Support for most major payment methods
- Payment status pages
- Automatic payment status updates via Mollie webhooks and the WordPress REST API
- High quality support
- Built by Pronamic

### Recurring payments

The plugin supports Woo Subscriptions. So you can accept recurring payments with Mollie. Therefore you can set your own schedule for the recurring payments, like every day, 5 days, 1 week, 2 weeks, month or year.

### Payment methods per country

When you sell international it’s a good practise to offer local payment methods. Therefore you can set payment methods per country. Like Bancontact for Belgium and Giropay for Germany.

### Surcharging

You can set surcharging fees for payment methods. Please note that for most countries surcharging is not allowed for most payment methods.


### External services

This plugin uses a number of external services to initiate payments. These are documented below with a link to the service's Terms of Use.

#### Mollie API

This plugin provides the link between the forms plugin Ninja Forms and payment provider Mollie. To communicate with Mollie, this plugin connects to the Mollie API via [https://api.mollie.com/](https://api.mollie.com/). The documentation for the Mollie API can be found at [https://docs.mollie.com/](https://docs.mollie.com/), Mollie's user agreement can be found at [https://www.mollie.com/legal/user-agreement](https://www.mollie.com/legal/user-agreement). From your WordPress website, customer and payment data can be passed on to Mollie for setting up and processing payments.

### Pronamic Pay Premium

With a Pronamic Pay Premium license, you get access to exceptional support and a range of exclusive benefits that take your payment experience to the next level.

#### Premium support

- **Fast and expert help** from our team of specialists.
- **Priority treatment** for your support tickets.

#### Premium add-ons

- **Pronamic Pay Fundraising Add-On**
  Easily create online fundraising and crowdfunding campaigns.
- **Pronamic Pay Notification Add-On**
  Set up extensive notifications for payers and administrators.
- **Pronamic Pay WP All Export Add-On**
  Export all your payment data with a few clicks.

And much more!

Discover all the benefits of Pronamic Pay Premium at [https://www.pronamicpay.com/](https://www.pronamicpay.com/).

**Upgrade to Pronamic Pay Premium now and take advantage of all the benefits!**

== Installation ==

1. To install this plugin you can follow the WordPress documentation section "[Installing Plugins](https://wordpress.org/documentation/article/manage-plugins/#installing-plugins-1)".

== Screenshots ==

1. Payment Gateway Configurations
2. Edit Payment Gateway Configuration

== Changelog ==

<!-- Start changelog -->

### [1.7.3] - 2025-11-11

#### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.10` to `v5.0.12`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.12
- Changed `wp-pay-gateways/mollie` from `v4.16.2` to `v4.16.3`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.16.3

Full set of changes: [`1.7.2...1.7.3`][1.7.3]

[1.7.3]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.7.2...v1.7.3

### [1.7.2] - 2025-09-17

#### Changed

- Changed `automattic/jetpack-autoloader` from `v5.0.9` to `v5.0.10`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.10
- Changed `wp-pay-gateways/mollie` from `v4.16.1` to `v4.16.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.16.2
- Changed `wp-pay/core` from `v4.27.0` to `v4.27.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.27.1

Full set of changes: [`1.7.1...1.7.2`][1.7.2]

[1.7.2]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.7.1...v1.7.2

### [1.7.1] - 2025-08-26

#### Commits

- Fixed Mollie user agreement link ([b665532](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/b665532a4f3fd3a2f122b76f9abd213112b6fcd0))
- Removed "VIES VAT number validation", no longer used ([c26c644](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/c26c644a270315a0b2c71a4319e986844b8a76df))

#### Composer

- Changed `wp-pay-gateways/mollie` from `v4.16.0` to `v4.16.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.16.1

Full set of changes: [`1.7.0...1.7.1`][1.7.1]

[1.7.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.7.0...v1.7.1

### [1.7.0] - 2025-08-22

#### Composer

- Changed `php` from `>=8.1` to `>=8.2`.
- Changed `automattic/jetpack-autoloader` from `v5.0.7` to `v5.0.9`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.9
- Changed `pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce` from `v1.0.3` to `v1.0.4`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce/releases/tag/v1.0.4
- Changed `woocommerce/action-scheduler` from `3.9.2` to `3.9.3`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.3
- Changed `wp-pay-extensions/woocommerce` from `v4.12.1` to `v4.13.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.13.0
- Changed `wp-pay-gateways/mollie` from `v4.15.0` to `v4.16.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.16.0
- Changed `wp-pay/core` from `v4.26.0` to `v4.27.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.27.0

Full set of changes: [`1.6.0...1.7.0`][1.7.0]

[1.7.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.6.0...v1.7.0

### [1.6.0] - 2025-06-19

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.1.3` to `v5.0.7`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.7
- Changed `composer/installers` from `v2.3.0` to `v2.3.0`.
	Release notes: https://github.com/composer/installers/releases/tag/v2.3.0
- Changed `pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce` from `v1.0.2` to `v1.0.3`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce/releases/tag/v1.0.3
- Changed `pronamic/pronamic-payment-gateways-fees-for-woocommerce` from `v1.0.2` to `v1.0.3`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-fees-for-woocommerce/releases/tag/v1.0.3
- Changed `pronamic/pronamic-payment-gateways-order-button-text-for-woocommerce` from `v1.0.3` to `v1.0.4`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-order-button-text-for-woocommerce/releases/tag/v1.0.4
- Changed `woocommerce/action-scheduler` from `3.9.2` to `3.9.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.2
- Changed `wp-pay-extensions/woocommerce` from `v4.11.0` to `v4.12.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.12.1
- Changed `wp-pay-gateways/mollie` from `v4.14.1` to `v4.15.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.15.0
- Changed `wp-pay/core` from `v4.25.0` to `v4.26.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.26.0

Full set of changes: [`1.5.1...1.6.0`][1.6.0]

[1.6.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.5.1...v1.6.0

### [1.5.1] - 2025-02-25

#### Changed

- Improved Mollie error handling when updating subscription mandate. ([8f03de5](https://github.com/pronamic/wp-pronamic-pay-mollie/commit/8f03de511ccf3ebb0223919dd7fcf6185e4e9c3c))

#### Composer

- Changed `wp-pay-gateways/mollie` from `v4.14.0` to `v4.14.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.14.1

Full set of changes: [`1.5.0...1.5.1`][1.5.1]

[1.5.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.5.0...v1.5.1

### [1.5.0] - 2025-02-17

#### Changed

- Set WooCommerce order status on hold when processing scheduled subscription payment. ([bedd1fa](https://github.com/pronamic/wp-pronamic-pay-woocommerce/commit/bedd1fabefe3c816952fa81d33fb9d5a386647c3))
- Fixed early registration of payment methods for loading translations. ([75aed83](https://github.com/pronamic/wp-pay-core/commit/75aed831f46f32d1c5e01eced8b521fe8e331faf))
- Removed Mollie iDEAL issuers support for iDEAL 2.0 migration. ([eebbad1](https://github.com/pronamic/wp-pronamic-pay-mollie/commit/eebbad1ba21ec7d55862d40925efc1e1ea7035ef))

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.8` to `v3.1.3`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.1.3
- Changed `composer/installers` from `v2.2.0` to `v2.3.0`.
	Release notes: https://github.com/composer/installers/releases/tag/v2.3.0
- Changed `woocommerce/action-scheduler` from `3.8.0` to `3.9.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.2
- Changed `wp-pay-extensions/woocommerce` from `v4.9.1` to `v4.11.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.11.0
- Changed `wp-pay-gateways/mollie` from `v4.12.0` to `v4.14.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.14.0
- Changed `wp-pay/core` from `v4.20.0` to `v4.25.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.25.0

Full set of changes: [`1.4.1...1.5.0`][1.5.0]

[1.5.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.4.1...v1.5.0

### [1.4.1] - 2024-06-19

#### Commits

- Requires PHP: 8.1. ([f72599e](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/f72599e37f1c9bac5bd72f159feafa66c86b32b8))

#### Composer

- Changed `wp-pay-extensions/woocommerce` from `v4.9.0` to `v4.9.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.9.1
- Changed `wp-pay/core` from `v4.19.0` to `v4.20.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.20.0

Full set of changes: [`1.4.0...1.4.1`][1.4.1]

[1.4.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.4.0...v1.4.1

### [1.4.0] - 2024-06-12

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.7` to `v3.0.8`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.8
- Changed `wp-pay-extensions/woocommerce` from `v4.8.0` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.9.0
- Changed `wp-pay-gateways/mollie` from `v4.11.0` to `v4.12.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.12.0
- Changed `wp-pay/core` from `v4.18.0` to `v4.19.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.19.0

Full set of changes: [`1.3.0...1.4.0`][1.4.0]

[1.4.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.3.0...v1.4.0

### [1.3.0] - 2024-05-27

#### Composer

- Changed `php` from `>=8.0` to `>=8.1`.
- Changed `woocommerce/action-scheduler` from `3.7.4` to `3.8.0`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.8.0
- Changed `wp-pay-gateways/mollie` from `v4.10.3` to `v4.11.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.11.0
- Changed `wp-pay/core` from `v4.17.0` to `v4.18.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.18.0

Full set of changes: [`1.2.1...1.3.0`][1.3.0]

[1.3.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.2.1...v1.3.0

### [1.2.1] - 2024-05-15

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.4` to `v3.0.7`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.7
- Changed `woocommerce/action-scheduler` from `3.7.3` to `3.7.4`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.4
- Changed `wp-pay-gateways/mollie` from `v4.10.0` to `v4.10.3`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.10.3
- Changed `wp-pay/core` from `v4.16.0` to `v4.17.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.17.0

Full set of changes: [`1.2.0...1.2.1`][1.2.1]

[1.2.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.2.0...v1.2.1

### [1.2.0] - 2024-03-26

#### Commits

- Tested up to: 6.5. ([b5e36b9](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/b5e36b957d9b07dbd7e3332fbb41f0ef13b7b2e6))
- Reduce to max 5 tags. ([a31ebac](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/a31ebacc00cbf9a2f610b90c8a7d09b6752a3278))
- Removed Mollie signup link. ([217dd13](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/217dd13a635f29bf51a580ebcc7a12ab43af18ab))

#### Composer

- Changed `automattic/jetpack-autoloader` from `v2.12.0` to `v3.0.4`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.4
- Changed `pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce` from `v1.0.1` to `v1.0.2`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-countries-condition-for-woocommerce/releases/tag/v1.0.2
- Changed `pronamic/pronamic-payment-gateways-fees-for-woocommerce` from `v1.0.1` to `v1.0.2`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-fees-for-woocommerce/releases/tag/v1.0.2
- Changed `pronamic/pronamic-payment-gateways-order-button-text-for-woocommerce` from `v1.0.2` to `v1.0.3`.
	Release notes: https://github.com/pronamic/pronamic-payment-gateways-order-button-text-for-woocommerce/releases/tag/v1.0.3
- Changed `woocommerce/action-scheduler` from `3.7.1` to `3.7.3`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.3
- Changed `wp-pay-extensions/woocommerce` from `v4.7.1` to `v4.8.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.8.0
- Changed `wp-pay-gateways/mollie` from `v4.9.0` to `v4.10.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.10.0
- Changed `wp-pay/core` from `v4.15.0` to `v4.16.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.16.0

Full set of changes: [`1.1.0...1.2.0`][1.2.0]

[1.2.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.1.0...v1.2.0

### [1.1.0] - 2024-02-08

#### Added

- Added support for Mollie card field/component in WooCommerce legacy checkout. [#40](https://github.com/pronamic/wp-pronamic-pay-mollie/pull/40)

#### Changed

- The HTTP timeout option is increased when connecting to Mollie via WP-Cron, WP-CLI or the Action Scheduler library. [pronamic/wp-pay-core#170](https://github.com/pronamic/wp-pay-core/issues/170)

#### Fixed

- Fixed "Fatal error: Uncaught Error: Call to undefined function wc_get_order()" in source text if WooCommerce is not active. ([c4ccf37](https://github.com/pronamic/wp-pronamic-pay-woocommerce/commit/c4ccf3729ea994df23737181c5771abcaf8cd6c6))

#### Composer

- Changed `wp-pay-extensions/woocommerce` from `v4.7.0` to `v4.7.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.7.1
- Changed `wp-pay-gateways/mollie` from `v4.8.1` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.9.0
- Changed `wp-pay/core` from `v4.14.3` to `v4.15.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.15.0

Full set of changes: [`1.0.1...1.1.0`][1.1.0]

[1.1.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.0.1...v1.1.0

### [1.0.1] - 2023-12-18

#### Commits

- Added YouTube video. ([e3e2861](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/commit/e3e2861ba5f0da04d8b2134e29ccfc1937c7a62c))

#### Composer

- Changed `woocommerce/action-scheduler` from `3.7.0` to `3.7.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.1
- Changed `wp-pay-extensions/woocommerce` from `v4.6.3` to `v4.7.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.7.0
- Changed `wp-pay/core` from `v4.14.2` to `v4.14.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.3

Full set of changes: [`1.0.0...1.0.1`][1.0.1]

[1.0.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/compare/v1.0.0...v1.0.1

### [1.0.0] - 2023-06-06

- First release.

[1.0.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce/releases/tag/v1.0.0

<!-- End changelog -->

== Links ==

- [Pronamic Pay with Mollie for WooCommerce](https://www.pronamicpay.com/connections/mollie-for-woocommerce/)
- [Pronamic Pay manuals for Mollie](https://www.pronamicpay.com/manual-category/mollie/)
- [Pronamic](https://www.pronamic.eu/)
