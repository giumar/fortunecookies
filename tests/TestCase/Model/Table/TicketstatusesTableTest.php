<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketstatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketstatusesTable Test Case
 */
class TicketstatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketstatusesTable
     */
    public $Ticketstatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticketstatuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ticketstatuses') ? [] : ['className' => 'App\Model\Table\TicketstatusesTable'];
        $this->Ticketstatuses = TableRegistry::get('Ticketstatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ticketstatuses);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $ris = $this->Ticketstatuses->find('all')->toArray();
		$this->assertGreaterThan(0, count($ris));
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
