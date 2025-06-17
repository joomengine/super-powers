<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Interfaces\Database;


/**
 * Database Default Interface
 * 
 * @since 5.1.1
 */
interface DefaultInterface
{
	/**
	 * Switch to prevent/allow defaults from being added.
	 *
	 * @param   bool    $trigger      toggle the defaults
	 *
	 * @return  self
	 * @since   5.1.1
	 **/
	public function defaults(bool $trigger = true): self;
}

