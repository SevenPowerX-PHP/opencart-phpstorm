<?php
class Mail {
    /**
     * @var string
     */
	public $parameter;

    /**
     * @param string $adaptor
     */
	public function __construct($adaptor = 'mail') {}

    /**
     * @param string $to
     */
	public function setTo($to) {}

    /**
     * @param string $from
     */
	public function setFrom($from) {}

    /**
     * @param string $sender
     */
	public function setSender($sender) {}

    /**
     * @param string $reply_to
     */
	public function setReplyTo($reply_to) {}

    /**
     * @param string $subject
     */
	public function setSubject($subject) {}

    /**
     * @param string $text
     */
	public function setText($text) {}

    /**
     * @param string $html
     */
	public function setHtml($html) {}

    /**
     * @param string $filename
     */
	public function addAttachment($filename) {}

	public function send() {}
}