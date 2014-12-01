<?php

namespace org\sdl;

use org\sdl\video\SDLSurface;
/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 01.12.2014
 * @namespace org\sdl
 * @package org\sdl
 *
 */
class SDLWindow {
	
	/**
	 * Sets the window title and icon name.
	 * 
	 * @param string $title
	 * @param string $icon
	 */
	public static function setCaption($title = null, $icon = null) {
		SDL_WM_SetCaption($title, $icon);
	}
	
	/**
	 * 
	 * @param SDLSurface $surface
	 * @param boolean $save_mode
	 * @throws \Exception
	 * @return integer
	 */
	public static function toggleFullscreen(SDLSurface $surface, $save_mode = true) {
		if($save_mode) {
			$flags = $surface->flags(); /* Save the current flags in case toggling fails */
			$surface = SDLVideo::setVideoMode(0, 0, 0, $flags ^ SDLVideo::FULLSCREEN); /*Toggles FullScreen Mode */
			if($surface === null) {
				$surface = SDL_SetVideoMode(0, 0, 0, $flags); /* If toggle FullScreen failed, then switch back */
			}
			if($surface === null) {
				throw new \Exception("Error while switching to fullscreen: ".SDLGeneral::getError());
			}
			
			return 0;
		} else {
			return (integer) SDL_WM_ToggleFullScreen($surface);
		}
	}
	
}

?>