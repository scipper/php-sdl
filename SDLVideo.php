<?php
namespace org\sdl;

use org\sdl\video\SDLSurface;
use org\sdl\video\SDLVideoInfo;
use org\sdl\video\SDLRect;
use org\sdl\video\SDLPixelFormat;
use org\sdl\video\SDLColor;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 24.11.2014
 * @namespace org\sdl
 * @package org\sdl
 *
 */
class SDLVideo {
	
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
	 * Logical Palette
	 */
	const LOGPAL = SDL_LOGPAL;
	
	/**
	 * Physical Palette
	 */
	const PHYSPAL = SDL_PHYSPAL;
	
	/**
	 * Returns a pointer to the current display surface
	 * 
	 * @return SDL_Surface
	 */
	public static function getVideoSurface() {
		return new SDLSurface(SDL_GetVideoSurface());
	}
	
	/**
	 * Returns a pointer to information about the video hardware
	 * 
	 * @return \org\sdl\SDLVideoInfo
	 */
	public static function getVideoInfo() {
		return new SDLVideoInfo();
	}
	
	/**
	 * Obtain the name of the video driver
	 * 
	 * @return string
	 */
	public static function videoDriverName() {
		return (string) SDL_VideoDriverName();
	}
	
	/**
	 * Returns a pointer to an array of available screen dimensions for the given format and video flags
	 * 
	 * The array of SDLRect Objects to available screen dimensions for the 
	 * given pixel format and video flags. The array is not guaranteed to be sorted in any particular order. 
	 * The function returns 0 if there is not any mode available for the particular format, 
	 * or -1 if any dimension is okay for the given format.
	 * 
	 * @param SDLPixelFormat $format
	 * @param integer $flags
	 * @return integer|array[SDLRect]
	 */
	public static function listModes(SDLPixelFormat $format = null, $flags) {
		$modes = SDL_ListModes(!is_null($format) ? $format->get() : null, $flags);
		
		if($modes == 0) {
			return 0;
		} elseif($modes == -1) {
			return -1;
		} else {
			$list = array();
			foreach($modes as $m) {
				$list[] = new SDLRect($m);
			}
			return $list;
		}
	}
	
	/**
	 * Check to see if a particular video mode is supported.
	 * 
	 * @param integer $width
	 * @param integer $height
	 * @param integer $bpp
	 * @param integer $flags
	 * @return integer
	 */
	public static function videoModeOk($width, $height, $bpp, $flags) {
		return (integer) SDL_VideoModeOK($width, $height, $bpp, $flags);
	}
	
	/**
	 * Set up a video mode with the specified width, height and bits-per-pixel.
	 * 
	 * @param integer $width
	 * @param integer $height
	 * @param integer $bpp
	 * @param integer $flags
	 * @return \org\sdl\video\SDLSurface
	 */
	public static function setVideoMode($width, $height, $bpp, $flags) {
		return new SDLSurface(SDL_SetVideoMode($width, $height, $bpp, $flags));
	}
	
	/**
	 * Makes sure the given area is updated on the given screen.
	 * 
	 * @param SDLSurface $surface
	 * @param integer $x
	 * @param integer $y
	 * @param integer $width
	 * @param integer $height
	 */
	public static function updateRect(SDLSurface $surface, $x, $y, $width, $height) {
		SDL_UpdateRect($surface->get(), $x, $y, $width, $height);
	}
	
	/**
	 * Makes sure the given list of rectangles is updated on the given screen.
	 * 
	 * @param SDLSurface $surface
	 * @param array $rects[SDLRect]
	 */
	public static function updateRects(SDLSurface $surface, array $rects) {
		$array = array();
		foreach($rects as $rect) {
			$array[] = $rect->get();
		}
		SDL_UpdateRects($surface->get(), count($array), $array);
	}
	
	/**
	 * Swaps screen buffers
	 * 
	 * @param SDLSurface $surface
	 * @return integer
	 */	
	public static function flip(SDLSurface $surface) {
		return (integer) SDL_Flip($surface->get());	
	}
	
	/**
	 * Sets a portion of the colormap for the given 8-bit surface.
	 * 
	 * @param SDLSurface $surface
	 * @param SDLColor $colors
	 * @param integer $firstcolor
	 * @param integer $ncolors
	 * @return integer
	 */
	public static function setColors(SDLSurface $surface, SDLColor $colors, $firstcolor, $ncolors) {
		return (integer) SDL_SetColors($surface->get(), $colors->get(), $firstcolor, $ncolors);
	}
	
	/**
	 * Sets the colors in the palette of an 8-bit surface.s
	 * 
	 * @param SDLSurface $surface
	 * @param integer $flags
	 * @param SDLColor $colors
	 * @param integer $firstcolor
	 * @param integer $ncolors
	 * @return integer
	 */
	public static function setPalette(SDLSurface $surface, $flags, SDLColor $colors, $firstcolor, $ncolors) {
		return (integer) SDL_SetPalette($surface->get(), $flags, $colors->get(), $firstcolor, $ncolors);
	}
	
	/**
	 * Sets the color gamma function for the display
	 * 
	 * @param float $r
	 * @param float $g
	 * @param float $b
	 * @return integer
	 */
	public static function setGamma($r, $g, $b) {
		return (integer) SDL_SetGamma($r, $g, $b);
	}
	
	/**
	 * Gets the color gamma lookup tables for the display
	 * 
	 * @param array $r
	 * @param array $g
	 * @param array $b
	 * @return integer
	 */
	public static function getGammaRamp(array $r, array $g, array $b) {
		return (integer) SDL_GetGammaRamp($r, $g, $b);
	}
	
	/**
	 * Sets the color gamma lookup tables for the display
	 * 
	 * @param array $r
	 * @param array $g
	 * @param array $b
	 * @return integer
	 */
	public static function setGammaRamp(array $r = null, array $g = null, array $b = null) {
		return (integer) SDL_SetGammaRamp($r, $g, $b);
	}
	
	/**
	 * Map a RGB color value to a pixel format.
	 * 
	 * @param SDLPixelFormat $format
	 * @param integer $r
	 * @param integer $g
	 * @param integer $b
	 * @return integer
	 */
	public static function mapRgb(SDLPixelFormat $format, $r, $g, $b) {
		return (integer) SDL_MapRGB($format->get(), $r, $g, $b);
	}
	
	/**
	 * Frees (deletes) a SDL_Surface
	 * 
	 * @param SDLSurface $surface
	 */
	public static function free(SDLSurface $surface) {
		SDL_FreeSurface($surface->get());
	}
	
	/**
	 * Load a Windows BMP file into an SDL_Surface.
	 * 
	 * @param string $file
	 * @return \org\sdl\video\SDLSurface
	 */
	public static function loadBmp($file) {
		return new SDLSurface(SDL_LoadBMP($file));
	}
	
}
?>
