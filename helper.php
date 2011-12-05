<?php
/**
* @version		$Id: helper.php 10381 2008-06-01 03:35:53Z pasamio $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class modConferenceHelper
{
	function getTesis($username)
	{
		$db		=& JFactory::getDBO();
		$result	= null;

		$query = 'SELECT id, name_lecture, file_name'
			.' FROM #__tesis'
			.' WHERE username = '. $username
			/*
			.' AND published = 1'*/
			;
		$db->setQuery($query);
		$result = $db->loadObjectList();

		if ($db->getErrorNum()) {
			JError::raiseWarning( 500, $db->stderr() );
		}

		return $result;
	}
}
?>
