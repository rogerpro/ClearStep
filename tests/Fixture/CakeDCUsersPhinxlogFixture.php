<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CakeDCUsersPhinxlogFixture
 */
class CakeDCUsersPhinxlogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cake_d_c_users_phinxlog';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'version' => [
            'type' => 'biginteger',
            'length' => 20,
            'unsigned' => false,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null,
            'autoIncrement' => null
        ],
        'migration_name' => [
            'type' => 'string',
            'length' => 100,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'start_time' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP',
            'comment' => '',
            'precision' => null
        ],
        'end_time' => [
            'type' => 'timestamp',
            'length' => null,
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP',
            'comment' => '',
            'precision' => null
        ],
        'breakpoint' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => '0',
            'comment' => '',
            'precision' => null
        ],
        '_constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'version'
                ],
                'length' => []
            ]
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'version' => 1,
            'migration_name' => 'Lorem ipsum dolor sit amet',
            'start_time' => 1502560068,
            'end_time' => 1502560068,
            'breakpoint' => 1
        ]
    ];
}
