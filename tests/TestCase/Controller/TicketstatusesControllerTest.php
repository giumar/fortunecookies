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
        'app.Ticketstatuses'
    ];

	public function setUp() : void
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
    public function tearDown() : void
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
		$this->get('/admin/ticketstatuses');
		$this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        // $this->get('/admin/ticketstatuses/view/1');
		// $this->assertResponseOk();
		// $this->assertResponseContains('<title>Admin\Ticketstatuses</title>');
		// $this->assertResponseContains('Lorem ipsum dolor sit amet');
		$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
		
		// $this->enableCsrfToken();
		// $this->enableSecurityToken();

		// $data = [
            // 'name' => 'New Ticket Status'
        // ];
		
		// $this->post('/admin/ticketstatuses/add', $data);

        // $this->assertResponseSuccess();
		$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        // $this->enableCsrfToken();
		// $this->enableSecurityToken();
		
		// $this->get('/admin/ticketstatuses/edit/1');
		// $this->assertResponseOk();
		// $this->assertResponseContains('<title>Admin\Ticketstatuses</title>');
		// $this->assertResponseContains('Lorem ipsum dolor sit amet');
		
		// $data = [
            // 'name' => 'Again Lorem ipsum dolor sit amet'
        // ];
        // $this->post('/admin/ticketstatuses/edit/1', $data);

        // $this->assertResponseSuccess();
		$this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
		// $this->enableCsrfToken();
		// $this->enableSecurityToken();
		
		// $this->delete('/admin/ticketstatuses/delete/1');
		// $this->assertRedirect();
		$this->markTestIncomplete('Not implemented yet.');
    }
}
