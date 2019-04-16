<?php
class Action {
    /**
     * @param string $route
     */
	public function __construct($route) {}

    /**
     * @return string
     */
	public function getId() {}

    /**
     * @param Registry $registry
     * @param array $args
     * @return mixed
     */
	public function execute($registry, array $args = array()) {}
}
