<?php
class Image {
    /**
     * @param string $file
     */
	public function __construct($file) {}

    /**
     * @return string
     */
	public function getFile() {}

    /**
     * @return array
     */
	public function getImage() {}

    /**
     * @return string
     */
	public function getWidth() {}

    /**
     * @return string
     */
	public function getHeight() {}

    /**
     * @return string
     */
	public function getBits() {}

    /**
     * @return string
     */
	public function getMime() {}

    /**
     * @param string $file
     * @param int $quality
     */
	public function save($file, $quality = 90) {}

    /**
     * @param int $width
     * @param int $height
     * @param string $default
     */
	public function resize($width = 0, $height = 0, $default = '') {}

    /**
     * @param string $watermark
     * @param string $position
     */
	public function watermark($watermark, $position = 'bottomright') {}

    /**
     * @param int $top_x
     * @param int $top_y
     * @param int $bottom_x
     * @param int $bottom_y
     */
	public function crop($top_x, $top_y, $bottom_x, $bottom_y) {}

    /**
     * @param int $degree
     * @param string $color
     */
	public function rotate($degree, $color = 'FFFFFF') {}
}
