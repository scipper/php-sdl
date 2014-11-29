<?php

namespace org\sdl\events;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 29.11.2014
 * @namespace org\sdl\events
 * @package org\sdl\events
 *
 */
class SDLEvent {
	
	/**
	 * 
	 */
	const ACTIVEEVENT = SDL_ACTIVEEVENT;
	
	/**
	 * 
	 */
	const KEYDOWN = SDL_KEYDOWN;

	/**
	 *
	 */
	const KEYUP = SDL_KEYUP;

	/**
	 *
	 */
	const MOUSEMOTION = SDL_MOUSEMOTION;

	/**
	 *
	 */
	const MOUSEBUTTONDOWN = SDL_MOUSEBUTTONDOWN;

	/**
	 *
	 */
	const MOUSEBUTTONUP = SDL_MOUSEBUTTONUP;

	/**
	 *
	 */
	const JOYAXISMOTION = SDL_JOYAXISMOTION;

	/**
	 *
	 */
	const JOYBALLMOTION = SDL_JOYBALLMOTION;

	/**
	 *
	 */
	const JOYHATMOTION = SDL_JOYHATMOTION;

	/**
	 *
	 */
	const JOYBUTTONDOWN = SDL_JOYBUTTONDOWN;

	/**
	 *
	 */
	const JOYBUTTONUP = SDL_JOYBUTTONUP; 

	/**
	 *
	 */
	const VIDEORESIZE = SDL_VIDEORESIZE;

	/**
	 *
	 */
	const VIDEOEXPOSE = SDL_VIDEOEXPOSE;

	/**
	 *
	 */
	const QUIT = SDL_QUIT;

	/**
	 *
	 */
	const USEREVENT = SDL_USEREVENT;

	/**
	 *
	 */
	const SYSWMEVENT = SDL_SYSWMEVENT;
	
	/**
	 * 
	 * @var SDL_Event
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_Event $event
	 */
	public function __construct($event) {
		$this->event = $event;
	}
	
}

?>