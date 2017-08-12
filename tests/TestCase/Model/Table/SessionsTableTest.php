<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SessionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SessionsTable Test Case
 */
class SessionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SessionsTable
     */
    public $SessionsTable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sessions',
        'app.projects',
        'app.clients',
        'app.fiscal_data',
        'app.countries',
        'app.tickets',
        'app.invoices',
        'app.currencies',
        'app.budgets',
        'app.transactions',
        'app.states',
        'app.comments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sessions') ? [] : [
            'className' => SessionsTable::class
        ];
        $this->SessionsTable = TableRegistry::get('Sessions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SessionsTable);
        
        parent::tearDown();
    }

    /**
     * Test findOngoingSessions method
     *
     * @return void
     */
    public function testFindOngoingSessions()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findTodaysDetail method
     *
     * @return void
     */
    public function testFindTodaysDetail()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findTodaysSummary method
     *
     * @return void
     */
    public function testFindTodaysSummary()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findTodaysTotal method
     *
     * @return void
     */
    public function testFindTodaysTotal()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findLastDaysTotal method
     *
     * @return void
     */
    public function testFindLastDaysTotal()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findLastProject method
     *
     * @return void
     */
    public function testFindLastProject()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
