<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessionsFixture
 */
class SessionsFixture extends TestFixture
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
        'begin' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP',
            'comment' => '',
            'precision' => null
        ],
        'end' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'time' => [
            'type' => 'time',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => 'Time spent',
            'precision' => null
        ],
        'section' => [
            'type' => 'integer',
            'length' => 4,
            'unsigned' => false,
            'null' => true,
            'default' => null,
            'comment' => 'Budget\'s related section',
            'precision' => null,
            'autoIncrement' => null
        ],
        'subsection' => [
            'type' => 'integer',
            'length' => 4,
            'unsigned' => false,
            'null' => true,
            'default' => null,
            'comment' => 'Budget\'s related subsection',
            'precision' => null,
            'autoIncrement' => null
        ],
        'task' => [
            'type' => 'string',
            'length' => 2000,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Description of the session',
            'precision' => null,
            'fixed' => null
        ],
        'expected_hours' => [
            'type' => 'float',
            'length' => 5,
            'precision' => 2,
            'unsigned' => false,
            'null' => true,
            'default' => null,
            'comment' => 'Expected hours for the task execution'
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
            'begin' => [
                'type' => 'index',
                'columns' => [
                    'begin'
                ],
                'length' => []
            ],
            'end' => [
                'type' => 'index',
                'columns' => [
                    'end'
                ],
                'length' => []
            ],
            'time' => [
                'type' => 'index',
                'columns' => [
                    'time'
                ],
                'length' => []
            ],
            'section' => [
                'type' => 'index',
                'columns' => [
                    'section'
                ],
                'length' => []
            ],
            'subsection' => [
                'type' => 'index',
                'columns' => [
                    'subsection'
                ],
                'length' => []
            ],
            'task' => [
                'type' => 'index',
                'columns' => [
                    'task'
                ],
                'length' => [
                    'task' => '255'
                ]
            ],
            'project_id' => [
                'type' => 'index',
                'columns' => [
                    'project_id'
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
            'sessions_ibfk_1' => [
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
            'id' => '85d9adf3-0c1e-4d79-910c-9fe04fc46f4c',
            'project_id' => 'd18105d6-bb22-4d66-849b-cd2288752b1c',
            'begin' => 1487356547,
            'end' => 1487356547,
            'time' => '18:35:47',
            'section' => 1,
            'subsection' => 1,
            'task' => 'Lorem ipsum dolor sit amet',
            'expected_hours' => 1,
            'created' => '2017-02-17 18:35:47',
            'modified' => '2017-02-17 18:35:47'
        ]
    ];
}
