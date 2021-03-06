<?php
// vim: set ai ts=4 sw=4 ft=php:
namespace FreePBX\modules;
/*
 * Class stub for BMO Module class
 * In getActionbar change "modulename" to the display value for the page
 * In getActionbar change extdisplay to align with whatever variable you use to decide if the page is in edit mode.
 *
 */

class Nethdash implements \BMO
{

	// Note that the default Constructor comes from BMO/Self_Helper.
	// You may override it here if you wish. By default every BMO
	// object, when created, is handed the FreePBX Singleton object.

	// Do not use these functions to reference a function that may not
	// exist yet - for example, if you add 'testFunction', it may not
	// be visibile in here, as the PREVIOUS Class may already be loaded.
	//
	// Use install.php or uninstall.php instead, which guarantee a new
	// instance of this object.
	public function install()
	{
	}
	public function uninstall()
	{
	}

	// The following two stubs are planned for implementation in FreePBX 15.
	public function backup()
	{
	}
	public function restore($backup)
	{
	}

        public function doConfigPageInit(){}
	// http://wiki.freepbx.org/display/FOP/HTML+Output+from+BMO
	public function showPage()
	{
		echo load_view(__DIR__.'/views/default.php', array('subhead' => $subhead, 'content' => $content));
	}

}
