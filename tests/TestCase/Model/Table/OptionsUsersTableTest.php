<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsUsersTable Test Case
 */
class OptionsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsUsersTable
     */
    public $OptionsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OptionsUsers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() : void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OptionsUsers') ? [] : ['className' => OptionsUsersTable::class];
        $this->OptionsUsers = $this->getTableLocator()->get('OptionsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() : void
    {
        unset($this->OptionsUsers);

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
