<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BudgetsFixture
 */
class BudgetsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'year' => [
            'type' => 'string',
            'length' => null,
            'null' => false,
            'default' => null,
            'collate' => null,
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'number' => [
            'type' => 'integer',
            'length' => 10,
            'unsigned' => false,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null,
            'autoIncrement' => null
        ],
        'title' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'description' => [
            'type' => 'string',
            'length' => 10000,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'currency_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'amount' => [
            'type' => 'decimal',
            'length' => 7,
            'precision' => 2,
            'unsigned' => false,
            'null' => false,
            'default' => null,
            'comment' => ''
        ],
        'rendered' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => '0',
            'comment' => 'File generated',
            'precision' => null
        ],
        'invoice_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'created' => [
            'type' => 'datetime',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => 'Budget date',
            'precision' => null
        ],
        'modified' => [
            'type' => 'datetime',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        '_indexes' => [
            'year' => [
                'type' => 'index',
                'columns' => [
                    'year'
                ],
                'length' => []
            ],
            'number' => [
                'type' => 'index',
                'columns' => [
                    'number'
                ],
                'length' => []
            ],
            'title' => [
                'type' => 'index',
                'columns' => [
                    'title'
                ],
                'length' => []
            ],
            'currency_id' => [
                'type' => 'index',
                'columns' => [
                    'currency_id'
                ],
                'length' => []
            ],
            'amount' => [
                'type' => 'index',
                'columns' => [
                    'amount'
                ],
                'length' => []
            ],
            'rendered' => [
                'type' => 'index',
                'columns' => [
                    'rendered'
                ],
                'length' => []
            ],
            'invoice_id' => [
                'type' => 'index',
                'columns' => [
                    'invoice_id'
                ],
                'length' => []
            ],
            'created' => [
                'type' => 'index',
                'columns' => [
                    'created'
                ],
                'length' => []
            ],
            'modified' => [
                'type' => 'index',
                'columns' => [
                    'modified'
                ],
                'length' => []
            ]
        ],
        '_constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id'
                ],
                'length' => []
            ],
            'year_number' => [
                'type' => 'unique',
                'columns' => [
                    'year',
                    'number'
                ],
                'length' => []
            ],
            'budgets_ibfk_1' => [
                'type' => 'foreign',
                'columns' => [
                    'currency_id'
                ],
                'references' => [
                    'currencies',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'budgets_ibfk_2' => [
                'type' => 'foreign',
                'columns' => [
                    'invoice_id'
                ],
                'references' => [
                    'invoices',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ]
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ]
    ];
    // @codingStandardsIgnoreEnd
    
    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '4205897f-e7c1-4e2c-8aa1-690603f972d4',
            'year' => 'Lorem ipsum dolor sit amet',
            'number' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet',
            'currency_id' => '88b156d8-f9a1-41ae-902c-dd3d8183206e',
            'amount' => 1.5,
            'rendered' => 1,
            'invoice_id' => '3cbc5419-9a66-44d0-bcd5-8db17357275a',
            'created' => '2017-02-17 18:35:45',
            'modified' => '2017-02-17 18:35:45'
        ]
    ];
}
