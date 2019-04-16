<?php
class Event {
    /**
     * @param Registry $registry
     */
	public function __construct($registry) {}

    /**
     * @param string $trigger
     * @param Action $action
     * @param int $priority
     */
	public function register($trigger, Action $action, $priority = 0) {}

    /**
     * @param string $event
     * @param array $args
     */
	public function trigger($event, array $args = array()) {}

    /**
     * @param string $trigger
     * @param string $route
     */
	public function unregister($trigger, $route) {}

    /**
     * @param string $trigger
     */
	public function clear($trigger) {}
}
