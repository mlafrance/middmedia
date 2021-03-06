<?php
/**
 * @package middmedia
 * 
 * @copyright Copyright &copy; 2010, Middlebury College
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License (GPL)
 */ 

/**
 * An interface for all middmedia files.
 * 
 * @package middmedia
 * 
 * @copyright Copyright &copy; 2010, Middlebury College
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License (GPL)
 */
interface MiddMedia_File_Format_Audio_InfoInterface {
	
	/**
	 * Answer the audio codec used.
	 * 
	 * @return string
	 */
	public function getAudioCodec ();
	
	/**
	 * Answer the sample rate of the audio.
	 * 
	 * @return int
	 */
	public function getAudioSampleRate ();
	
	/**
	 * Answer the number of channels in the audio.
	 * 
	 * @return int
	 */
	public function getAudioChannels ();
	
}
