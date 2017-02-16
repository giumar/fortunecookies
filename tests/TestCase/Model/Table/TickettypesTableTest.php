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
    public $fixtures = [
        'app.tickettypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tickettypes') ? [] : ['className' => 'App\Model\Table\TickettypesTable'];
        $this->Tickettypes = TableRegistry::get('Tickettypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
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
