<?php
namespace Cart;
class Cart {
    /**
     * @param \Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @return array
     */
	public function getProducts() {}

    /**
     * @param int $product_id
     * @param int $quantity
     * @param array $option
     * @param int $recurring_id
     */
	public function add($product_id, $quantity = 1, $option = array(), $recurring_id = 0) {}

    /**
     * @param int $cart_id
     * @param int $quantity
     */
	public function update($cart_id, $quantity) {}

    /**
     * @param int $cart_id
     */
	public function remove($cart_id) {}

	public function clear() {}

    /**
     * @return array
     */
	public function getRecurringProducts() {}

    /**
     * @return int
     */
	public function getWeight() {}

    /**
     * @return int
     */
	public function getSubTotal() {}

    /**
     * @return array
     */
	public function getTaxes() {}

    /**
     * @return float|int
     */
	public function getTotal() {}

    /**
     * @return int
     */
	public function countProducts() {}

    /**
     * @return int
     */
	public function hasProducts() {}

    /**
     * @return int
     */
	public function hasRecurringProducts() {}

    /**
     * @return bool
     */
	public function hasStock() {}

    /**
     * @return bool
     */
	public function hasShipping() {}

    /**
     * @return bool
     */
	public function hasDownload() {}
}
