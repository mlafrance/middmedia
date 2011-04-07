<?php

/******************
*
* This is a singleton class for holding instances of the
* embed codes for the video files on Middmedia 
*
*******************/

class EmbedPlugins {
	
	private static $instance;
	
	private $plugins;
	
	public static function instance() {
		
		if (!isset(self::$instance)) {
			self::$instance = new EmbedPlugins();
		}
		return self::$instance;
	}
	
	private function __construct() {
		$this->plugins = array();
	}
	
	public function AddPlugin($p) {
		$this->plugins[] = $p;
	}
	
	public function getPlugins() {
		return $this->plugins;
	}
	
}