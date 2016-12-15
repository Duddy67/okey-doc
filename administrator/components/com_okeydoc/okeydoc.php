<?php
/**
 * @package Okey DOC 1.x
 * @copyright Copyright (c)2014 - 2017 Lucas Sanner
 * @license GNU General Public License version 3, or later
 * @contact lucas.sanner@gmail.com
 */


defined('_JEXEC') or die; // No direct access.

//Check against the user permissions.
if(!JFactory::getUser()->authorise('core.manage', 'com_okeydoc')) {
  return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Okeydoc');

//Execute the requested task (set in the url).
//If no task is set then the "display' task will be executed.
$controller->execute(JRequest::getCmd('task'));

$controller->redirect();



