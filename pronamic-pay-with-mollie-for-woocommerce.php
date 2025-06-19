<?php
/**
 * Plugin Name: Pronamic Pay with Mollie for WooCommerce
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-pay-with-mollie-for-woocommerce/
 * Description: Pronamic Pay plugin with Mollie for WooCommerce integration.
 *
 * Version: 1.6.0
 * Requires at least: 5.9
 * Requires PHP: 8.1
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-pay-with-mollie-for-woocommerce
 * Domain Path: /languages/
 *
 * Provides: wp-pay/core
 *
 * License: GPL-2.0-or-later
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-woocommerce
 *
 * WC requires at least: 8.0
 * WC tested up to: 8.0
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autoload.
 */
require_once __DIR__ . '/vendor/autoload_packages.php';

/**
 * Bootstrap.
 */
add_action(
	'plugins_loaded',
	function () {
		load_plugin_textdomain( 'pronamic-pay-with-mollie-for-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
	}
);

\Pronamic\WordPress\Pay\Plugin::instance(
	[
		'file'                 => __FILE__,
		'action_scheduler'     => __DIR__ . '/packages/woocommerce/action-scheduler/action-scheduler.php',
		'pronamic_service_url' => 'https://api.wp-pay.org/wp-json/pronamic-pay/v1/payments',
	]
);

\Pronamic\WooCommercePaymentGatewaysCountriesCondition\Plugin::instance()->setup();
\Pronamic\WooCommercePaymentGatewaysFees\Plugin::instance()->setup();
\Pronamic\WooCommerceGatewayOrderButtonText\Plugin::instance()->setup();

add_filter(
	'pronamic_pay_modules',
	function ( $modules ) {
		$modules[] = 'subscriptions';

		return $modules;
	}
);

add_filter(
	'pronamic_pay_plugin_integrations',
	function ( $integrations ) {
		$class = \Pronamic\WordPress\Pay\Extensions\WooCommerce\Extension::class;

		if ( ! array_key_exists( $class, $integrations ) ) {
			$integrations[ $class ] = new $class();
		}

		return $integrations;
	}
);

add_filter(
	'pronamic_pay_gateways',
	function ( $gateways ) {
		$gateways[] = new \Pronamic\WordPress\Pay\Gateways\Mollie\Integration(
			[
				'manual_url' => \__( 'https://www.pronamicpay.com/en/manuals/how-to-connect-mollie-to-wordpress-with-pronamic-pay/', 'pronamic-pay-with-mollie-for-woocommerce' ),
			]
		);

		return $gateways;
	}
);

/**
 * High Performance Order Storage.
 * 
 * @link https://github.com/pronamic/pronamic-payment-gateways-fees-for-woocommerce/issues/4
 * @link https://github.com/woocommerce/woocommerce/wiki/High-Performance-Order-Storage-Upgrade-Recipe-Book#declaring-extension-incompatibility
 */
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);
