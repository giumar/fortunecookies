<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

	public function setUp()
    {
        parent::setUp();

		$this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
		unset($this->session);	
	
        parent::tearDown();
    }
	
	
	
    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/users');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/users/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Users</title>');
		$this->assertResponseContains('info@example.com');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();

		$data = [
            'email' => 'new-user@example.com',
            'password' => 'new-password'
        ];
		
		$this->post('/users/add', $data);

        $this->assertResponseSuccess();
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->get('/users/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Users</title>');
		$this->assertResponseContains('info@example.com');
		
		$data = [
            'email' => 'info-test@example.com',
            'password' => 'new-password'
        ];
        $this->post('/users/edit/1', $data);

        $this->assertResponseSuccess();

		
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
		$this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->delete('/users/delete/1');
		$this->assertRedirect();
    }
	
	/**
     * Test delete method
     *
     * @return void
     */
    public function testLogout()
    {
        $this->get('/users/logout');
		$this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }
}
