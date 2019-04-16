<?php
class Proxy {
    /**
     * @param string $key
     * @return mixed
     */	
	public function __get($key) {}

    /**
     * @param string $key
	 * @param string $value
     */	
	public function __set($key, $value) {
		 $this->{$key} = $value;
	}

    /**
     * @param string $key
     * @param mixed $args
     * @return mixed
     */
	public function __call($key, $args) {}
}