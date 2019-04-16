<?php
class Document {
    /**
     * @param string $title
     */
	public function setTitle($title) {}

    /**
     * @return string
     */
	public function getTitle() {}

    /**
     * @param string $description
     */
	public function setDescription($description) {}

    /**
     * @return string
     */
	public function getDescription() {}

    /**
     * @param string $keywords
     */
	public function setKeywords($keywords) {}

    /**
     * @return string
     */
	public function getKeywords() {}

    /**
     * @param string $href
     * @param string $rel
     */
	public function addLink($href, $rel) {}

    /**
     * @return array
     */
	public function getLinks() {}

    /**
     * @param string $href
     * @param string $rel
     * @param string $media
     */
	public function addStyle($href, $rel = 'stylesheet', $media = 'screen') {}

    /**
     * @return array
     */
	public function getStyles() {}

    /**
     * @param string $href
     * @param string $postion
     */
	public function addScript($href, $postion = 'header') {}

    /**
     * @param string $postion
     * @return array
     */
	public function getScripts($postion = 'header') {}
}
