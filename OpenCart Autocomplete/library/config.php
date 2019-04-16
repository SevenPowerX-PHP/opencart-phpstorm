<?php
class Config {
    /**
     * @param $key
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
     * @return bool
     */
	public function has($key) {}

    /**
     * @param string $filename
     */
	public function load($filename) {}
}
