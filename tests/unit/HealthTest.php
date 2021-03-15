<?php

class HealthTest extends \CodeIgniter\Test\CIUnitTestCase
{
	public function setUp(): void
	{
		parent::setUp();
	}

	public function testIsDefinedAppPath()
	{
		$test = defined('APPPATH');

		$this->assertTrue($test);
	}

	public function testBaseUrlHasBeenSet()
	{
		$env = $config = false;

		// First check in .env
		if (is_file(HOMEPATH . '.env'))
		{
			$env = (bool) preg_grep("/^app\.baseURL = './", file(HOMEPATH . '.env'));
		}

		// Then check the actual config file
		$reader = new \Tests\Support\Libraries\ConfigReader();
<<<<<<< HEAD
		$config = ! empty($reader->baseURL);
=======
		$config = ! empty($reader->baseUrl);
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20

		$this->assertTrue($env || $config);
	}
}
