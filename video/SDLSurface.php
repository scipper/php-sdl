<?php
namespace org\sdl\video;
/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 25.11.2014
 * @namespace org\sdl\video
 * @package org\sdl\video
 *
 */
class SDLSurface {
	
	/**
	 * 
	 * @var \SDL_Surface
	 */
	protected $surface;
	
	
	/**
	 * 
	 * @param \SDL_Surface $surface
	 */
	public function __construct($surface = null) {
		if($surface === null) {
			$this->surface = \SDL_Surface();
		} else {
			$this->surface = $surface;
		}
	}

	/**
	 * 
	 * @return SDL_Surface
	 */
	public function get() {
		return $this->surface;
	}

	/**
	 * 
	 * @param SDLSurface $surface
	 */
	public function set(SDLSurface $surface) {
		$this->surface = $surface->get();
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function flags() {
		return $this->surface["flags"];
	}
	
	/**
	 * 
	 * @return \org\sdl\video\SDLPixelFormat
	 */
	public function pixelFormat() {
		return new SDLPixelFormat($this->surface["format"]);
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function w() {
		return $this->surface["w"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function h() {
		return $this->surface["h"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function pitch() {
		return $this->surface["pitch"];
	}
	
	/**
	 * @TODO implement Pixel data
	 * @param Pixel Data $pixels
	 */
	public function pixels($pixels) {
		$this->surface["pixels"] = $pixels;
	}
	
	/**
	 * 
	 * @return \org\sdl\video\SDLRect
	 */
	public function clipRect() {
		return new SDLRect($this->surface["clip_rect"]);
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function refcount() {
		return $this->surface["refcount"];
	}
	
}
?>
