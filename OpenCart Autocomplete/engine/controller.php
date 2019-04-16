<?php
abstract class Controller extends OpenCart {
    /**
     * @param Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param string $key
     * @return mixed
     */
	public function __get($key) {}

    /**
     * @param string $key
     * @param mixed $value
     */
	public function __set($key, $value) {}
}