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

namespace VDM\Joomla\Interfaces\Data;


/**
 * Data Subform Interface
 * 
 * @since 3.2.2
 */
interface SubformInterface
{
	/**
	 * Set the current active table
	 *
	 * @param string $table The table that should be active
	 *
	 * @return self
	 * @since 3.2.2
	 */
	public function table(string $table): self;

	/**
	 * Get a subform items
	 *
	 * @param string   $value  The ids/values of the parent
	 * @param string   $key    The parent key on which the items are linked
	 * @param string   $field  The parent field name of the subform
	 * @param array    $set    The array SET of the keys of each row in the subform
	 *
	 * @return array|null   The subform
	 * @since 3.2.2
	 */
	public function get(string $value, string $key, string $field, array $set): ?array;

	/**
	 * Set a subform items
	 *
	 * @param array     $items       The list of items to set
	 * @param string    $key         The child key on which the items should be linked
	 *
	 * @return bool
	 * @since 3.2.2
	 */
	public function set(array $items, string $key): bool;

	/**
	 * Get the current active table
	 *
	 * @return  string
	 * @since 3.2.2
	 */
	public function getTable(): string;
}

