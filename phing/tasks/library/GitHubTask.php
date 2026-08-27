<?php
/**
 * @package   buildfiles
 * @copyright Copyright (c)2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

/**
 * This file is inert in Akeeba Build Tools — Public Packager
 */
abstract class GitHubTask extends \Phing\Task
{
	/**
	 * The GitHub client object
	 *
	 * @var   object|null
	 */
	protected $client;

	/**
	 * The organization the repository belongs to. That's the part after github.com in the repo's URL.
	 *
	 * @var   string
	 */
	protected $organization;

	/**
	 * The name of the repository. That's the part after github.com/yourOrganization in the repo's URL.
	 *
	 * @var   string
	 */
	protected $repository;

	/**
	 * GitHub API token
	 *
	 * @var   string
	 */
	protected $token;

	/**
	 * Set the repository's organization
	 *
	 * @param   string  $organization
	 *
	 * @return  void
	 */
	public function setOrganization($organization)
	{
		$this->organization = $organization;
	}

	/**
	 * Set the repository's name
	 *
	 * @param   string  $repository
	 *
	 * @return  void
	 */
	public function setRepository($repository)
	{
		$this->repository = $repository;
	}

	/**
	 * Set the GitHub token
	 *
	 * @param   string  $token
	 *
	 * @return  void
	 */
	public function setToken($token)
	{
		$this->token = $token;
	}

	public function init()
	{
		// No-op
	}

	public function main()
	{
		// No-op
	}
}
