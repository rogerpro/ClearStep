<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicesFixture
 */
class InvoicesFixture extends TestFixture
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
        'ticket_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
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
        'transaction_id' => [
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
            'comment' => 'Invoice date',
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
            'amount' => [
                'type' => 'index',
                'columns' => [
                    'amount'
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
            'ticket_id' => [
                'type' => 'index',
                'columns' => [
                    'ticket_id'
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
            'transaction_id' => [
                'type' => 'index',
                'columns' => [
                    'transaction_id'
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
            'invoices_ibfk_1' => [
                'type' => 'foreign',
                'columns' => [
                    'ticket_id'
                ],
                'references' => [
                    'tickets',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'invoices_ibfk_2' => [
                'type' => 'foreign',
                'columns' => [
                    'transaction_id'
                ],
                'references' => [
                    'transactions',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'invoices_ibfk_3' => [
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
            'id' => '008bd952-0e64-4770-8a11-9f11e6b1d93d',
            'year' => 'Lorem ipsum dolor sit amet',
            'number' => 1,
            'ticket_id' => 'b6bba574-7dce-4b78-a6c1-4fd345eadc24',
            'title' => 'Lorem ipsum dolor sit amet',
            'currency_id' => 'b0e7ccee-a3d0-459d-b991-da94c974229a',
            'amount' => 1.5,
            'rendered' => 1,
            'transaction_id' => '7d68f953-24e1-41f4-a2b8-ab9e06484e6c',
            'created' => '2017-02-17 18:35:46',
            'modified' => '2017-02-17 18:35:46'
        ]
    ];
}
