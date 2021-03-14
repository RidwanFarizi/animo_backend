<?php namespace Tests\Support;

use CodeIgniter\Session\Handlers\ArrayHandler;
<<<<<<< HEAD
use CodeIgniter\Session\SessionInterface;
=======
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Mock\MockSession;

class SessionTestCase extends CIUnitTestCase
{
	/**
<<<<<<< HEAD
	 * @var SessionInterface
=======
	 * @var SessionHandler
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	 */
	protected $session;

	public function setUp(): void
	{
		parent::setUp();

		$this->mockSession();
	}

	/**
	 * Pre-loads the mock session driver into $this->session.
	 *
	 * @var string
	 */
	protected function mockSession()
	{
		$config        = config('App');
		$this->session = new MockSession(new ArrayHandler($config, '0.0.0.0'), $config);
		\Config\Services::injectMock('session', $this->session);
	}
}
