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
        'duration' => [
            'type' => 'integer',
            'length' => 11,
            'unsigned' => true,
            'null' => true,
            'default' => null,
            'comment' => 'In seconds',
            'precision' => null,
            'autoIncrement' => null
        ],
        'section' => [
            'type' => 'integer',
            'length' => 4,
            'unsigned' => true,
            'null' => true,
            'default' => null,
            'comment' => 'Budget\'s related section',
            'precision' => null,
            'autoIncrement' => null
        ],
        'subsection' => [
            'type' => 'integer',
            'length' => 4,
            'unsigned' => true,
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
            ],
            'duration' => [
                'type' => 'index',
                'columns' => [
                    'duration'
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
            'id' => '227db5ba-1880-41c6-9830-677e57024a19',
            'project_id' => 'bbe4b4b0-756b-4a49-9220-1644860afcae',
            'begin' => 1502560068,
            'end' => 1502560068,
            'time' => '17:47:48',
            'duration' => 1,
            'section' => 1,
            'subsection' => 1,
            'task' => 'Lorem ipsum dolor sit amet',
            'expected_hours' => 1,
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
