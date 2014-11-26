<?php

namespace org\sdl;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 26.11.2014
 * @namespace org\sdl
 * @package org\sdl
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
	public function __construct($rect) {
		$this->rect = $rect;
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
