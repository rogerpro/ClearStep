<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 *
 */
class TicketsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'project_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'session_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'invoice_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'state_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'budget_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'min_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Minimum expected resolution time', 'precision' => null],
        'max_time' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Maximum expected resolution time', 'precision' => null],
        'deadline' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'created' => ['type' => 'index', 'columns' => ['created'], 'length' => []],
            'modified' => ['type' => 'index', 'columns' => ['modified'], 'length' => []],
            'project_id' => ['type' => 'index', 'columns' => ['project_id'], 'length' => []],
            'session_id' => ['type' => 'index', 'columns' => ['session_id'], 'length' => []],
            'invoice_id' => ['type' => 'index', 'columns' => ['invoice_id'], 'length' => []],
            'state_id' => ['type' => 'index', 'columns' => ['state_id'], 'length' => []],
            'budget_id' => ['type' => 'index', 'columns' => ['budget_id'], 'length' => []],
            'deadline' => ['type' => 'index', 'columns' => ['deadline'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tickets_ibfk_1' => ['type' => 'foreign', 'columns' => ['project_id'], 'references' => ['projects', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tickets_ibfk_2' => ['type' => 'foreign', 'columns' => ['session_id'], 'references' => ['sessions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tickets_ibfk_3' => ['type' => 'foreign', 'columns' => ['invoice_id'], 'references' => ['invoices', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tickets_ibfk_4' => ['type' => 'foreign', 'columns' => ['state_id'], 'references' => ['states', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tickets_ibfk_5' => ['type' => 'foreign', 'columns' => ['budget_id'], 'references' => ['budgets', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 'f20949e1-7b9b-46d9-bdf5-9da0128954c7',
            'project_id' => 'ecf3f101-f451-4dba-8e68-c7e74791e931',
            'session_id' => '5dcf16df-eeaf-4122-9fd0-ee257df9f651',
            'invoice_id' => 'de424f73-05e7-48c5-bb2d-f927cc35c04e',
            'state_id' => '0b6b86f6-7877-4ea9-a7fd-a1e6ce85cec8',
            'budget_id' => 'ebaf07c2-1594-4d86-a416-acfa42a39780',
            'min_time' => '18:35:47',
            'max_time' => '18:35:47',
            'deadline' => '2017-02-17',
            'created' => '2017-02-17 18:35:47',
            'modified' => '2017-02-17 18:35:47'
        ],
    ];
}
