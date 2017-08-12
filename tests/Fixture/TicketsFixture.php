<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
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
        'id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'project_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'session_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
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
        'state_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'budget_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'min_time' => [
            'type' => 'time',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => 'Minimum expected resolution time',
            'precision' => null
        ],
        'max_time' => [
            'type' => 'time',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => 'Maximum expected resolution time',
            'precision' => null
        ],
        'deadline' => [
            'type' => 'date',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'created' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
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
            'project_id' => [
                'type' => 'index',
                'columns' => [
                    'project_id'
                ],
                'length' => []
            ],
            'session_id' => [
                'type' => 'index',
                'columns' => [
                    'session_id'
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
            'state_id' => [
                'type' => 'index',
                'columns' => [
                    'state_id'
                ],
                'length' => []
            ],
            'budget_id' => [
                'type' => 'index',
                'columns' => [
                    'budget_id'
                ],
                'length' => []
            ],
            'deadline' => [
                'type' => 'index',
                'columns' => [
                    'deadline'
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
            'tickets_ibfk_1' => [
                'type' => 'foreign',
                'columns' => [
                    'project_id'
                ],
                'references' => [
                    'projects',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'tickets_ibfk_2' => [
                'type' => 'foreign',
                'columns' => [
                    'session_id'
                ],
                'references' => [
                    'sessions',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'tickets_ibfk_3' => [
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
            ],
            'tickets_ibfk_4' => [
                'type' => 'foreign',
                'columns' => [
                    'state_id'
                ],
                'references' => [
                    'states',
                    'id'
                ],
                'update' => 'restrict',
                'delete' => 'restrict',
                'length' => []
            ],
            'tickets_ibfk_5' => [
                'type' => 'foreign',
                'columns' => [
                    'budget_id'
                ],
                'references' => [
                    'budgets',
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
            'id' => 'c95e053c-0a85-48fa-b01f-fccddd275308',
            'project_id' => '5608b129-4ab0-4c1a-b614-a058d249d82d',
            'session_id' => '20046130-bf69-42b5-b011-6c722d843077',
            'invoice_id' => '45dd44b5-ebc2-4249-bdb5-7c8e62875161',
            'state_id' => '69005074-6af3-4422-af10-c6153f0d26be',
            'budget_id' => '46c0e531-f902-40e5-ba90-66399758693a',
            'min_time' => '17:47:48',
            'max_time' => '17:47:48',
            'deadline' => '2017-08-12',
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
