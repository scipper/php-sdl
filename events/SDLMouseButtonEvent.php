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
class SDLMouseButtonEvent {
	
	/**
	 * 
	 */
	const BUTTON_LEFT = SDL_BUTTON_LEFT;
	
	/**
	 * 
	 */
	const BUTTON_MIDDLE = SDL_BUTTON_MIDDLE;
	
	/**
	 * 
	 */
	const BUTTON_RIGHT = SDL_BUTTON_RIGHT;
	
	/**
	 * 
	 */
	const BUTTON_WHEELUP = SDL_BUTTON_WHEELUP;
	
	/**
	 * 
	 */
	const BUTTON_WHEELDOWN = SDL_BUTTON_WHEELDOWN;
	
	/**
	 * 
	 * @var SDL_MouseButtonEvent
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_MouseButtonEvent $event
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
	public function which() {
		return $this->event["which"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function button() {
		return $this->event["button"];
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
	 * @return integer
	 */
	public function x() {
		return $this->event["x"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function y() {
		return $this->event["y"];
	}
	
}

?>