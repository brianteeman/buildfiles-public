<?php
/**
 * @package   buildfiles
 * @copyright Copyright (c)2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace tasks;

use Phing\Project;
use Phing\Task;
use PhpStormSourceHandling;

/**
 * This file is inert in Akeeba Build Tools — Public Packager
 */
class PhpStormSources extends Task
{
	/**
	 * The path to the repository root
	 *
	 * @var   string|null
	 */
	private $repository = null;

	/**
	 * Set the repository root folder
	 *
	 * @param   string  $repository  The new repository root folder
	 *
	 * @return  void
	 */
	public function setRepository(string $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @inheritDoc
	 */
	public function main()
	{
		return true;
	}
}