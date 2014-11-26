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
	 * @param \SDL_Rect $pixelFormat
	 */
	public function __construct($rect = null) {
		if($rect === null) {
			$this->rect = \SDL_Rect();
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
	
}

?>
