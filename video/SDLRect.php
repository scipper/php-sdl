<?php

namespace org\sdl\video;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 26.11.2014
 * @namespace org\sdl\video
 * @package org\sdl\video
 *
 */
class SDLRect {
	
	/**
	 * 
	 * @var \SDL_Rect
	 */
	protected $rect;
	
	
	/**
	 * 
	 * @param \SDL_Rect $rect
	 */
	public function __construct($rect = null) {
		if($rect === null) {
			$this->rect = new \SDL_Rect();
		} else {
			$this->rect = $rect;
		}
	}
	
	/**
	 * 
	 * @return SDL_Rect
	 */
	public function get() {
		return $this->rect;
	}
	
	/**
	 * 
	 * @param integer $h
	 */
	public function setH($h) {
		$this->rect["h"] = $h;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function h() {
		return $this->rect["h"];
	}
	
	/**
	 * 
	 * @param integer $w
	 */
	public function setW($w) {
		$this->rect["w"] = $w;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function w() {
		return $this->rect["w"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function x() {
		return $this->rect["x"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function y() {
		return $this->rect["y"];
	}
	
}

?>
