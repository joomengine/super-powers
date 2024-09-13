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


use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Router\Route;
use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;
use VDM\Joomla\Interfaces\Data\ItemInterface as Item;


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
	 * The Item Class.
	 *
	 * @var   Item
	 * @since 5.0.2
	 */
	protected Item $item;

	/**
	 * The file types
	 *
	 * @var   array
	 * @since 5.0.2
	 */
	protected array $fileTypes;

	/**
	 * The File Type Task
	 *
	 * @var    array
	 * @since  5.0.2
	 */
	protected array $fileTypeTasks = [1 => 'image' , 2 => 'file' , 3 => 'media', 4 => 'file'];

	/**
	 * Constructor.
	 *
	 * @param Items   $items   The Items Class.
	 * @param Item    $item    The Item Class.
	 *
	 * @since 5.0.2
	 */
	public function __construct(Items $items, Item $item)
	{
		$this->items = $items;
		$this->item = $item;
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
					continue;
				}
				// set the file type task
				$this->setFileTypeTask($file);
				// set the file download link
				$this->setFileDownloadLink($file);
			}

			// If the $files array is empty, return null
			return !empty($files) ? $files : null;
		}

		return null;
	}

	/**
	 * Add the file type details to this file
	 *
	 * @param object $file   The file being updated
	 *
	 * @return void
	 * @since  5.0.2
	 */
	protected function setFileTypeTask(object &$file): void
	{
		if (($fileType = $this->getFileType($file->file_type ?? null)) !== null)
		{
			$file->task = $this->getFileTypeTask($fileType);
		}
	}

	/**
	 * Add the file download link
	 *
	 * @param object $file   The file being updated
	 *
	 * @return void
	 * @since  5.0.2
	 */
	protected function setFileDownloadLink(object &$file): void
	{
		if (isset($file->task))
		{
			// Build the query parameters
			$queryParams = [
				'option' => 'com_componentbuilder',
				'controller' => 'download',
				'task' => 'download.' . $file->task,
				'file' => $file->guid,
				'name' => $file->name
			];

			// Build the full URL
			$file->link = Uri::root() . Route::_('index.php?' . http_build_query($queryParams));
		}
	}

	/**
	 * Retrieves the file type task name
	 *
	 * @param object  $data   The type data array
	 *
	 * @return string   The field name
	 * @since  5.0.2
	 */
	protected function getFileTypeTask(object $data): string
	{
		$type = $data->type ?? 4;
		if (isset($this->fileTypeTasks[$type]))
		{
			return $this->fileTypeTasks[$type];
		}
		return 'file';
	}

	/**
	 * Retrieves the file type details
	 *
	 * @param string|null $guid   The GUID (Globally Unique Identifier) used as the key to retrieve the file type.
	 *
	 * @return object|null   The item object if found, or null if the item does not exist.
	 * @since  5.0.2
	 */
	protected function getFileType(?string $guid): ?object
	{
		if ($guid === null)
		{
			return null;
		}

		if (isset($this->fileTypes[$guid]))
		{
			return $this->fileTypes[$guid];
		}

		$this->fileTypes[$guid] =  $this->item->table('file_type')->get($guid);

		return $this->fileTypes[$guid];
	}
}

