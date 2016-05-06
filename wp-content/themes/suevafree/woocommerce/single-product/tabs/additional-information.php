<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional Information', 'suevafree' ) );

?>

<?php if ( $heading ): ?>
	<h3 class="additional_information_title"><?php echo $heading; ?></h3>
<?php endif; ?>

<?php $product->list_attributes(); ?>
