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


use Joomla\CMS\Factory;
use Joomla\CMS\User\User;
use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;
use VDM\Joomla\Data\Guid;
use VDM\Joomla\Componentbuilder\Utilities\UserHelper;
use VDM\Joomla\Componentbuilder\Utilities\Exception\NoUserIdFoundException;
use VDM\Joomla\Utilities\Component\Helper as Component;
use VDM\Joomla\Interfaces\Data\GuidInterface;
use VDM\Joomla\Interfaces\Data\SubformInterface;


/**
 * CRUD the user data of any sub-form to another view (table)
 * 
 * @since  5.0.2
 */
final class UsersSubform implements GuidInterface, SubformInterface
{
	/**
	 * The Globally Unique Identifier.
	 *
	 * @since 5.0.2
	 */
	use Guid;

	/**
	 * The Items Class.
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
	 * The user properties
	 *
	 * @var    array
	 * @since 5.0.2
	 */
	protected array $user;

	/**
	 * Constructor.
	 *
	 * @param Items       $items   The items Class.
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

		// Retrieve the user properties
		$this->initializeUserProperties();
	}

	/**
	 * Set the current active table
	 *
	 * @param string $table The table that should be active
	 *
	 * @return self
	 * @since  3.2.2
	 */
	public function table(string $table): self
	{
		$this->table = $table;

		return $this;
	}

	/**
	 * Get a subform items
	 *
	 * @param string   $linkValue  The value of the link key in child table.
	 * @param string   $linkKey    The link key on which the items where linked in the child table.
	 * @param string   $field      The parent field name of the subform in the parent view.
	 * @param array    $get        The array get:set of the keys of each row in the subform.
	 *
	 * @return array|null   The subform
	 * @since  3.2.2
	 */
	public function get(string $linkValue, string $linkKey, string $field, array $get): ?array
	{
		if (($items = $this->items->table($this->getTable())->get([$linkValue], $linkKey)) !== null)
		{
			return $this->converter(
				$this->getUsersDetails($items),
				$get,
				$field
			);
		}

		return null;
	}

	/**
	 * Set a subform items
	 *
	 * @param mixed    $items      The list of items from the subform to set
	 * @param string   $indexKey   The index key on which the items should be observed as it relates to insert/update/delete.
	 * @param string   $linkKey    The link key on which the items where linked in the child table.
	 * @param string   $linkValue  The value of the link key in child table.
	 *
	 * @return bool
	 * @since  3.2.2
	 */
	public function set(mixed $items, string $indexKey, string $linkKey, string $linkValue): bool
	{
		$items = $this->process($items, $indexKey, $linkKey, $linkValue);

		$this->purge($items, $indexKey, $linkKey, $linkValue);

		if (empty($items))
		{
			return true; // nothing to set (already purged)
		}

		return $this->items->table($this->getTable())->set(
			$items, $indexKey
		);
	}

	/**
	 * Get the current active table
	 *
	 * @return  string
	 * @since   3.2.2
	 */
	public function getTable(): string
	{
		return $this->table;
	}

	/**
	 * Initializes the user properties.
	 *
	 * @return void
	 * @since  5.0.2
	 */
	private function initializeUserProperties(): void
	{
		$user = UserHelper::getUserById(0);

		// Populate user properties array excluding the 'id'
		foreach (get_object_vars($user) as $property => $value)
		{
			if ($property !== 'id')
			{
				$this->user[$property] = $property;
			}
		}
		$this->user['password2'] = 'password2';
	}

	/**
	 * Purge all items no longer in subform
	 *
	 * @param array    $items      The list of items to set.
	 * @param string   $indexKey   The index key on which the items should be observed as it relates to insert/update/delete
	 * @param string   $linkKey    The link key on which the items where linked in the child table.
	 * @param string   $linkValue  The value of the link key in child table.
	 *
	 * @return void
	 * @since  3.2.2
	 */
	private function purge(array $items, string $indexKey, string $linkKey, string $linkValue): void
	{
		// Get the current index values from the database
		$currentIndexValues = $this->items->table($this->getTable())->values([$linkValue], $linkKey, $indexKey);

		if ($currentIndexValues !== null)
		{
			// Check if the items array is empty
			if (empty($items))
			{
				// Set activeIndexValues to an empty array if items is empty
				$activeIndexValues = [];
			}
			else
			{
				// Extract the index values from the items array
				$activeIndexValues = array_values(array_map(function($item) use ($indexKey) {
					return $item[$indexKey] ?? null;
				}, $items));
			}

			// Find the index values that are no longer in the items array
			$inactiveIndexValues = array_diff($currentIndexValues, $activeIndexValues);

			// Delete the inactive index values
			if (!empty($inactiveIndexValues))
			{
				$this->items->table($this->getTable())->delete($inactiveIndexValues, $indexKey);

				// $this->deleteUsers($inactiveIndexValues); (soon)
			}
		}
	}

	/**
	 * Get the users details found in the user table.
	 *
	 * @param array  $items  Array of objects or arrays to be filtered.
	 *
	 * @return array
	 * @since  5.0.2
	 */
	private function getUsersDetails(array $items): array
	{
		foreach ($items as $index => &$item)
		{
			$item = (array) $item;
			$this->getUserDetails($item);
		}

		return $items;
	}

	/**
	 * Get the user details found in the user table.
	 *
	 * @param array  $item  The user map array
	 *
	 * @return void
	 * @since  5.0.2
	 */
	private function getUserDetails(array &$item): void
	{
		// Validate the user_id and ensure it is numeric and greater than 0
		if (empty($item['user_id']) || !is_numeric($item['user_id']) || $item['user_id'] <= 0)
		{
			return;
		}

		// Retrieve the user by ID
		$user = UserHelper::getUserById((int)$item['user_id']);

		// Verify if the user exists and the ID matches
		if ($user && $user->id === (int) $item['user_id'])
		{
			// Iterate over public properties of the user object
			foreach (get_object_vars($user) as $property => $value)
			{
				// Avoid overwriting the id in the item
				if ($property !== 'id')
				{
					$item[$property] = $value;
				}
			}
		}
	}

	/**
	 * Filters the specified keys from an array of objects or arrays, converts them to arrays,
	 * and sets them by association with a specified key and an incrementing integer.
	 *
	 * @param array  $items  Array of objects or arrays to be filtered.
	 * @param array  $keySet Array of keys to retain in each item.
	 * @param string $field  The field prefix for the resulting associative array.
	 *
	 * @return array Array of filtered arrays set by association.
	 * @since  3.2.2
	 */
	private function converter(array $items, array $keySet, string $field): array
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
					$filteredArray[$key] = $item->{$key};
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
			$result[$field . $index] = $filteredArray;
		}

		return $result;
	}

	/**
	 * Processes an array of arrays based on the specified key.
	 *
	 * @param mixed    $items      Array of arrays to be processed.
	 * @param string   $indexKey   The index key on which the items should be observed as it relates to insert/update/delete
	 * @param string   $linkKey    The link key on which the items where linked in the child table.
	 * @param string   $linkValue  The value of the link key in child table.
	 *
	 * @return array  The processed array of arrays.
	 * @since  3.2.2
	 */
	private function process($items, string $indexKey, string $linkKey, string $linkValue): array
	{
		$items = is_array($items) ? $items : [];
		foreach ($items as &$item)
		{
			$value = $item[$indexKey] ?? '';
			switch ($indexKey) {
				case 'guid':
					if (empty($value))
					{
						// set INDEX
						$item[$indexKey] = $this->getGuid($indexKey);
					}
					break;
				case 'id':
					if (empty($value))
					{
						$item[$indexKey] = 0;
					}
					break;
				default:
					// No action for other keys if empty
					break;
			}
			// set LINK
			$item[$linkKey] = $linkValue;
			// create/update user
			$item['user_id'] = $this->setUserDetails($item);
		}

		return array_values($items);
	}

	/**
	 * Handles setting user details and saving them.
	 *
	 * This function retrieves the user by ID, sets the user details, 
	 * and adds appropriate user groups before saving the user.
	 *
	 * @param array $item The user details passed by reference.
	 *
	 * @return int The ID of the saved user, or 0 on failure.
	 * @since  5.0.2
	 */
	private function setUserDetails(array &$item): int
	{
		$user = $this->loadUser($item);
		$details = $this->extractUserDetails($item, $user);
		$this->assignUserGroups($details, $user, $item);
		
		return $this->saveUserDetails($details, $details['id'] ?? 0);
	}

	/**
	 * Load the user based on the user ID from the item array.
	 *
	 * @param array $item The array containing user details.
	 * 
	 * @return User|null The user object if found, null otherwise.
	 * @since  5.0.2
	 */
	private function loadUser(array $item): ?User
	{
		if (!isset($item['user_id']) || !is_numeric($item['user_id']) || $item['user_id'] <= 0)
		{
			return null;
		}

		$user = UserHelper::getUserById((int) $item['user_id']);

		if ($user && $user->id == $item['user_id'])
		{
			return $user;
		}

		return null;
	}

	/**
	 * Extract user details from the item array and prepare them for saving.
	 *
	 * @param array     $item The array containing user details.
	 * @param User|null $user The user object if found, null otherwise.
	 * 
	 * @return array The prepared user details array.
	 * @since  5.0.2
	 */
	private function extractUserDetails(array &$item, ?User $user): array
	{
		$details = [];

		if ($user !== null)
		{
			$details['id'] = (int) $item['user_id'];
		}

		foreach ($this->user as $property)
		{
			if (isset($item[$property]))
			{
				$details[$property] = $item[$property];
				unset($item[$property]);
			}
		}

		return $details;
	}

	/**
	 * Assigns user groups based on existing groups and entity type.
	 *
	 * @param array     &$details The array to store user details including groups.
	 * @param User|null $user     The user object if found, null otherwise.
	 * @param array     $item     The array containing additional user details.
	 *
	 * @return void
	 * @since 5.0.2
	 */
	private function assignUserGroups(array &$details, ?User $user, array $item): void
	{
		$details['groups'] = $user !== null ? $user->groups : [];

		if (!empty($item['entity_type']))
		{
			$groups = Component::getParams()->get($item['entity_type'] . '_groups', []);
			foreach ($groups as $group)
			{
				if (!in_array($group, $details['groups']))
				{
					$details['groups'][] = $group;
				}
			}
		}
	}

	/**
	 * Save the user details using UserHelper and handle exceptions.
	 *
	 * @param array $details The prepared user details array.
	 * @param int   $userId  The ID of the user being processed.
	 * 
	 * @return int The ID of the saved user, or 0 on failure.
	 * @since 5.0.2
	 */
	private function saveUserDetails(array $details, int $userId): int
	{
		try {
			return UserHelper::save($details);
		} catch (NoUserIdFoundException $e) {
			Factory::getApplication()->enqueueMessage($e->getMessage(), 'error');
		} catch (\Exception $e) {
			Factory::getApplication()->enqueueMessage($e->getMessage(), 'warning');
			return $userId;
		}

		return 0;
	}
}

