<?php
namespace Cart;
class User {
    /**
     * User constructor.
     * @param \Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
	public function login($username, $password) {}

	public function logout() {}

    /**
     * @param string $key
     * @param string $value
     * @return bool
     */
	public function hasPermission($key, $value) {}

    /**
     * @return bool
     */
	public function isLogged() {}

    /**
     * @return int
     */
	public function getId() {}

    /**
     * @return string
     */
	public function getUserName() {}

    /**
     * @return int
     */
	public function getGroupId() {}
}
