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
class SDLVideoInfo {
	
	/**
	 * 
	 * @var \SDL_VideoInfo
	 */
	protected $videoInfo;
	
	
	/**
	 * 
	 */
	public function __construct() {
		$this->videoInfo = \SDL_VideoInfo();
	}
	
	/**
	 * 
	 * @return SDL_VideoInfo
	 */
	public function get() {
		return $this->videoInfo;
	}
	
	/**
	 * 
	 * @return \org\sdl\video\SDLPixelFormat
	 */
	public function vfmt() {
		return new SDLPixelFormat($this->videoInfo["vfmt"]);
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function currentW() {
		return $this->videoInfo["current_w"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function currentH() {
		return $this->videoInfo["current_h"];
	}
	
}

?>