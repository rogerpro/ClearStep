<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FiscalDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FiscalDataTable Test Case
 */
class FiscalDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FiscalDataTable
     */
    public $FiscalData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fiscal_data',
        'app.clients',
        'app.projects',
        'app.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FiscalData') ? [] : [
            'className' => 'App\Model\Table\FiscalDataTable'
        ];
        $this->FiscalData = TableRegistry::get('FiscalData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FiscalData);
        
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
