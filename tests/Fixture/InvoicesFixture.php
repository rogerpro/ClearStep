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
            'unsigned' => true,
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
            'type' => 'timestamp',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => 'Invoice date',
            'precision' => null
        ],
        'modified' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => true,
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
            'id' => '59a3d568-1c55-413f-804b-70ea3367319d',
            'year' => 'Lorem ipsum dolor sit amet',
            'number' => 1,
            'ticket_id' => 'cf995870-a579-4790-a0cc-6b9a34e316c7',
            'title' => 'Lorem ipsum dolor sit amet',
            'currency_id' => 'a1ddbb7c-a54f-44ed-88c6-ac8800934a42',
            'amount' => 1.5,
            'rendered' => 1,
            'transaction_id' => 'cba7f5f1-5b33-427c-b9d8-c7dd271e6a82',
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
