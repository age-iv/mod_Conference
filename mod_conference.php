<?php
/**
* @version		$Id: mod_poll.php 10381 2008-06-01 03:35:53Z pasamio $
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

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$tabclass_arr = array ('sectiontableentry2', 'sectiontableentry1');

$menu 	= &JSite::getMenu();
$items	= $menu->getItems('link', 'index.php?option=com_poll&view=poll');
$itemid = isset($items[0]) ? '&Itemid='.$items[0]->id : '';


$user 	=& JFactory::getUser();
if ($user->get('username')){
$tesis   = modConferenceHelper::getTesis($user->get('username'));
}
//echo "<pre>"; print_r($poll); echo "</pre>";
/*if ( $poll && $poll->id ) {
    $layout = JModuleHelper::getLayoutPath('mod_conference');
    $tabcnt = 0;
    $options = modConferenceHelper::getConferenceOptions($poll->id);

	
}*/
$layout = JModuleHelper::getLayoutPath('mod_conference');
require($layout);