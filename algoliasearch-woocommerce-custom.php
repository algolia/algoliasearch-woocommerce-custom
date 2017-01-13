<?php
/**
 * @wordpress-plugin
 * Plugin Name: Boilerplate to Customize the Algolia Search plugin for WooCommerce
 * Description: Boilerplate to help you in customizing the way Algolia plugin for WooCommerce behaves.
 * Author: Algolia
 * Author URI: https://www.algolia.com
 */

/**
 * IMPORTANT: Please uncomment the code snippets you want to use.
 */

// Enables the product search on every page as soon as you start typying.
// See: https://community.algolia.com/woocommerce/frequently-asked-questions.html#can-i-make-it-so-that-the-search-replaces-the-content-dynamically-on-every-page-

/*add_filter( 'algolia_wc_should_display_instantsearch', '__return_true' );*/

// Choose what attributes are displayed as filters.
// See: https://community.algolia.com/woocommerce/frequently-asked-questions.html#can-i-choose-the-attributes-that-are-available-in-the-filters-
/*add_filter( 'algolia_wc_attributes_for_faceting', function( $attributes ) {
    // **Edit the values of this array**
    // You should put a list of all attribute ids you wish to see in the filters.
    // they will be displayed in the order they are listed here.
    $attribute_ids_to_keep = array(
        10,
        8,
        15,
    );

    foreach ( $attributes as &$attribute ) {
        if ( ! in_array( $attribute['attribute_id'], $attribute_ids_to_keep, true ) ) {
            // Remove the attribute from the filters.
            $attribute['is_enabled'] = false;

        } else {
            // Add the attribute to the filters.
            $attribute['is_enabled'] = true;

            // Order the filter.
            $attribute['weight'] = array_search( $attribute['attribute_id'], $attribute_ids_to_keep, true );
        }
    }

    return $attributes;
} );*/

// Customize the look & feel by adding custom CSS rules to the `assets/css/styles.css` file.
/*add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'custom-algolia-woocommerce', plugin_dir_url( __FILE__ ) . 'assets/css/styles.css' );
}, 30 );*/
