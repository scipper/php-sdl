<?php 

namespace org\sdl\general;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 26.11.2014
 * @namespace org\sdl\general
 * @package org\sdl\general
 *
 */
class SDLError {
	
	/**
	 * 
	 * @param SDLErrorcode $errorcode
	 */
	public static function set($errorcode) {
		SDL_Error($errorcode);
	}
	
}

?>