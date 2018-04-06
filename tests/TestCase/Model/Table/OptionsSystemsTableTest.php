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
    public $fixtures = [
        'app.options_systems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionsSystems') ? [] : ['className' => OptionsSystemsTable::class];
        $this->OptionsSystems = TableRegistry::get('OptionsSystems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
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
