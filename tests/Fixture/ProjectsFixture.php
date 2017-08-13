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
            'id' => '240b37b1-8a85-4ed6-b601-c343ee704642',
            'client_id' => '06c85706-ff99-44da-9868-02ea920d670a',
            'name' => 'Lorem ipsum first',
            'description' => 'Lorem ipsum dolor sit amet',
            'billable' => 1,
            'hourly_price' => 1,
            'expected_hours' => 1,
            'active' => 1,
            'created' => 1502624336,
            'modified' => 1502624336
        ],
        [
            'id' => 'abb8b1ad-f720-4395-86a6-d4679bcdff37',
            'client_id' => '39d0c495-b1e0-4314-af6c-0b13d4d6d906',
            'name' => 'Lorem ipsum second',
            'description' => 'Lorem ipsum dolor sit amet',
            'billable' => 1,
            'hourly_price' => 2,
            'expected_hours' => 2,
            'active' => 1,
            'created' => 1502624336,
            'modified' => 1502624336
        ],
        [
            'id' => 'cd5db656-176f-4ca4-92de-3e76c61fdb2a',
            'client_id' => '308fc220-115a-4e51-b7f9-9143c1b1aa99',
            'name' => 'Lorem ipsum third',
            'description' => 'Lorem ipsum dolor sit amet',
            'billable' => 1,
            'hourly_price' => 3,
            'expected_hours' => 3,
            'active' => 1,
            'created' => 1502624336,
            'modified' => 1502624336
        ]
    ];
}
