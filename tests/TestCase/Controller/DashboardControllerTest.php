<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DashboardController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OperationsController Test Case
 */
class DashboardControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndexUnauthenticaded()
    {
        $this->get('/dashboard');

        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }
	
	public function testIndexAuthenticaded()
    {
		$this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		$this->get('/dashboard');

		$this->assertResponseOk();
    }
	
}
