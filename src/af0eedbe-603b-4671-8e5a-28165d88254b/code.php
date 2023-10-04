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

namespace VDM\Joomla\Interfaces;


/**
 * The Active Storage Registry Interface
 * 
 * @since 3.2.0
 */
interface Activestorageregistryinterface
{
	/**
	 * Check if the main storage has any content.
	 *
	 * @return bool  Returns true if the active array is not empty, false otherwise.
	 * @since 3.2.0
	 */
	public function isActive(): bool;

	/**
	 * Retrieves all value from the storage.
	 *
	 * @return array   The values.
	 * @since 3.2.0
	 */
	public function allActive(): array;

	/**
	 * Sets a value into the storage using multiple keys.
	 *
	 * @param mixed   $value     The value to set.
	 * @param string  ...$keys   The keys to determine the location.
	 *
	 * @throws \InvalidArgumentException If any of the keys are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function setActive($value, string ...$keys): void;

	/**
	 * Adds content into the storage. If a key exists,
	 * it either appends or concatenates based on the value's type.
	 *
	 * @param mixed   $value     The value to set.
	 * @param bool    $asArray   Determines if the new value should be treated as an array.
	 * @param string  ...$keys   The keys to determine the location.
	 *
	 * @throws \InvalidArgumentException If any of the keys are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function addActive($value, bool $asArray, string ...$keys): void;

	/**
	 * Retrieves a value (or sub-array) from the storage using multiple keys.
	 *
	 * @param mixed   $default     The default value if not set.
	 * @param string  ...$keys      The keys to determine the location.
	 *
	 * @throws \InvalidArgumentException If any of the keys are not a number or string.
	 * @return mixed The value or sub-array from the storage. Null if the location doesn't exist.
	 * @since 3.2.0
	 */
	public function getActive($default, string ...$keys);

	/**
	 * Removes a value (or sub-array) from the storage using multiple keys.
	 *
	 * @param string ...$keys The keys to determine the location.
	 *
	 * @throws \InvalidArgumentException If any of the keys are not a number or string.
	 * @return void
	 * @since 3.2.0
	 */
	public function removeActive(string ...$keys): void;

	/**
	 * Checks the existence of a particular location in the storage using multiple keys.
	 *
	 * @param string ...$keys The keys to determine the location.
	 *
	 * @throws \InvalidArgumentException If any of the keys are not a number or string.
	 * @return bool True if the location exists, false otherwise.
	 * @since 3.2.0
	 */
	public function existsActive(string ...$keys): bool;
}

