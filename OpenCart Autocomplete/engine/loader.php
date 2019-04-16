<?php
final class Loader {
    /**
     * @param Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param string $route
     * @param array $data
     * @return Controller
     */
	public function controller($route, $data = array()) {}

    /**
     * @param string $route
     * @return Model
     */
	public function model($route) {}

    /**
     * @param string $route
     * @param array $data
     * @return string
     */
	public function view($route, $data = array()) {}

    /**
     * @param string $route
     * @return Library
     */
	public function library($route) {}

    /**
     * @param string $route
     * @return object
     */
	public function helper($route) {}

    /**
     * @param string $route
     * @return array
     */
	public function config($route) {}

    /**
     * @param string $route
     * @param string $key
     * @return array
     */
	public function language($route, $key = '') {}
}
