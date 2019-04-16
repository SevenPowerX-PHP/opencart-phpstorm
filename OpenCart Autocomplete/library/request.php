<?php
class Request {
    /**
     * @var array
     */
	public $get = array();

    /**
     * @var array
     */
	public $post = array();

    /**
     * @var array
     */
    public $request = array();

    /**
     * @var array
     */
    public $cookie = array();

    /**
     * @var array
     */
    public $files = array();

    /**
     * @var array
     */
	public $server = array();

	public function __construct() {}

    /**
     * @param array $data
     * @return array
     */
	public function clean($data) {}
}
