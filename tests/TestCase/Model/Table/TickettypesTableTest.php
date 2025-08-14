<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TickettypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TickettypesTable Test Case
 */
class TickettypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TickettypesTable
     */
    public $Tickettypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected array $fixtures = [
        'app.Tickettypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tickettypes') ? [] : ['className' => 'App\Model\Table\TickettypesTable'];
        $this->Tickettypes = $this->getTableLocator()->get('Tickettypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
    {
        unset($this->Tickettypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $ris = $this->Tickettypes->find('all')->toArray();
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
