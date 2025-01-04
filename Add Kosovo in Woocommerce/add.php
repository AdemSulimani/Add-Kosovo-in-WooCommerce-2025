<?php 
// Add Kosovo to WooCommerce countries
add_filter( 'woocommerce_countries', 'add_kosovo_to_woocommerce' );
function add_kosovo_to_woocommerce( $countries ) {
    $countries['XK'] = 'Kosovo';
    return $countries;
}

// Add states/counties for Kosovo
add_filter( 'woocommerce_states', 'add_kosovo_states' );
function add_kosovo_states( $states ) {
    $states['XK'] = array(
        'PR' => 'Pristina',
        'PE' => 'Peja',
        'GI' => 'Gjakova',
        'FE' => 'Ferizaj',
        'GN' => 'Gjilan',
        'MI' => 'Mitrovica',
    );
    return $states;
}

// Set Kosovo as the default country (optional)
add_filter( 'default_checkout_billing_country', 'set_default_billing_country' );
add_filter( 'default_checkout_shipping_country', 'set_default_shipping_country' );

function set_default_billing_country() {
    return 'XK'; // XK is the country code for Kosovo
}

function set_default_shipping_country() {
    return 'XK';
}


?>