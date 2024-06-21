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

namespace VDM\Joomla\Data;


use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;
use VDM\Joomla\Interfaces\Data\SubformInterface;


/**
 * Store the data of a sub-form
 * 
 * @since  3.2.2
 */
class Subform implements SubformInterface
{
	/**
	 * The ItemsInterface Class.
	 *
	 * @var   Items
	 * @since 3.2.2
	 */
	protected Items $items;

	/**
	 * Table Name
	 *
	 * @var    string
	 * @since 3.2.1
	 */
	protected string $table;

	/**
	 * Constructor.
	 *
	 * @param Items       $items   The ItemsInterface Class.
	 * @param string|null $table   The table name.
	 *
	 * @since 3.2.2
	 */
	public function __construct(Items $items, ?string $table = null)
	{
		$this->items = $items;
		if ($table !== null)
		{
			$this->table = $table;
		}
	}

	/**
	 * Set the current active table
	 *
	 * @param string $table The table that should be active
	 *
	 * @return self
	 * @since 3.2.2
	 */
	public function table(string $table): self
	{
		$this->table = $table;

		return $this;
	}

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
	public function get(string $value, string $key, string $field, array $set): ?array
	{
		if (($items = $this->items->table($this->getTable())->get([$value], $key)) !== null)
		{
			return $this->converter($items, $set, $field);
		}
		return null;
	}

	/**
	 * Set a subform items
	 *
	 * @param array     $items       The list of items to set
	 * @param string    $key         The child key on which the items should be linked
	 *
	 * @return bool
	 * @since 3.2.2
	 */
	public function set(array $items, string $key): bool
	{
		return $this->items->table($this->getTable())->set(
			$this->process($items, $key), $key
		);
	}

	/**
	 * Get the current active table
	 *
	 * @return  string
	 * @since 3.2.2
	 */
	public function getTable(): string
	{
		return $this->table;
	}

	/**
	 * Filters the specified keys from an array of objects or arrays, converts them to arrays,
	 * and sets them by association with a specified key and an incrementing integer.
	 *
	 * @param array  $items  Array of objects or arrays to be filtered.
	 * @param array  $keySet Array of keys to retain in each item.
	 * @param string $key    The key prefix for the resulting associative array.
	 *
	 * @return array Array of filtered arrays set by association.
	 * @since 3.2.2
	 */
	private function converter(array $items, array $keySet, string $key): array
	{
		/**
		 * Filters keys for a single item and converts it to an array.
		 *
		 * @param object|array $item   The item to filter.
		 * @param array        $keySet The keys to retain.
		 *
		 * @return array The filtered array.
		 * @since 3.2.2
		 */
		$filterKeys = function ($item, array $keySet) {
			$filteredArray = [];
			foreach ($keySet as $key) {
				if (is_object($item) && property_exists($item, $key)) {
					$filteredArray[$key] = $item->$key;
				} elseif (is_array($item) && array_key_exists($key, $item)) {
					$filteredArray[$key] = $item[$key];
				}
			}
			return $filteredArray;
		};

		$result = [];
		foreach ($items as $index => $item)
		{
			$filteredArray = $filterKeys($item, $keySet);
			$result[$key . $index] = $filteredArray;
		}

		return $result;
	}

	/**
	 * Processes an array of arrays based on the specified key.
	 *
	 * @param array   $items  Array of arrays to be processed.
	 * @param string  $key    The key to check and modify values.
	 *
	 * @return array  The processed array of arrays.
	 * @since 3.2.2
	 */
	private function process(array $items, string $key): array
	{
		foreach ($items as &$item)
		{
			$value = $item[$key] ?? '';
			switch ($key) {
				case 'guid':
					if (empty($value))
					{
						$item[$key] = $this->setGuid($key);
					}
					break;
				case 'id':
					if ($value === '')
					{
						$item[$key] = 0;
					}
					break;
				default:
					// No action for other keys if empty
					break;
			}
		}

		return array_values($items);
	}

	/**
	 * Returns a GUIDv4 string
	 * 
	 * Thanks to Dave Pearson (and other)
	 * https://www.php.net/manual/en/function.com-create-guid.php#119168 
	 *
	 * Uses the best cryptographically secure method
	 * for all supported platforms with fallback to an older,
	 * less secure version.
	 *
	 * @param string  $key    The key to check and modify values.
	 * @param  bool   $trim
	 *
	 * @return string
	 *
	 * @since  3.0.9
	 */
	private function setGuid(string $key, bool $trim = true): string
	{
		// Windows
		if (function_exists('com_create_guid'))
		{
			if ($trim)
			{
				return trim(\com_create_guid(), '{}');
			}
			return \com_create_guid();
		}

		// set the braces if needed
		$lbrace = $trim ? "" : chr(123);    // "{"
		$rbrace = $trim ? "" : chr(125);    // "}"

		// OSX/Linux
		if (function_exists('openssl_random_pseudo_bytes'))
		{
			$data = \openssl_random_pseudo_bytes(16);
			$data[6] = chr( ord($data[6]) & 0x0f | 0x40);    // set version to 0100
			$data[8] = chr( ord($data[8]) & 0x3f | 0x80);    // set bits 6-7 to 10
			return $lbrace . vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)) . $lbrace;
		}

		// Fallback (PHP 4.2+)
		mt_srand((double) microtime() * 10000);
		$charid = strtolower( md5( uniqid( rand(), true)));
		$hyphen = chr(45);                  // "-"
		$guidv4 = $lbrace.
			substr($charid,  0,  8). $hyphen.
			substr($charid,  8,  4). $hyphen.
			substr($charid, 12,  4). $hyphen.
			substr($charid, 16,  4). $hyphen.
			substr($charid, 20, 12).
			$rbrace;

		// check that it does not already exist (one in a billion chance ;)
		// but we do it any way...
		if ($this->items->table($this->getTable())->values([$guidv4], $key))
		{
			return $this->setGuid($key);
		}

		return $guidv4;
	}
}

