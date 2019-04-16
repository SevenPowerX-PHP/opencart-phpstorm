<?php
namespace Cart;
final class Tax {
    /**
     * Tax constructor.
     * @param \Registry $registry
     */
	public function __construct($registry) {}

	public function unsetRates() {}

    /**
     * @param int $country_id
     * @param int $zone_id
     */
	public function setShippingAddress($country_id, $zone_id) {}

    /**
     * @param int $country_id
     * @param int $zone_id
     */
	public function setPaymentAddress($country_id, $zone_id) {}

    /**
     * @param int $country_id
     * @param int $zone_id
     */
	public function setStoreAddress($country_id, $zone_id) {}

    /**
     * @param float|int $value
     * @param int $tax_class_id
     * @param bool $calculate
     * @return float|int
     */
	public function calculate($value, $tax_class_id, $calculate = true) {}

    /**
     * @param float|int $value
     * @param int $tax_class_id
     * @return float|int
     */
	public function getTax($value, $tax_class_id) {}

    /**
     * @param int $tax_rate_id
     * @return bool
     */
	public function getRateName($tax_rate_id) {}

    /**
     * @param float|int $value
     * @param int $tax_class_id
     * @return array
     */
	public function getRates($value, $tax_class_id) {}
}
