<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonitorsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonitorsUsersTable Test Case
 */
class MonitorsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonitorsUsersTable
     */
    public $MonitorsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monitors_users',
        'app.monitors',
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
        $config = TableRegistry::getTableLocator()->exists('MonitorsUsers') ? [] : ['className' => MonitorsUsersTable::class];
        $this->MonitorsUsers = TableRegistry::getTableLocator()->get('MonitorsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MonitorsUsers);

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
