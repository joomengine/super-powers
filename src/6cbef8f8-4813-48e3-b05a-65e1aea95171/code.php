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


use Joomla\CMS\Factory;
use Joomla\Database\DatabaseInterface as JoomlaDatabase;
use VDM\Joomla\Utilities\Component\Helper;


/**
 * Database
 * 
 * @since 3.2.0
 */
abstract class Database
{
	/**
	 * Database object to query local DB
	 *
	 * @var JoomlaDatabase
	 * @since 3.2.0
	 */
	protected JoomlaDatabase $db;

	/**
	 * Date format to return
	 *
	 * @var   string
	 * @since 5.0.2
	 */
	protected string $dateFormat = 'Y-m-d H:i:s';

	/**
	 * Current component code name
	 *
	 * @var     string
	 * @since 5.1.1
	 */
	protected string $componentCode;

	/**
	 * Core Component Table Name
	 *
	 * @var   string
	 * @since 3.2.0
	 */
	protected string $table;

	/**
	 * Constructor
	 *
	 * @throws \Exception
	 * @since 3.2.0
	 */
	public function __construct(?JoomlaDatabase $db = null)
	{
		$this->db = $db ?: Factory::getContainer()->get(JoomlaDatabase::class);

		$this->componentCode = Helper::getCode();
		$this->table = '#__' . $this->componentCode;
	}

	/**
	 * Safely quote a value for database use, preserving data integrity.
	 *
	 * - Native ints/floats passed as-is
	 * - Clean integer strings are cast to int
	 * - Clean float strings are cast to float
	 * - Scientific notation is quoted to preserve original form
	 * - Leading-zero integers are quoted
	 * - Dates are formatted and quoted
	 * - Booleans are converted to TRUE/FALSE
	 * - Null is converted to NULL
	 * - All else is quoted with Joomla's db quote
	 *
	 * @param   mixed  $value  The value to quote.
	 *
	 * @return  mixed
	 * @since   3.2.0
	 */
	protected function quote($value)
	{
		// NULL handling
		if ($value === null)
		{
			return 'NULL';
		}

		// DateTime handling
		if ($value instanceof \DateTimeInterface)
		{
			return $this->db->quote($value->format($this->getDateFormat()));
		}

		// Native numeric types
		if (is_int($value) || is_float($value))
		{
			return $value;
		}

		// Stringified numeric values
		if (is_string($value) && is_numeric($value))
		{
			// Case 1: Leading-zero integers like "007"
			if ($value[0] === '0' && strlen($value) > 1 && ctype_digit($value))
			{
				return $this->db->quote($value);
			}

			// Case 2: Scientific notation - preserve exact format
			if (stripos($value, 'e') !== false)
			{
				return $this->db->quote($value);
			}

			// Case 3: Decimal float string (not scientific)
			if (str_contains($value, '.'))
			{
				return (float) $value;
			}

			// Case 4: Pure integer string
			if (ctype_digit($value))
			{
				return (int) $value;
			}
		}

		// Boolean handling
		if (is_bool($value))
		{
			return $value ? 'TRUE' : 'FALSE';
		}

		// Everything else
		return $this->db->quote($value);
	}

	/**
	 * Set a table name, adding the
	 *     core component as needed
	 *
	 * @param   string  $table   The table string
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	protected function getTable(string $table): string
	{
		if (strpos($table, '#__') === false)
		{
			return $this->table . '_' . $table;
		}

		return $table;
	}
}

