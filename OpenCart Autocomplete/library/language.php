<?php
class Language {
    /**
     * @var array
     */
	public $data = array();

    /**
     * @param string $directory
     */
	public function __construct($directory = '') {}

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
     * @return string
     */
	public function all() {}

    /**
     * @param string $filename
     * @param string $key
     * @return array
     */
	public function load($filename, $key = '') {}
}
