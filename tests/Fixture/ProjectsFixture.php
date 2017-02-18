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
            'unsigned' => false,
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
            'type' => 'datetime',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
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
            'id' => 'd632d1f1-3994-474d-b7d4-fc6375bc5b4b',
            'client_id' => '61d7b183-a55b-464d-adbb-fdbab85f8b72',
            'name' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet',
            'billable' => 1,
            'hourly_price' => 1,
            'expected_hours' => 1,
            'active' => 1,
            'created' => '2017-02-17 18:35:46',
            'modified' => '2017-02-17 18:35:46'
        ]
    ];
}
