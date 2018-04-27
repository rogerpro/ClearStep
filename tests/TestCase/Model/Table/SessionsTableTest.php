<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SessionsTable;
use Cake\Chronos\Chronos;
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

        // Set the date to match dates on fixtures
        Chronos::setTestNow(new Chronos('2017-08-13 12:00:00'));
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
     * Test findTodaysSummary method
     *
     * @return void
     */
    public function testFindTodaysSummary()
    {
        $summary_projects = $this->SessionsTable->find('todaysSummary');

        $this->assertInstanceOf('\Cake\ORM\Query', $summary_projects);

        $record_count = $summary_projects->count();

        $this->assertInternalType('int', $record_count);
        $this->assertEquals(3, $record_count);
    }

    /**
     * Test findTodaysTotal method
     *
     * @return void
     */
    public function testFindTodaysTotal()
    {
        $total = $this->SessionsTable->find('todaysTotal')->first()->total_duration;

        $this->assertInternalType('float', $total);
        $this->assertEquals(1192, $total);
    }
}
