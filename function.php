add_filter( 'woocommerce_get_availability_text', 'filter_product_availability_text', 10, 2 );
function filter_product_availability_text( $availability_text, $product ) {
    // Check if product status is on backorder
    if ($product->get_stock_status() === 'onbackorder') {
        $availability_text = __( 'Your New Text Here', 'your-text-domain' );
    }
    return $availability_text;
}
