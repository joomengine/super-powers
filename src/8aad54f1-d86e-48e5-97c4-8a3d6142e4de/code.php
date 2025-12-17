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

namespace VDM\Joomla\Interfaces\Import;


/**
 * Join Tables Interface
 * 
 * @since  5.1.4
 */
interface JoinTablesInterface
{
	/**************************************************************************
	 * THESE VALUES BELOW SHOULD BE UPDATE FOR YOUR USE-CASE
	 */

	/**
	 * The current join tables key fields map.
	 *
	 * @var   array
	 * @since 5.0.2
	 * protected array $keyFields = [
	 *       'detail' => ['link_fields' => ['entity']]
	 * ];
	 */

	/**
	 * THESE VALUES ABOVE SHOULD BE UPDATE FOR YOUR USE-CASE
	 **************************************************************************/

	/**
	 * Process the join tables and save the corresponding data.
	 *
	 * @param   string  $parentKeyValue  The parent key.
	 *
	 * @return  void
	 * @since  5.0.2
	 */
	public function set(string $parentJoinKey, string $parentGuid): void;
}

