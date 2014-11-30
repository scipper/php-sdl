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
class SDLKeyboardEvent {
	
	/**
	 * 
	 */
	const PRESSED = SDL_PRESSED;
	
	/**
	 * 
	 */
	const RELEASED = SDL_RELEASED;
	
	/**
	 * 
	 * @var SDL_KeyboardEvent
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_KeyboardEvent $event
	 */
	public function __construct($event) {
		$this->event = $event;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function type() {
		return $this->event["type"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function state() {
		return $this->event["state"];
	}
	
	/**
	 * 
	 * @return \org\sdl\events\SDLKeysym
	 */
	public function keysym() {
		return new SDLKeysym($this->event["keysym"]);
	}
	
}

?>