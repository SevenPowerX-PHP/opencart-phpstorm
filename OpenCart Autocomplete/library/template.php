<?php
class Template {
    /**
     * @param string $adaptor
     */
	public function __construct($adaptor) {}

    /**
     * @param string $key
     * @param mixed $value
     */
	public function set($key, $value) {}

    /**
     * @param string $template
     * @param bool $cache
     */
	public function render($template, $cache = false) {}
}
