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


use VDM\Joomla\Interfaces\Data\ItemInterface as Item;
use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;
use VDM\Joomla\Data\Guid;
use VDM\Joomla\Componentbuilder\File\Type;
use VDM\Joomla\Componentbuilder\File\Handler;


/**
 * File Manager Class
 * 
 * @since  5.0.2
 */
final class Manager
{
	/**
	 * The Globally Unique Identifier.
	 *
	 * @since 5.0.2
	 */
	use Guid;

	/**
	 * The Item Class.
	 *
	 * @var   Item
	 * @since 5.0.2
	 */
	protected Item $item;

	/**
	 * The Items Class.
	 *
	 * @var   Items
	 * @since 5.0.2
	 */
	protected Items $items;

	/**
	 * The Type Class.
	 *
	 * @var   Type
	 * @since 5.0.2
	 */
	protected Type $type;

	/**
	 * The Handler Class.
	 *
	 * @var   Handler
	 * @since 5.0.2
	 */
	protected Handler $handler;

	/**
	 * Constructor.
	 *
	 * @param Item      $item      The Item Class.
	 * @param Items     $items     The Items Class.
	 * @param Type      $type      The Type Class.
	 * @param Handler   $handler   The Handler Class.
	 *
	 * @since 5.0.2
	 */
	public function __construct(Item $item, Items $items, Type $type, Handler $handler)
	{
		$this->item = $item;
		$this->items = $items;
		$this->type = $type;
		$this->handler = $handler;
	}

	/**
	 * Upload a file, of a given file type and link it to an entity.
	 *
	 * @param string $guid    The file type guid
	 * @param string $entity  The entity guid
	 * @param string $target  The target entity name
	 *
	 * @return void
	 * @throws \InvalidArgumentException If the file type is not valid.
	 * @throws \RuntimeException If there is an error during file upload.
	 * @since 5.0.2
	 */
	public function upload(string $guid, string $entity, string $target): void
	{
		if (($fileType = $this->type->load($guid, $target)) === null)
		{
			throw new \InvalidArgumentException(Text::sprintf('COM_COMPONENTBUILDER_FILE_TYPE_NOT_VALID_IN_S_AREA', $target));
		}

		$details = $this->handler
			->setEnqueueError(false)
			->setLegalFormats($fileType['formats'])
			->getFile(
				$fileType['field'],   // The input field name
				$fileType['type'],    // The file type
				$fileType['filter'],  // The filter to use when uploading the file
				$fileType['path']     // The path to the directory where the file must be placed
			);

		if ($details === null)
		{
			// Throw an exception if file details couldn't be retrieved
			throw new \RuntimeException($this->handler->getErrors());
		}

		// store file in the file table
		$this->item->set(
			$this->modelFileDetails($details, $guid)
		);
	}

	/**
	 * Delete a file of a given entity.
	 *
	 * @param string $guid    The file guid
	 * @param string $entity  The entity guid
	 * @param string $target  The target entity name
	 *
	 * @return void
	 * @since 5.0.2
	 */
	public function delete(string $guid, string $entity, string $target): void
	{
		
	}

	/**
	 * model the file details to store in the file table
	 *
	 * @param array  $details  The uploaded file details.
	 * @param string $guid     The file type guid
	 * @param string $entity   The entity guid
	 * @param string $target   The target entity name
	 *
	 * @return object
	 * @since 5.0.2
	 */
	protected function modelFileDetails(array $details, string $guid, string $entity, string $target): object
	{
		return (object) [
			'name' => 'soon',
			'file_type' => $guid,
			'ext' => 'me',
			'size_kb' => 45,
			'filepath' => $details['full_path'],
			'entity_type' => $target,
			'entity' => $guid,
			'guid' => $this->getGuid('file'),
		];
	}
}

