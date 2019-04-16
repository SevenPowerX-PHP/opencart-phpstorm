<?php
class Session {
    /**
     * @var array
     */
	public $data = array();

    /**
     * @param string $adaptor
     * @param string $registry
     */
	public function __construct($adaptor, $registry = '') {}

    /**
     * @return string
     */
	public function getId() {}

    /**
     * @param string $session_id
     * @return string
     */
	public function start($session_id = '') {}

	public function close() {}

	public function __destroy() {}
}
