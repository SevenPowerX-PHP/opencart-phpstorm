<?php
namespace Cart;
class Weight {
    /**
     * Weight constructor.
     * @param \Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param float|int $value
     * @param int $from
     * @param int $to
     * @return float|int
     */
	public function convert($value, $from, $to) {}

    /**
     * @param float|int $value
     * @param int $weight_class_id
     * @param string $decimal_point
     * @param string $thousand_point
     * @return string
     */
	public function format($value, $weight_class_id, $decimal_point = '.', $thousand_point = ',') {}

    /**
     * @param int $weight_class_id
     * @return string
     */
	public function getUnit($weight_class_id) {}
}
