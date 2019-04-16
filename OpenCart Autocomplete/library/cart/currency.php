<?php
namespace Cart;
class Currency {
    /**
     * @param \Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param float|int $number
     * @param string $currency
     * @param string $value
     * @param bool $format
     * @return string
     */
	public function format($number, $currency, $value = '', $format = true) {}

    /**
     * @param int $value
     * @param string $from
     * @param string $to
     * @return float|int
     */
	public function convert($value, $from, $to) {}

    /**
     * @param string $currency
     * @return int
     */
	public function getId($currency) {}

    /**
     * @param string $currency
     * @return string
     */
	public function getSymbolLeft($currency) {}

    /**
     * @param string $currency
     * @return string
     */
	public function getSymbolRight($currency) {}

    /**
     * @param string $currency
     * @return int
     */
	public function getDecimalPlace($currency) {}

    /**
     * @param string $currency
     * @return float|int
     */
	public function getValue($currency) {}

    /**
     * @param string $currency
     * @return bool
     */
	public function has($currency) {}
}
