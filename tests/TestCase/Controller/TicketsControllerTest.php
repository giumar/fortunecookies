<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TicketsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TicketsController Test Case
 */
class TicketsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
		'app.ticketstatuses',
        'app.tickettypes',
        'app.tickets',
        'app.operations',        
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
        $this->get('/tickets/index');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/tickets/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Tickets</title>');
		
		//Test header as <h3> and Ticket ID inside a badge class. See https://github.com/giumar/fortunecookies/issues/21
		//
		$this->assertResponseContains('<div class="panel-heading"><h3><span class="label label-default">#1</span> ');
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

		$this->get('/tickets/add/');
		$this->assertResponseOk();
		
		$data = [
            'title' => 'New ticket',
			'ticketstatus_id'=>1,
			'tickettype_id'=>1,
        ];
		
		$this->post('/tickets/add', $data);

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
		
		$this->get('/tickets/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Tickets</title>');
		$this->assertResponseContains('Lorem ipsum dolor sit amet');
		
		$data = [
            'email' => 'Again Lorem ipsum dolor sit amet'
        ];
        $this->post('/tickets/edit/1', $data);

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
		
		$this->delete('/tickets/delete/1');
		$this->assertRedirect();
    }
	
	/**
     * Test addOperation method
     *
     * @return void
     */
    public function testAddOperation()
    {

		$this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->get('/tickets/addoperation/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Tickets</title>');
		
		$data = [
            'start' => '2017-01-01 00:01',
            'end' => '2017-01-01 01:01',
			//'ticket_id' => '1',
            'description' => 'New description',
        ];
		
		$this->post('/tickets/addoperation/1', $data);
        $this->assertResponseSuccess();
    }
	
}
