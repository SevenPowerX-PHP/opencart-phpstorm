<?php
class Url {
    /**
     * @param string $url
     * @param string $ssl
     */
	public function __construct($url, $ssl = '') {}

    /**
     * @param object $rewrite
     */
	public function addRewrite($rewrite) {}

    /**
     * @param string $route
     * @param string $args
     * @param bool $secure
     */
	public function link($route, $args = '', $secure = false) {}
}
