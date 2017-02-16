<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TickettypesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TickettypesController Test Case
 */
class TickettypesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tickettypes'
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
        $this->get('/tickettypes');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/tickettypes/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Tickettypes</title>');
		$this->assertResponseContains('Lorem ipsum dolor sit amet');
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
            'name' => 'New Ticketype'
        ];
		
		$this->post('/tickettypes/add', $data);

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
		
		$this->get('/tickettypes/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Tickettypes</title>');
		$this->assertResponseContains('Lorem ipsum dolor sit amet');
		
		$data = [
            'name' => 'Again Lorem ipsum dolor sit amet'
        ];
        $this->post('/tickettypes/edit/1', $data);

        $this->assertResponseSuccess();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
		/*
		$this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->delete('/tickettypes/delete/1');
		$this->assertResponseOk();*/
    }
}
