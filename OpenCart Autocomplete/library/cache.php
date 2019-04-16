<?php
class Cache {
    /**
     * @param object $adaptor
     * @param int $expire
     */
	public function __construct($adaptor, $expire = 3600) {}

    /**
     * @param string $key
     * @return string
     */
	public function get($key) {}

    /**
     * @param string $key
     * @param string $value
     */
	public function set($key, $value) {}

    /**
     * @param string $key
     */
	public function delete($key) {}
}
