<?php
namespace org\sdl;
/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 25.11.2014
 * @namespace org\sdl
 * @package org\sdl
 *
 */
class SDLSurface {
	
	const ANYFORMAT = SDL_ANYFORMAT;
	
	/**
	 * 
	 * @var \SDL_Surface
	 */
	protected $surface;
	
	
	/**
	 * 
	 * @param \SDL_Surface $surface
	 */
	public function __construct($surface) {
		$this->surface = $surface;
	}
	/**
	 * 
	 * @return SDL_Surface
	 */
	public function get() {
		return $this->surface;
	}
	
}
?>
