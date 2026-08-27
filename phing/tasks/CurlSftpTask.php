<?php
/**
 * @package   buildfiles
 * @copyright Copyright (c)2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace tasks;

use Phing\Exception\BuildException;
use Phing\Project;
use Phing\Task\Ext\Ssh\ScpTask;
use RuntimeException;

/**
 * This file is inert in Akeeba Build Tools — Public Packager
 */
class CurlSftpTask extends ScpTask
{
	protected $useSSH2 = true;

	public function main()
	{
		return true;
	}
}