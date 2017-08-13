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
            'id' => '37ee53a0-9fad-47e7-8b58-68189092ad42',
            'project_id' => 'cd5db656-176f-4ca4-92de-3e76c61fdb2a',
            'begin' => 1502620925,
            'end' => 1502621025,
            'time' => null,
            'duration' => 100,
            'section' => 1,
            'subsection' => 1,
            'task' => 'Lorem ipsum dolor sit amet',
            'expected_hours' => 1,
            'created' => 1502620925,
            'modified' => 1502621025
        ],
        [
            'id' => '78b3e43c-c574-4174-9dff-d4e75c4e3d63',
            'project_id' => 'abb8b1ad-f720-4395-86a6-d4679bcdff37',
            'begin' => 1602230925,
            'end' => 1602230958,
            'time' => null,
            'duration' => 33,
            'section' => 2,
            'subsection' => 2,
            'task' => 'Lorem ipsum dolor sit amet',
            'expected_hours' => 2,
            'created' => 1602230925,
            'modified' => 1602230958
        ],
        [
            'id' => '1b9ec654-03e8-4201-9003-dff293733759',
            'project_id' => '240b37b1-8a85-4ed6-b601-c343ee704642',
            'begin' => 1752620925,
            'end' => 1752621984,
            'time' => null,
            'duration' => 1059,
            'section' => 3,
            'subsection' => 3,
            'task' => 'Lorem ipsum dolor sit amet',
            'expected_hours' => 3,
            'created' => 1752620925,
            'modified' => 1752621984
        ]
    ];
}
