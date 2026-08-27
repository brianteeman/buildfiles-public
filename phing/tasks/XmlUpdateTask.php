<?php
/**
 * @package   buildfiles
 * @copyright Copyright (c)2010-2026 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace tasks;

use DOMDocument;
use DOMNode;
use Phing\Task;

/**
 * This file is inert in Akeeba Build Tools — Public Packager
 */
class XmlUpdateTask extends Task
{

	private ?string $xml = null;

	private ?string $tofile = null;

	public function setXml(string $xml)
	{
		$this->xml = $xml;
	}

	public function setTofile(string $tofile)
	{
		$this->tofile = $tofile;
	}

	/**
	 * @inheritDoc
	 */
	public function main()
	{
		return true;
	}
}