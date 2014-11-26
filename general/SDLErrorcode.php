<?php
namespace org\sdl\general;
/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 24.11.2014
 * @namespace org\sdl\general
 * @package org\sdl\general
 *
 */
class SDLErrorcode {
	
	/**
	 * Out of memory
	 */
	const ENOMEM = SDL_ENOMEM;
	
	/**
	 * Error reading from datastream
	 */
	const EFREAD = SDL_EFREAD;
	
	/**
	 * Error writing to datastream
	 */
	const EFWRITE = SDL_EFWRITE;
	
	/**
	 * Error seeking in datastream
	 */
	const EFSEEK = SDL_EFSEEK;
	
	/**
	 * Unknown SDL error
	 */
	const UNSUPPORTED = SDL_UNSUPPORTED;
	
	/**
	 * Unknown SDL error
	 */
	const LASTERROR = SDL_LASTERROR;
	
}
?>
