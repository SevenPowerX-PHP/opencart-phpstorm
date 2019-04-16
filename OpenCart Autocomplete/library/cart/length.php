<?php
namespace Cart;
class Length {
    /**
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
     * @param int $length_class_id
     * @param string $decimal_point
     * @param string $thousand_point
     * @return string
     */
	public function format($value, $length_class_id, $decimal_point = '.', $thousand_point = ',') {}

    /**
     * @param int $length_class_id
     * @return string
     */
	public function getUnit($length_class_id) {}
}
