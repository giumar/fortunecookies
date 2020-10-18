<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UseroptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UseroptionsTable Test Case
 */
class UseroptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UseroptionsTable
     */
    public $Useroptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.useroptions',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Useroptions') ? [] : ['className' => 'App\Model\Table\UseroptionsTable'];
        $this->Useroptions = TableRegistry::get('Useroptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Useroptions);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}