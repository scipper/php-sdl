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
class SDLPalette {
	
	/**
	 * 
	 * @var \SDL_Palette
	 */
	protected $palette;
	
	
	/**
	 * 
	 * @param \SDL_Palette $palette
	 */
	public function __construct($palette = null) {
		if($palette === null) {
			$this->palette = \SDL_Palette();
		} else {
			$this->palette = $palette;
		}
	}
	
	/**
	 * 
	 * @return SDL_Palette
	 */
	public function get() {
		return $this->palette;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function ncolors() {
		return $this->palette["ncolors"];
	}
	
	/**
	 * 
	 * @return multitype:\org\sdl\video\SDLColor
	 */
	public function colors() {
		$color = array();
		foreach($this->palette["colors"] as $c) {
			$color[] = new SDLColor($c);
		}
		return $color;
	}
	
}

?>