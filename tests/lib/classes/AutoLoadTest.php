<?php

require_once 'PHPUnit/Autoload.php';

class AutoLoadTest extends PHPUnit_Framework_TestCase
{
	private $folderPath;

	public function __construct()
	{
		$this->folderPath = str_replace('/', '\\', dirname(__DIR__, 1));

		spl_autoload_register([$this, 'testLoadInterfaces']);
		spl_autoload_register([$this, 'testLoadTemplates']);
		spl_autoload_register([$this, 'testLoadClasses']);
	}

	private function testLoadInterfaces()
	{
		return $this->testLoadFiles('interfaces');
	}

	private function testLoadTemplates()
	{
		return $this->testLoadFiles('templates');
	}

	private function testLoadClasses()
	{
		return $this->testLoadFiles('classes');
	}

	private function testLoadFiles(string $folder)
	{
		$this->assertContains('\tests\lib', $this->folderPath);
		
		$files = array_slice(scandir($this->folderPath.'\\'.$folder.'\\'), 2);

		$this->assertTrue(count($files) > 0);
		$this->assertContainsOnly('string', $files);
		$this->assertContains('.php', $files[0]);

		foreach ($files as &$archive)
		{
			require_once $this->folderPath.'\\'.$folder.'\\'.$archive;
		}
	}
}

new AutoLoadTest;