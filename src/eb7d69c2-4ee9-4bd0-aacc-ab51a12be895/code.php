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

namespace VDM\Joomla\Data\Remote;


use VDM\Joomla\Interfaces\GrepInterface as Grep;
use VDM\Joomla\Interfaces\Data\ItemsInterface as Items;
use VDM\Joomla\Interfaces\Readme\ItemInterface as ItemReadme;
use VDM\Joomla\Interfaces\Readme\MainInterface as MainReadme;
use VDM\Joomla\Gitea\Repository\Contents as Git;
use VDM\Joomla\Interfaces\Data\RemoteSetInterface;


/**
 * Set data based on global unique ids to remote repository
 * 
 * @since 3.2.2
 */
class Set implements RemoteSetInterface
{
	/**
	 * The Grep Class.
	 *
	 * @var   Grep
	 * @since 3.2.2
	 */
	protected Grep $grep;

	/**
	 * The Items Class.
	 *
	 * @var   Items
	 * @since 3.2.2
	 */
	protected Items $items;

	/**
	 * The Item Readme Class.
	 *
	 * @var   ItemReadme
	 * @since 3.2.2
	 */
	protected ItemReadme $itemReadme;

	/**
	 * The Main Readme Class.
	 *
	 * @var   MainReadme
	 * @since 3.2.2
	 */
	protected MainReadme $mainReadme;

	/**
	 * The Contents Class.
	 *
	 * @var   Git
	 * @since 3.2.2
	 */
	protected Git $git;

	/**
	 * All active repos
	 *
	 * @var   array
	 * @since 3.2.0
	 **/
	public array $repos;

	/**
	 * Table Name
	 *
	 * @var   string
	 * @since 3.2.1
	 */
	protected string $table;

	/**
	 * The item map
	 *
	 * @var   array
	 * @since 3.2.2
	 */
	protected array $map;

	/**
	 * The repo main settings
	 *
	 * @var   array
	 * @since 3.2.2
	 */
	protected array $settings;

	/**
	 * The item settings file path
	 *
	 * @var   string
	 * @since 3.2.2
	 */
	protected string $settings_path = 'item.json';

	/**
	 * Constructor.
	 *
	 * @param array        $repos          The active repos
	 * @param Grep         $grep           The Grep Class.
	 * @param Items        $items          The Items Class.
	 * @param ItemReadme   $itemReadme     The Item Readme Class.
	 * @param MainReadme   $mainReadme     The Main Readme Class.
	 * @param Git          $git            The Contents Class.
	 * @param string|null  $table          The table name.
	 * @param string|null  $settingsPath   The settings path.
	 *
	 * @since 3.2.2
	 */
	public function __construct(array $repos, Grep $grep, Items $items,
		ItemReadme $itemReadme, MainReadme $mainReadme, Git $git,
		?string $table = null, ?string $settingsPath = null)
	{
		$this->repos = $repos;
		$this->grep = $grep;
		$this->items = $items;
		$this->itemReadme = $itemReadme;
		$this->mainReadme = $mainReadme;
		$this->git = $git;

		if ($table !== null)
		{
			$this->table = $table;
		}

		if ($settingsPath !== null)
		{
			$this->settings_path = $settingsPath;
		}

		// set the branch to writing
		$this->grep->setBranchField('write_branch');
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
	 * Set the settings path
	 *
	 * @param string    $settingsPath    The repository settings path
	 *
	 * @return self
	 * @since 3.2.2
	 */
	public function setSettingsPath(string $settingsPath): self
	{
		$this->settings_path = $settingsPath;

		return $this;
	}

	/**
	 * Save items remotely
	 *
	 * @param array   $guids    The global unique id of the item
	 *
	 * @return bool
	 * @throws \Exception
	 * @since 3.2.2
	 */
	public function items(array $guids): bool
	{
		if (!$this->canWrite())
		{
			throw new \Exception("At least one [Item] content repository must be configured with a [Write Branch] value in the repositories area for the push function to operate correctly.");
		}

		// we reset the index settings
		$this->settings = [];

		if (($items = $this->getLocalItems($guids)) === null)
		{
			throw new \Exception("At least one valid local [Item] must exist for the push function to operate correctly.");
		}

		foreach ($items as $item)
		{
			$this->save($item);
		}

		// update the repos main readme and index settings
		if ($this->settings !== [])
		{
			foreach ($this->settings as $repo)
			{
				$this->saveRepoMainSettings($repo);
			}
		}

		return true;
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
	 * update an existing item (if changed)
	 *
	 * @param object $item
	 * @param object $existing
	 * @param object $repo
	 *
	 * @return bool
	 * @since 3.2.2
	 */
	abstract protected function updateItem(object $item, object $existing, object $repo): bool;

	/**
	 * create a new item
	 *
	 * @param object  $item
	 * @param object  $repo
	 *
	 * @return void
	 * @since 3.2.2
	 */
	abstract protected function createItem(object $item, object $repo): void;

	/**
	 * update an existing item readme
	 *
	 * @param object $item
	 * @param object $existing
	 * @param object $repo
	 *
	 * @return void
	 * @since 3.2.2
	 */
	abstract protected function updateItemReadme(object $item, object $existing, object $repo): void;

	/**
	 * create a new item readme
	 *
	 * @param object  $item
	 * @param object  $repo
	 *
	 * @return void
	 * @since 3.2.2
	 */
	abstract protected function createItemReadme(object $item, object $repo): void;

	/**
	 * Update/Create the repo main readme and index
	 *
	 * @param array  $repo
	 *
	 * @return void
	 * @since 3.2.2
	 */
	abstract protected function saveRepoMainSettings(array $repo): void;

	/**
	 * Get items
	 *
	 * @param array $guids The global unique id of the item
	 *
	 * @return array|null
	 * @since 3.2.2
	 */
	protected function getLocalItems(array $guids): ?array
	{
		$items = $this->fetchLocalItems($guids);

		if ($items === null)
		{
			return null;
		}

		return $this->mapItems($items);
	}

	/**
	 * Save an item remotely
	 *
	 * @param  object   $item    The item to save
	 *
	 * @return void
	 * @since 3.2.2
	 */
	protected function save(object $item): void
	{
		foreach ($this->repos as $key => $repo)
		{
			if (empty($repo->write_branch) || $repo->write_branch === 'default')
			{
				continue;
			}

			$this->git->load_($repo->base ?? null, $repo->token ?? null);

			if (($existing = $this->grep->get($guid, ['remote'], $repo)) !== null)
			{
				if ($this->updateItem($item, $existing, $repo))
				{
					$this->updateItemReadme($item, $existing, $repo);
				}
			}
			else
			{
				$this->createItem($item, $repo);

				$this->createItemReadme($item, $repo);

				if (!isset($this->settings[$key]))
				{
					$this->settings[$key] = ['repo' => $repo, 'items' => [$item]);
				}
				else
				{
					$this->settings[$key]['items'][] = $item;
				}
			}

			$this->git->reset_();
		}
	}

	/**
	 * Fetch items from the database
	 *
	 * @param array $guids The global unique ids of the items
	 *
	 * @return array|null
	 * @since 3.2.2
	 */
	protected function fetchLocalItems(array $guids): ?array
	{
		return $this->items->table($this->table)->get($guids);
	}

	/**
	 * Map items to their properties
	 *
	 * @param array $items The items fetched from the database
	 *
	 * @return array
	 * @since 3.2.2
	 */
	protected function mapItems(array $items): array
	{
		$bucket = [];

		foreach ($items as $item)
		{
			if (!isset($item->guid))
			{
				continue;
			}

			$bucket[$item->guid] = $this->mapItem($item);
		}

		return $bucket;
	}

	/**
	 * Map a single item to its properties
	 *
	 * @param object $item The item to be mapped
	 *
	 * @return object
	 * @since 3.2.2
	 */
	protected function mapItem(object $item): object
	{
		$power = [];

		foreach ($this->map as $key => $map)
		{
			$power[$key] = $item->{$map} ?? null;
		}

		return (object) $power;
	}

	/**
	 * check that we have an active repo towards which we can write data
	 *
	 * @return bool
	 * @since 3.2.2
	 */
	protected function canWrite(): bool
	{
		foreach ($this->repos as $repo)
		{
			if (!empty($repo->write_branch) && $repo->write_branch !== 'default')
			{
				return true;
			}
		}

		return false;
	}

	/**
	 * Checks if two objects are equal by comparing their JSON representations.
	 *
	 * This method converts both input objects to JSON strings and compares these strings.
	 * If the JSON strings are identical, the objects are considered equal.
	 *
	 * @param object $obj1 The first object to compare.
	 * @param object $obj2 The second object to compare.
	 *
	 * @return bool True if the objects are equal, false otherwise.
	 * @since 3.2.2
	 */
	protected function areObjectsEqual(object $obj1, object $obj2): bool
	{
		// Convert both objects to JSON strings
		$json1 = json_encode($obj1);
		$json2 = json_encode($obj2);

		// Compare the JSON strings
		return $json1 === $json2;
	}

	/**
	 * Get the settings path
	 *
	 * @return string
	 * @since 3.2.2
	 */
	protected function getSettingsPath(): string
	{
		return $this->settings_path;
	}
}

