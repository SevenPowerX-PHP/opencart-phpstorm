<?php
namespace Cart;
class Customer {
    /**
     * @param \Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param string $email
     * @param string $password
     * @param bool $override
     * @return bool
     */
	public function login($email, $password, $override = false) {}

	public function logout() {}

    /**
     * @return bool
     */
	public function isLogged() {}

    /**
     * @return string
     */
	public function getId() {}

    /**
     * @return string
     */
	public function getFirstName() {}

    /**
     * @return string
     */
	public function getLastName() {}

    /**
     * @return string
     */
	public function getGroupId() {}

    /**
     * @return string
     */
	public function getEmail() {}

    /**
     * @return string
     */
	public function getTelephone() {}

    /**
     * @return string
     */
	public function getNewsletter() {}

    /**
     * @return string
     */
	public function getAddressId() {}

    /**
     * @return string
     */
	public function getBalance() {}

    /**
     * @return string
     */
	public function getRewardPoints() {}
}
