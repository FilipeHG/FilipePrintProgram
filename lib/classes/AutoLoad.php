<?php

namespace FilipePrintProgram\lib\classes;

class AutoLoad
{
	private $folderPath;

	public function __construct()
	{
		$this->folderPath = str_replace('/', '\\', dirname(__DIR__, 1));

		spl_autoload_register([$this, 'loadInterfaces']);
		spl_autoload_register([$this, 'loadTemplates']);
		spl_autoload_register([$this, 'loadClasses']);
	}

	private function loadInterfaces()
	{
		return $this->loadFiles('interfaces');
	}

	private function loadTemplates()
	{
		return $this->loadFiles('templates');
	}

	private function loadClasses()
	{
		return $this->loadFiles('classes');
	}

	private function loadFiles(string $folder)
	{
		$files = array_slice(scandir($this->folderPath.'\\'.$folder.'\\'), 2);

		foreach ($files as &$archive)
		{
			require_once $this->folderPath.'\\'.$folder.'\\'.$archive;
		}
	}
}

new AutoLoad;