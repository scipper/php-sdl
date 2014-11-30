<?php

namespace org\sdl\events;

class SDLQuitEvent {
	
	/**
	 * 
	 * @var SDL_QuitEvent
	 */
	protected $event;
	
	
	/**
	 * 
	 * @param SDL_QuitEvent $event
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
	
}

?>