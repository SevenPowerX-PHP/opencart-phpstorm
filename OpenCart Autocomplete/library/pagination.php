<?php
class Pagination {
    /**
     * @var int
     */
	public $total = 0;

    /**
     * @var int
     */
	public $page = 1;

    /**
     * @var int
     */
	public $limit = 20;

    /**
     * @var int
     */
	public $num_links = 8;

    /**
     * @var string
     */
	public $url = '';

    /**
     * @var string
     */
	public $text_first = '|&lt;';

    /**
     * @var string
     */
	public $text_last = '&gt;|';

    /**
     * @var string
     */
	public $text_next = '&gt;';

    /**
     * @var string
     */
	public $text_prev = '&lt;';

    /**
     * @return string
     */
	public function render() {}
}
