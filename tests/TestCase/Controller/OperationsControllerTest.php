<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OperationsController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\I18n\Time;

/**
 * App\Controller\OperationsController Test Case
 */
class OperationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.operations',
        'app.tickets'
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
        $this->get('/operations');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/operations/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Operations</title>');
		$time = new Time('2017-02-07 04:19:45');
		$this->assertResponseContains(h($time));
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
			'ticket_id'=> 1,
            'start' => '2017-02-07 00:00:01',
            'end' => '2017-02-07 01:59:59'
        ];
		
		$this->post('/operations/add', $data);

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
		
		$this->get('/operations/edit/1');
		$this->assertResponseOk();
		
		$data = [
            'start' => '2017-02-07 00:00:01',
            'end' => '2017-02-07 01:59:59'
        ];
        $this->post('/operations/edit/1', $data);

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
		
		$this->delete('/operations/delete/1');
		$this->assertResponseOk();*/
    }
}
