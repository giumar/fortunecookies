<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SiteoptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SiteoptionsTable Test Case
 */
class SiteoptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SiteoptionsTable
     */
    public $Siteoptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.siteoptions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = TableRegistry::exists('Siteoptions') ? [] : ['className' => 'App\Model\Table\SiteoptionsTable'];
        $this->Siteoptions = TableRegistry::get('Siteoptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
    {
        unset($this->Siteoptions);

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
