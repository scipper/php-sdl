<?php
namespace org\sdl;

use org\sdl\video\SDLSurface;
use org\sdl\video\SDLVideoInfo;
use org\sdl\video\SDLRect;

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
	 * 
	 * @param Uint32 $flags
	 */
	public static function listModes($flags) {
		$modes = SDL_ListModes(null, $flags);
		
		if($modes == 0) {
			echo "no modes available\n";
		} elseif($modes == -1) {
			echo "all resolutions available\n";
		} else {
			echo "available modes: \n";
			foreach($modes as $m) {
				$mode = new SDLRect($m);
				echo $mode->w()."x".$mode->h()."\n";
			}
		}
	}
	
}
?>
