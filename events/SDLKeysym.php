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
class SDLKeysym {
	
	/**
	 * 
	 * @var SDL_keysym
	 */
	protected $keysym;
	
	
	/**
	 * 
	 * @param SDL_keysym $keysym
	 */
	public function __construct($keysym) {
		$this->keysym = $keysym;
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function scancode() {
		return $this->keysym["scancode"];
	}	
	
	/**
	 * 
	 * @return integer
	 */
	public function sym() {
		return $this->keysym["sym"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function mod() {
		return $this->keysym["mod"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function unicode() {
		return $this->keysym["unicode"];
	}
	
}

?>