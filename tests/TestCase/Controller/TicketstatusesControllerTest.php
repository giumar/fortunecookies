<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TicketstatusesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TicketstatusesController Test Case
 */
class TicketstatusesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticketstatuses'
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
		$this->get('/ticketstatuses');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/ticketstatuses/view/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Ticketstatuses</title>');
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
            'name' => 'New Ticket Status'
        ];
		
		$this->post('/ticketstatuses/add', $data);

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
		
		$this->get('/ticketstatuses/edit/1');
		$this->assertResponseOk();
		$this->assertResponseContains('<title>Ticketstatuses</title>');
		$this->assertResponseContains('Lorem ipsum dolor sit amet');
		
		$data = [
            'name' => 'Again Lorem ipsum dolor sit amet'
        ];
        $this->post('/ticketstatuses/edit/1', $data);

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

		$this->enableCsrfToken();
		$this->enableSecurityToken();
		
		$this->delete('/ticketstatuses/delete/1');
		$this->assertRedirect();
    }
}
