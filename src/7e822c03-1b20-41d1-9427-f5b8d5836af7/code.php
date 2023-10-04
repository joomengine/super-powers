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

namespace VDM\Joomla\Abstraction;


use VDM\Joomla\Interfaces\Activestorageregistryinterface;
use VDM\Joomla\Interfaces\Storageregistryinterface;
use VDM\Joomla\Abstraction\ActiveStorageRegistry;


/**
 * Storage Registry.
 * 
 * Don't use this beyond 10 dimensional depth for best performance.
 * 
 * @since 3.2.0
 */
abstract class StorageRegistry extends ActiveStorageRegistry implements Activestorageregistryinterface, Storageregistryinterface
{
	/**
	 * Path separator
	 *
	 * @var    string|null
	 * @since 3.2.0
	 */
	protected ?string $separator = '.';

	/**
	 * Sets a value into the storage using multiple keys.
	 *
	 * @param  string  $path      Storage path (e.g. vdm.content.builder)
	 * @param  mixed   $value     Value of entry
	 *
	 * @throws \InvalidArgumentException If any of the path values are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function set(string $path, $value): void
	{
		if (($keys = $this->getActiveKeys($path)) === null)
		{
			throw new \InvalidArgumentException("Path must only be strings or numbers to set any value.");
		}

		$this->setActive($value, ...$keys);
	}

	/**
	 * Adds content into the storage. If a key exists,
	 * it either appends or concatenates based on $asArray switch.
	 *
	 * @param  string  $path      Storage path (e.g. vdm.content.builder)
	 * @param  mixed   $value     Value of entry
	 * @param  bool    $asArray   Determines if the new value should be treated as an array. Default is false.
	 *
	 * @throws \InvalidArgumentException If any of the path values are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function add(string $path, $value, bool $asArray = false): void
	{
		if (($keys = $this->getActiveKeys($path)) === null)
		{
			throw new \InvalidArgumentException("Path must only be strings or numbers to add any value.");
		}

		$this->addActive($value, $asArray, ...$keys);
	}

	/**
	 * Retrieves a value (or sub-array) from the storage using multiple keys.
	 *
	 * @param  string  $path     Storage path (e.g. vdm.content.builder)
	 * @param  mixed   $default  Optional default value, returned if the internal doesn't exist.
	 *
	 * @throws \InvalidArgumentException If any of the path values are not a number or string.
	 * @return mixed The value or sub-array from the storage. Null if the location doesn't exist.
	 * @since 3.2.0
	 */
	public function get(string $path, $default = null)
	{
		if (($keys = $this->getActiveKeys($path)) === null)
		{
			throw new \InvalidArgumentException("Path must only be strings or numbers to get any value.");
		}

		return $this->getActive($default, ...$keys);
	}

	/**
	 * Removes a value (or sub-array) from the storage using multiple keys.
	 *
	 * @param  string  $path  Storage path (e.g. vdm.content.builder)
	 *
	 * @throws \InvalidArgumentException If any of the path values are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function remove(string $path): void
	{
		if (($keys = $this->getActiveKeys($path)) === null)
		{
			throw new \InvalidArgumentException("Path must only be strings or numbers to remove any value.");
		}

		$this->removeActive(...$keys);
	}

	/**
	 * Checks the existence of a particular location in the storage using multiple keys.
	 *
	 * @param  string  $path  Storage path (e.g. vdm.content.builder)
	 *
	 * @throws \InvalidArgumentException If any of the path values are not a number or string.
	 * @return bool True if the location exists, false otherwise.
	 * @since 3.2.0
	 */
	public function exists(string $path): bool
	{
		if (($keys = $this->getActiveKeys($path)) === null)
		{
			throw new \InvalidArgumentException("Path must only be strings or numbers to check if any value exist.");
		}

		return $this->existsActive(...$keys);
	}

	/**
	 * Sets a separator value
	 *
	 * @param string|null   $value     The value to set.
	 *
	 * @return void
	 * @since 3.2.0
	 */
	public function setSeparator(?string $value): void
	{
		$this->separator = $value;
	}

	/**
	 * Get that the active keys from a path
	 *
	 * @param string  $path   The path to determine the location storage.
	 *
	 * @return array|null      The valid array of keys
	 * @since 3.2.0
	 */
	protected function getActiveKeys(string $path): ?array
	{
		// empty path no allowed
		if ($path === '')
		{
			return null;
		}

		// Flatten the path
		if ($this->separator === null || $this->separator === '')
		{
			return [$path];
		}

		$keys = array_values(array_filter(explode($this->separator, $path), 'strlen'));

		if (empty($keys))
		{
			return null;
		}

		return $keys;
	}
}

