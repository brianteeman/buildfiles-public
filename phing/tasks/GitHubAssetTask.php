<?php
/**
 * @package   buildfiles
 * @copyright Copyright (c)2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace tasks;

use Phing\Exception\BuildException;

if (!class_exists('GitHubTask'))
{
	require_once __DIR__ . '/library/GitHubTask.php';
}

/**
 * This file is inert in Akeeba Build Tools — Public Packager
 */
class GitHubAssetTask extends \GitHubTask
{
	/**
	 * The ID of the release where the assets will be uploaded to
	 *
	 * @var   int
	 */
	protected $releaseId = null;

	/**
	 * Content type for the file. Defaults to MIME auto-detection.
	 *
	 * @var   string
	 */
	protected $contentType;

	/**
	 * The file name as it will be reported by GitHub. Defaults to the basename of the uploaded file.
	 *
	 * @var   string
	 */
	protected $remoteName = '';

	/**
	 * The description of the file shown in the GitHub release page instead of the filename
	 *
	 * @var   string
	 */
	protected $label = '';

	/**
	 * The full path to the file to upload
	 *
	 * @var   string
	 */
	protected $file = '';

	/**
	 * The Phing property I will set with the public download URL of the asset
	 *
	 * @var   string
	 */
	protected $downloadProperty = 'github.asset.url';

	/**
	 * The Phing property I will set with the GitHub ID of the asset
	 *
	 * @var   string
	 */
	protected $idProperty = 'github.asset.id';

	/**
	 * Called by the project to let the task do its work.
	 *
	 * @throws   BuildException  If an build error occurs.
	 */
	public function main()
	{
		parent::main();

		return true;
	}

	/**
	 * Set the Release ID we're uploading to
	 *
	 * @param   int  $releaseId
	 *
	 * @return  void
	 */
	public function setReleaseId(int $releaseId)
	{
		$this->releaseId = $releaseId;
	}

	/**
	 * Set the MIME content type of the uploaded file
	 *
	 * @param   string  $contentType
	 *
	 * @return  void
	 */
	public function setContentType(string $contentType)
	{
		$this->contentType = $contentType;
	}

	/**
	 * Set the filename on GitHub
	 *
	 * @param   string  $remoteName
	 *
	 * @return  void
	 */
	public function setRemoteName(string $remoteName)
	{
		$this->remoteName = $remoteName;
	}

	/**
	 * Set the label which will be used instead of the filename on GitHub
	 *
	 * @param   string  $label
	 *
	 * @return  void
	 */
	public function setLabel(string $label)
	{
		$this->label = $label;
	}

	/**
	 * Set the file to upload
	 *
	 * @param   string  $file
	 *
	 * @return  void
	 */
	public function setFile(string $file)
	{
		$this->file = $file;
	}

	/**
	 * Set the Phing property to save the public download URL to
	 *
	 * @param   string  $downloadProperty
	 *
	 * @return  void
	 */
	public function setDownloadProperty(string $downloadProperty)
	{
		$this->downloadProperty = $downloadProperty;
	}

	/**
	 * Set the Phing property to save the asset ID to
	 *
	 * @param   string  $idProperty
	 *
	 * @return  void
	 */
	public function setIdProperty(string $idProperty)
	{
		$this->idProperty = $idProperty;
	}
}
