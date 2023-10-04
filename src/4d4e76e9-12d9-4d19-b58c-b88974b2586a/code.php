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

namespace VDM\Joomla\Componentbuilder\Abstraction;


use VDM\Joomla\Componentbuilder\Interfaces\Mapperdoubleinterface;


/**
 * Compiler Mapper Double
 * 
 * @since 3.2.0
 */
abstract class MapperDouble implements Mapperdoubleinterface
{

	/**
	 * The Dynamic Content
	 *
	 * @var    array
	 * @since 3.2.0
	 **/
	public array $active = [];

	/**
	 * Check if any values are set in the active array.
	 *
	 * @param   string|null  $firstKey  Optional. The first key to check for values.
	 *
	 * @return  bool  True if the active array or the specified subarray is not empty, false otherwise.
	 * @since   3.2.0
	 */
	public function isActive(string $firstKey = null): bool
	{
		// If a firstKey is provided, check if it has any values.
		if (is_string($firstKey))
		{
			// Get the first key from the input parameter and check if it exists in the active array.
			$firstKey = $this->firstKey($firstKey);
			if (isset($this->active[$firstKey]))
			{
				return !empty($this->active[$firstKey]);
			}
			return false;
		}

		// If no firstKey is provided, check if the entire active array has any values.
		return !empty($this->active);
	}

	/**
	 * Set dynamic content
	 *
	 * @param   string    $firstKey    The first key
	 * @param   string    $secondKey   The second key
	 * @param   mixed     $value       The values to set
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function set(string $firstKey, string $secondKey, $value): void
	{
		$this->active[$this->firstKey($firstKey)]
			[$this->secondKey($secondKey)] = $value;
	}

	/**
	 * Get dynamic content
	 *
	 * @param   string        $firstKey     The first key
	 * @param   string|null   $secondKey    The second key
	 *
	 * @return  mixed
	 * @since 3.2.0
	 */
	public function get(string $firstKey, ?string $secondKey = null)
	{
		if (is_string($secondKey))
		{
			return $this->active[$this->firstKey($firstKey)]
				[$this->secondKey($secondKey)]  ?? null;
		}
		return $this->active[$this->firstKey($firstKey)] ?? null;
	}

	/**
	 * Does keys exist
	 *
	 * @param   string        $firstKey     The first key
	 * @param   string|null   $secondKey    The second key
	 *
	 * @return  bool
	 * @since 3.2.0
	 */
	public function exist(string $firstKey, ?string $secondKey = null): bool
	{
		if (is_string($secondKey) && isset($this->active[$this->firstKey($firstKey)]) &&
			isset($this->active[$this->firstKey($firstKey)]
				[$this->secondKey($secondKey)]))
		{
			return true;
		}
		elseif ($secondKey === null && isset($this->active[$this->firstKey($firstKey)]))
		{
			return true;
		}
		return false;
	}

	/**
	 * Add dynamic content
	 *
	 * @param   string    $firstKey     The first key
	 * @param   string    $secondKey    The second key
	 * @param   mixed     $value        The values to set
	 * @param   bool      $array        The is array switch
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function add(string $firstKey, string $secondKey, $value, bool $array = false): void
	{
		if (isset($this->active[$this->firstKey($firstKey)]) &&
			isset($this->active[$this->firstKey($firstKey)]
				[$this->secondKey($secondKey)]))
		{
			if (is_array($this->active[$this->firstKey($firstKey)]
				[$this->secondKey($secondKey)]))
			{
				$this->active[$this->firstKey($firstKey)]
					[$this->secondKey($secondKey)][] = $value;
			}
			else
			{
				$this->active[$this->firstKey($firstKey)]
					[$this->secondKey($secondKey)] .= $value;
			}
		}
		else
		{
			if ($array)
			{
				$this->active[$this->firstKey($firstKey)]
					[$this->secondKey($secondKey)] = [$value];
			}
			else
			{
				$this->active[$this->firstKey($firstKey)]
					[$this->secondKey($secondKey)] = $value;
			}
		}
	}

	/**
	 * Remove dynamic content
	 *
	 * @param   string         $firstKey     The first key
	 * @param   string|null    $secondKey    The second key
	 *
	 * @return  void
	 * @since 3.2.0
	 */
	public function remove(string $firstKey, ?string $secondKey = null): void
	{
		if (is_string($secondKey))
		{
			unset($this->active[$this->firstKey($firstKey)]
				[$this->secondKey($secondKey)]);
		}
		else
		{
			unset($this->active[$this->firstKey($firstKey)]);
		}
	}

	/**
	 * Model the first key
	 *
	 * @param   string   $key  The first key to model
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	abstract protected function firstKey(string $key): string;

	/**
	 * Model the second key
	 *
	 * @param   string   $key  The second key to model
	 *
	 * @return  string
	 * @since 3.2.0
	 */
	abstract protected function secondKey(string $key): string;
}

