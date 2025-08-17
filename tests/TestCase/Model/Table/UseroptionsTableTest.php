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
    protected array $fixtures = [
        'app.Useroptions',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Useroptions') ? [] : ['className' => 'App\Model\Table\UseroptionsTable'];
        $this->Useroptions = $this->getTableLocator()->get('Useroptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
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
