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
class SDLColor {
	
	/**
	 * 
	 * @var \SDL_Color
	 */
	protected $color;
	
	
	/**
	 * 
	 * @param \SDL_Color $color
	 */
	public function __construct($color = null) {
		if($color === null) {
			$this->color = \SDL_Color();
		} else {
			$this->color = $color;
		}
	}
	
	/**
	 * 
	 * @return SDL_Color
	 */
	public function get() {
		return $this->color;
	}
	
}

?>