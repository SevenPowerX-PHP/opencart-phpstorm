<?php
class Response {
    /**
     * @param string $header
     */
	public function addHeader($header) {}

    /**
     * @param string $url
     * @param int $status
     */
	public function redirect($url, $status = 302) {}

    /**
     * @param int $level
     */
	public function setCompression($level) {}

    /**
     * @return string
     */
	public function getOutput() {}

    /**
     * @param string $output
     */
	public function setOutput($output) {}

    /**
     * @return echo
     */
	public function output() {}
}
