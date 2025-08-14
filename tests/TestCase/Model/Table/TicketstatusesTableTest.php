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
    protected array $fixtures = [
        'app.Ticketstatuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ticketstatuses') ? [] : ['className' => 'App\Model\Table\TicketstatusesTable'];
        $this->Ticketstatuses = $this->getTableLocator()->get('Ticketstatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
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
