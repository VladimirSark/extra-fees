<?php
/**
 * Plugin Name: WP Woo Extra Fee Plugin
 * Description: Adds an extra fee if a customer adds products with different shipping classes to the cart.
 * Version: 1.0
 * Author: Your Name
 * Text Domain: wp-woo-extra-fee-plugin
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include the ExtraFee class
require_once plugin_dir_path( __FILE__ ) . 'includes/class-extra-fee.php';

// Initialize the plugin
function wp_woo_extra_fee_plugin_init() {
    $extra_fee = new ExtraFee();
    add_action( 'woocommerce_cart_calculate_fees', array( $extra_fee, 'add_extra_fee_to_cart' ) );
}
add_action( 'plugins_loaded', 'wp_woo_extra_fee_plugin_init' );
?>