<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
        'username' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'email' => [
            'type' => 'string',
            'length' => 255,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'password' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'first_name' => [
            'type' => 'string',
            'length' => 50,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'last_name' => [
            'type' => 'string',
            'length' => 50,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'token' => [
            'type' => 'string',
            'length' => 255,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'token_expires' => [
            'type' => 'datetime',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'api_token' => [
            'type' => 'string',
            'length' => 255,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'activation_date' => [
            'type' => 'datetime',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'secret' => [
            'type' => 'string',
            'length' => 32,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'secret_verified' => [
            'type' => 'boolean',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'tos_date' => [
            'type' => 'datetime',
            'length' => null,
            'null' => true,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'active' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => '0',
            'comment' => '',
            'precision' => null
        ],
        'is_superuser' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => '0',
            'comment' => '',
            'precision' => null
        ],
        'role' => [
            'type' => 'string',
            'length' => 255,
            'null' => true,
            'default' => 'user',
            'collate' => 'utf8_general_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
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
        '_constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id'
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
            'id' => 'ca0ad4b0-d896-4c09-a78b-ac63e096d8b2',
            'username' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'token' => 'Lorem ipsum dolor sit amet',
            'token_expires' => '2017-08-12 17:47:48',
            'api_token' => 'Lorem ipsum dolor sit amet',
            'activation_date' => '2017-08-12 17:47:48',
            'secret' => 'Lorem ipsum dolor sit amet',
            'secret_verified' => 1,
            'tos_date' => '2017-08-12 17:47:48',
            'active' => 1,
            'is_superuser' => 1,
            'role' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-08-12 17:47:48',
            'modified' => '2017-08-12 17:47:48'
        ]
    ];
}
