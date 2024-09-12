<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    3rd September, 2020
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\File;


use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;


/**
 * File Display Class
 * 
 * @since  5.0.2
 */
final class Display
{
	/**
	 * The Items Class.
	 *
	 * @var   Items
	 * @since 5.0.2
	 */
	protected Items $items;

	/**
	 * Constructor.
	 *
	 * @param Items   $items   The Items Class.
	 *
	 * @since 5.0.2
	 */
	public function __construct(Items $items)
	{
		$this->items = $items;
	}

	/**
	 * Get the file data that belong to this entity
	 *
	 * @param string $entity  The entity guid
	 * @param string $target  The target entity name
	 *
	 * @return array|null
	 * @since 5.0.2
	 */
	public function get(string $entity, string $target): ?array
	{
		if (($files = $this->items->table('file')->get([$entity], 'entity')) !== null)
		{
			foreach ($files as $n => $file)
			{
				if ($file->entity_type !== $target)
				{
					unset($files[$n]);
				}
			}

			// If the $files array is empty, return null
			return !empty($files) ? $files : null;
		}

		return null;
	}
}

