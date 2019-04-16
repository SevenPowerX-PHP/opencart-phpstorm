<?php
class Squareup {
	const API_URL = 'https://connect.squareup.com';
	const API_VERSION = 'v2';
	const ENDPOINT_ADD_CARD = 'customers/%s/cards';
	const ENDPOINT_AUTH = 'oauth2/authorize';
	const ENDPOINT_CAPTURE_TRANSACTION = 'locations/%s/transactions/%s/capture';
	const ENDPOINT_CUSTOMERS = 'customers';
	const ENDPOINT_DELETE_CARD = 'customers/%s/cards/%s';
	const ENDPOINT_GET_TRANSACTION = 'locations/%s/transactions/%s';
	const ENDPOINT_LOCATIONS = 'locations';
	const ENDPOINT_REFRESH_TOKEN = 'oauth2/clients/%s/access-token/renew';
	const ENDPOINT_REFUND_TRANSACTION = 'locations/%s/transactions/%s/refund';
	const ENDPOINT_TOKEN = 'oauth2/token';
	const ENDPOINT_TRANSACTIONS = 'locations/%s/transactions';
	const ENDPOINT_VOID_TRANSACTION = 'locations/%s/transactions/%s/void';
	const PAYMENT_FORM_URL = 'https://js.squareup.com/v2/paymentform';
	const SCOPE = 'MERCHANT_PROFILE_READ PAYMENTS_READ SETTLEMENTS_READ CUSTOMERS_READ CUSTOMERS_WRITE';
	const VIEW_TRANSACTION_URL = 'https://squareup.com/dashboard/sales/transactions/%s/by-unit/%s';
	const SQUARE_INTEGRATION_ID = 'sqi_65a5ac54459940e3600a8561829fd970';
	public function __construct($registry) {}
	public function api($request_data) {}
	public function verifyToken($access_token) {}
	public function authLink($client_id) {}
	public function fetchLocations($access_token, &$first_location_id) {}
	public function exchangeCodeForAccessToken($code) {}
	public function debug($text) {}
	public function refreshToken() {}
	public function addCard($square_customer_id, $card_data) {}
	public function deleteCard($square_customer_id, $card) {}
	public function addLoggedInCustomer() {}
	public function addTransaction($data) {}
	public function getTransaction($location_id, $transaction_id) {}
	public function captureTransaction($location_id, $transaction_id) {}
	public function voidTransaction($location_id, $transaction_id) {}
	public function refundTransaction($location_id, $transaction_id, $reason, $amount, $currency, $tender_id) {}
	public function lowestDenomination($value, $currency) {}
	public function standardDenomination($value, $currency) {}
}