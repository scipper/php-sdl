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
class SDLActiveEvent {
	
	/**
	 * 
	 * @var SDL_ActiveEvent
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_AcitveEvent $event
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
	public function gain() {
		return $this->event["gain"];
	}
	
	/**
	 * 
	 * @return integer?
	 */
	public function state() {
		return $this->event["state"];
	}
	
}

?>