<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
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
        'client_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'name' => [
            'type' => 'string',
            'length' => 50,
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
            'null' => true,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'billable' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'hourly_price' => [
            'type' => 'float',
            'length' => 5,
            'precision' => 2,
            'unsigned' => false,
            'null' => true,
            'default' => null,
            'comment' => ''
        ],
        'expected_hours' => [
            'type' => 'integer',
            'length' => 4,
            'unsigned' => true,
            'null' => true,
            'default' => null,
            'comment' => 'Expected hours for the project execution',
            'precision' => null,
            'autoIncrement' => null
        ],
        'active' => [
            'type' => 'boolean',
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
            'billable' => [
                'type' => 'index',
                'columns' => [
                    'billable'
                ],
                'length' => []
            ],
            'hourly_price' => [
                'type' => 'index',
                'columns' => [
                    'hourly_price'
                ],
                'length' => []
            ],
            'expected_hours' => [
                'type' => 'index',
                'columns' => [
                    'expected_hours'
                ],
                'length' => []
            ],
            'active' => [
                'type' => 'index',
                'columns' => [
                    'active'
                ],
                'length' => []
            ],
            'client_id' => [
                'type' => 'index',
                'columns' => [
                    'client_id'
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
            'name' => [
                'type' => 'unique',
                'columns' => [
                    'name'
                ],
                'length' => []
            ],
            'projects_ibfk_1' => [
                'type' => 'foreign',
                'columns' => [
                    'client_id'
                ],
                'references' => [
                    'clients',
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
            'id' => '0a6e9bc0-70f2-4362-99d7-85d07e7c56dd',
            'client_id' => 'a5167e31-18d0-42e9-af4d-df5128c16593',
            'name' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet',
            'billable' => 1,
            'hourly_price' => 1,
            'expected_hours' => 1,
            'active' => 1,
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
