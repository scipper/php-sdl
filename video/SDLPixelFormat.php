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
	public function __construct($pixelFormat = null) {
		if($pixelFormat === null) {
			$this->pixelFormat = \SDL_PixelFormat();
		} else {
			$this->pixelFormat = $pixelFormat;
		}
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
