<?php
class DB {
    /**
     * DB constructor.
     * @param string $adaptor
     * @param string $hostname
     * @param string $username
     * @param string $password
     * @param string $database
     * @param int $port
     */
	public function __construct($adaptor, $hostname, $username, $password, $database, $port = NULL) {}

    /**
     * @param string $sql
     * @return array
     */
	public function query($sql) {}

    /**
     * @param string $value
     * @return string
     */
	public function escape($value) {}

    /**
     * @return int
     */
	public function countAffected() {}

    /**
     * @return int
     */
	public function getLastId() {}

    /**
     * @return bool
     */
	public function connected() {}
}
