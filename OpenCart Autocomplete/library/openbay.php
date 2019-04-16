<?php
final class Openbay {
	public $installed_markets = array();
	public function __construct($registry) {}
	public function __get($name) {}
	public function log($data, $write = true) {}
	public function encrypt($value, $key, $iv, $json = true) {}
	public function decrypt($value, $key, $iv, $json = true) {}
	public function getInstalledMarkets() {}
	public function putStockUpdateBulk($product_id_array, $end_inactive = false) {}
	public function testDbColumn($table, $column) {}
	public function testDbTable($table) {}
	public function splitName($name) {}
	public function getTaxRates($tax_class_id) {}
	public function getTaxRate($class_id) {}
	public function getZoneId($name, $country_id) {}
    public function newOrderAdminNotify($order_id, $order_status_id) {}
	public function orderDelete($order_id) {}
	public function getProductModelNumber($product_id, $sku = null) {}
	public function getProductTaxClassId($product_id) {}
	public function addonLoad($addon) {}
	public function getUserByEmail($email) {}
	public function getProductOptions($product_id) {}
	public function getOrderProducts($order_id) {}
	public function getOrderProductVariant($order_id, $product_id, $order_product_id) {}
}
