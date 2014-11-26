<?php
namespace org\sdl\video;
/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 25.11.2014
 * @namespace org\sdl\video
 * @package org\sdl\video
 *
 */
class SDLSurface {
	
	/**
	 * Allow any pixel-format
	 */
	const ANYFORMAT = SDL_ANYFORMAT;
	
	/**
	 * Use asynchronous blit if possible
	 */
	const ASYNCBLIT = SDL_ASYNCBLIT;
	
	/**
	 * Double buffered 
	 */
	const DOUBLEBUF = SDL_DOUBLEBUF;
	
	/**
	 * Use hardware acceleration blit
	 */
	const HWACCEL = SDL_HWACCEL;
	
	/**
	 * Have an exclusive palette
	 */
	const HWPALETTE = SDL_HWPALETTE;
	
	/**
	 * Stored in video memory
	 */
	const HWSURFACE = SDL_HWSURFACE;
	
	/**
	 * Full screen surface
	 */
	const FULLSCREEN = SDL_FULLSCREEN;
	
	/**
	 * Have an OpenGL context
	 */
	const OPENGL = SDL_OPENGL;
	
	/**
	 * Support OpenGL blitting *. NOTE: This option is kept for compatibility only, and is not recommended for new code.
	 */
	const OPENGLBLIT = SDL_OPENGLBLIT;
	
	/**
	 * Resizable surface
	 */
	const RESIZABLE = SDL_RESIZABLE;
	
	/**
	 * Accelerated colorkey blitting with RLE
	 */
	const RLEACCEL = SDL_RLEACCEL;
	
	/**
	 * Use alpha blending blit
	 */
	const SRCALPHA = SDL_SRCALPHA;
	
	/**
	 * Use colorkey blitting
	 */
	const SRCCOLORKEY = SDL_SRCCOLORKEY;
	
	/**
	 * Stored in the system memory. SWSURFACE is not actually a flag (it is defined as 0). A lack of HWSURFACE implies SWSURFACE
	 */
	const SWSURFACE = SDL_SWSURFACE;
	
	/**
	 * Use preallocated memory
	 */
	const PREALLOC = SDL_PREALLOC;
	
	/**
	 * 
	 * @var \SDL_Surface
	 */
	protected $surface;
	
	
	/**
	 * 
	 * @param \SDL_Surface $surface
	 */
	public function __construct($surface = null) {
		if($surface === null) {
			$this->surface = \SDL_Surface();
		} else {
			$this->surface = $surface;
		}
	}
	/**
	 * 
	 * @return SDL_Surface
	 */
	public function get() {
		return $this->surface;
	}
	
	/**
	 * 
	 * @return Uint32
	 */
	public function flags() {
		return $this->surface["flags"];
	}
	
	/**
	 * 
	 * @return \org\sdl\video\SDLPixelFormat
	 */
	public function pixelFormat() {
		return new SDLPixelFormat($this->surface["format"]);
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function w() {
		return $this->surface["w"];
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function h() {
		return $this->surface["h"];
	}
	
	/**
	 * 
	 * @return Uint16
	 */
	public function pitch() {
		return $this->surface["pitch"];
	}
	
	/**
	 * @TODO implement Pixel data
	 * @param Pixel Data $pixels
	 */
	public function pixels($pixels) {
		$this->surface["pixels"] = $pixels;
	}
	
	/**
	 * 
	 * @return \org\sdl\video\SDLRect
	 */
	public function clipRect() {
		return new SDLRect($this->surface["clip_rect"]);
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function refcount() {
		return $this->surface["refcount"];
	}
	
}
?>
