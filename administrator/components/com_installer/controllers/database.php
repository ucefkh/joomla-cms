<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_installer
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * @package		Joomla.Administrator
 * @subpackage	com_installer
 */
class InstallerControllerDatabase extends JControllerLegacy
{

	/**
	 * Tries to fix missing database updates
	 *
	 * @since	2.5
	 */
	function fix()
	{
		$model = $this->getModel('database');
		$model->fix();
		$this->setRedirect(JRoute::_('index.php?option=com_installer&view=database', false));
	}
}
