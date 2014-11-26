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
class SDLPixelFormat {
	
	/**
	 * 
	 * @var \SDL_PixelFormat
	 */
	protected $pixelFormat;
	
	
	/**
	 * 
	 * @param \SDL_PixelFormat $pixelFormat
	 */
	public function __construct($pixelFormat) {
		$this->pixelFormat = $pixelFormat;
	}
	
	/**
	 * 
	 * @return SDL_PixelFormat
	 */
	public function get() {
		return $this->pixelFormat;
	}
	
}

?>
