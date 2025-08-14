<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsSystemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsSystemsTable Test Case
 */
class OptionsSystemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsSystemsTable
     */
    public $OptionsSystems;

    /**
     * Fixtures
     *
     * @var array
     */
    protected array $fixtures = [
        'app.OptionsSystems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OptionsSystems') ? [] : ['className' => OptionsSystemsTable::class];
        $this->OptionsSystems = $this->getTableLocator()->get('OptionsSystems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
    {
        unset($this->OptionsSystems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
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
