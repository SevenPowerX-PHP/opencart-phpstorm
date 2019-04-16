<?php
final class Router {
	/**
	 * @param Registry $route
	 */
	public function __construct($registry) {}

	/**
	 * @param Action $pre_action
	 */
	public function addPreAction(Action $pre_action) {}

	/**
	 * @param Action $action
	 * @param Action $error
	 */
	public function dispatch(Action $action, Action $error) {}

	/**
	 * @param Action $action
	 * @return Action
	 */
	private function execute(Action $action) {}
}
