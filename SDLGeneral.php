<?php
namespace org\sdl;

use org\sdl\general\SDLErrorcode;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 24.11.2014
 * @namespace org\sdl
 * @package org\sdl
 *
 */
class SDLGeneral {
	
	const VIDEO = SDL_INIT_VIDEO;
	const AUDIO = SDL_INIT_AUDIO;
	const TIMER = SDL_INIT_TIMER;
	const CDROM = SDL_INIT_CDROM;
	const JOYSTICK = SDL_INIT_JOYSTICK;
	const EVERYTHING = SDL_INIT_EVERYTHING;
	const EVENTTHREAD = SDL_INIT_EVENTTHREAD;
	
	/**
	 * 
	 * @param Uint32 $flags
	 * @throws \Exception
	 */
	public static function init($flags) {
		if(SDL_Init($flags) === -1) {
			throw new \Exception("Unable to init SDL: ".SDL_GetError());
		}
	}
	
	/**
	 * 
	 * @param Uint32 $flags
	 * @throws \Exception
	 */
	public static function initSubSystem($flags) {
		if(SDL_InitSubSystem($flags) === -1) {
			throw new \Exception("Unable to init SDL Sub System: ".SDL_GetError());
		}
	}
	
	/**
	 * 
	 * @param Uint32 $flags
	 */
	public static function quitSubSystem($flags) {
		SDL_QuitSubSystem($flags);
	}
	
	/**
	 * 
	 */
	public static function quit() {
		SDL_Quit();
	}
	
	/**
	 * 
	 * @param Uint32 $flags
	 * @return boolean
	 */
	public static function wasInit($flags) {
		return SDL_WasInit($flags) == $flags;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public static function getError() {
		return SDL_GetError();
	}
	
	/**
	 * 
	 * @param SDLErrorcode $code
	 */
	public static function error($code) {
		SDL_Error($code);
	}
	
	/**
	 * 
	 */
	public static function clearError() {
		SDL_ClearError();
	}
	
}
?>
