<?php
namespace org\sdl;

use org\sdl\video\SDLSurface;
use org\sdl\video\SDLVideoInfo;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 24.11.2014
 * @namespace org\sdl
 * @package org\sdl
 *
 */
class SDLVideo {
	
	/**
	 * 
	 * @return SDL_Surface
	 */
	public static function getVideoSurface() {
		return new SDLSurface(SDL_GetVideoSurface());
	}
	
	/**
	 * 
	 * @return \org\sdl\SDLVideoInfo
	 */
	public static function getVideoInfo() {
		return new SDLVideoInfo();
	}
	
}
?>
