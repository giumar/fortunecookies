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
        $this->get('/admin/users');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/admin/users/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');
		$this->assertResponseContains('info@example.com');
    }

    /**
     * Test add user method with valid email
     *
     * @return void
     */
    public function testAddNewUserValidEmail()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();

		$data = [
            'email' => 'new-user@example.com',
            'password' => 'new-password'
        ];
		
		$this->post('/admin/users/add', $data);

        $this->assertResponseSuccess();
		$this->assertRedirect(['prefix'=>'admin', 'controller'=>'users', 'action' => 'index']);
    }
	
	/**
     * Test add user method without valid email
     *
     * @return void
     */
    public function testAddNewUserNotValidEmail()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();

		$data = [
            'email' => 'new-user@example-wrong',
            'password' => 'new-password'
        ];
		
		$this->post('/admin/users/add', $data);

        $this->assertResponseOk();
		$this->assertResponseContains('The user could not be saved. Please, try again.');
    }
	
	/**
     * Test add user method without a password
     *
     * @return void
     */
    public function testAddNewUserWithoutPassword()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();

		$data = [
            'email' => 'new-user@example-wrong',
            'password' => ''
        ];
		
		$this->post('/admin/users/add', $data);

        $this->assertResponseOk();
		$this->assertResponseContains('The user could not be saved. Please, try again.');
    }
	

    /**
     * Test edit method with new valid parameters
     *
     * @return void
     */
    public function testEditWithNewValidEmailAndPassword()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->get('/admin/users/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');
		$this->assertResponseContains('info@example.com');
		
		$data = [
            'email' => 'new-info@example.com',
            'password' => 'new-password'
        ];
        $this->post('/admin/users/edit/1', $data);

        $this->assertResponseSuccess();
		$this->assertRedirect(['prefix'=>'admin', 'controller'=>'users', 'action' => 'index']);
		
    }

/**
     * Test edit method with new valid parameters
     *
     * @return void
     */
    public function testEditWithNewValidEmailAndNotValidPassword()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->get('/admin/users/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');
		$this->assertResponseContains('info@example.com');
		
		$data = [
            'email' => 'new-info@example.com',
            'password' => ''
        ];
        $this->post('/admin/users/edit/1', $data);

		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');		
		$this->assertResponseContains('The user could not be saved. Please, try again.');
		
    }

/**
     * Test edit method with new valid parameters
     *
     * @return void
     */
    public function testEditWithNewNotValidEmailAndValidPassword()
    {
        $this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->get('/admin/users/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');
		$this->assertResponseContains('info@example.com');
		
		$data = [
            'email' => 'new-info@.com',
            'password' => 'new-password'
        ];
        $this->post('/admin/users/edit/1', $data);

		$this->assertResponseOk();
		$this->assertResponseContains('<title>Admin\Users</title>');		
		$this->assertResponseContains('The user could not be saved. Please, try again.');
		
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
		
		$this->delete('/admin/users/delete/1');
		$this->assertRedirect();
    }
	
	/**
     * Test delete method
     *
     * @return void
     */
    public function testLogout()
    {
        $this->get('/admin/users/logout');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }
}
