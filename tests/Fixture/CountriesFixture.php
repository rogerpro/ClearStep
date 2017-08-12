<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountriesFixture
 */
class CountriesFixture extends TestFixture
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
        'iso2' => [
            'type' => 'string',
            'fixed' => true,
            'length' => 2,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'ISO 3166-1 alfa-2 code',
            'precision' => null
        ],
        'iso3' => [
            'type' => 'string',
            'fixed' => true,
            'length' => 3,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'ISO 3166-1 alfa-3 code',
            'precision' => null
        ],
        'is_eu' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => '0',
            'comment' => 'European Union country',
            'precision' => null
        ],
        'name' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Name in English',
            'precision' => null,
            'fixed' => null
        ],
        'spa' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Name in Spanish',
            'precision' => null,
            'fixed' => null
        ],
        'cat' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Name in Catalan',
            'precision' => null,
            'fixed' => null
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
            'is_eu' => [
                'type' => 'index',
                'columns' => [
                    'is_eu'
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
            'spa' => [
                'type' => 'unique',
                'columns' => [
                    'spa'
                ],
                'length' => []
            ],
            'cat' => [
                'type' => 'unique',
                'columns' => [
                    'cat'
                ],
                'length' => []
            ],
            'iso2' => [
                'type' => 'unique',
                'columns' => [
                    'iso2'
                ],
                'length' => []
            ],
            'iso3' => [
                'type' => 'unique',
                'columns' => [
                    'iso3'
                ],
                'length' => []
            ],
            'name' => [
                'type' => 'unique',
                'columns' => [
                    'name'
                ],
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
            'id' => 'd6f8d8cb-43eb-4879-86a1-38dd27905f33',
            'iso2' => '',
            'iso3' => 'L',
            'is_eu' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'spa' => 'Lorem ipsum dolor sit amet',
            'cat' => 'Lorem ipsum dolor sit amet',
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
