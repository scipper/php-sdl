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
class SDLMouseMotionEvent {
	
	/**
	 * 
	 * @var SDL_MouseMotionEvent
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_MouseMotionEvent $event
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
	
	/**
	 * 
	 * @return integer
	 */
	public function xrel() {
		return $this->event["xrel"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function yrel() {
		return $this->event["yrel"];
	}
	
}

?>