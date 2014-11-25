<?php
namespace org\sdl;
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
		return SDL_GetVideoSurface();
	}
	
}
?>
