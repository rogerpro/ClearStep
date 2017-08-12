<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FiscalDataFixture
 */
class FiscalDataFixture extends TestFixture
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
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'name' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Company name',
            'precision' => null,
            'fixed' => null
        ],
        'commercial_name' => [
            'type' => 'string',
            'length' => 255,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => 'Trademark',
            'precision' => null,
            'fixed' => null
        ],
        'is_company' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => 'Is juridic person',
            'precision' => null
        ],
        'is_freelancer' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => 'Is a freelancer',
            'precision' => null
        ],
        'is_roi' => [
            'type' => 'boolean',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => 'Is ROI (EU only)',
            'precision' => null
        ],
        'address' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'postal_code' => [
            'type' => 'string',
            'length' => 50,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'city' => [
            'type' => 'string',
            'length' => 255,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'country_id' => [
            'type' => 'uuid',
            'length' => null,
            'null' => false,
            'default' => null,
            'comment' => '',
            'precision' => null
        ],
        'phone' => [
            'type' => 'string',
            'length' => 50,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'eu_vat_number' => [
            'type' => 'string',
            'length' => 50,
            'null' => true,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'tax_num' => [
            'type' => 'string',
            'length' => 50,
            'null' => false,
            'default' => null,
            'collate' => 'utf8_unicode_ci',
            'comment' => '',
            'precision' => null,
            'fixed' => null
        ],
        'privacy' => [
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
            'address' => [
                'type' => 'index',
                'columns' => [
                    'address'
                ],
                'length' => []
            ],
            'phone' => [
                'type' => 'index',
                'columns' => [
                    'phone'
                ],
                'length' => []
            ],
            'tax_num' => [
                'type' => 'index',
                'columns' => [
                    'tax_num'
                ],
                'length' => []
            ],
            'postal_code' => [
                'type' => 'index',
                'columns' => [
                    'postal_code'
                ],
                'length' => []
            ],
            'city' => [
                'type' => 'index',
                'columns' => [
                    'city'
                ],
                'length' => []
            ],
            'country_id' => [
                'type' => 'index',
                'columns' => [
                    'country_id'
                ],
                'length' => []
            ],
            'commercial_name' => [
                'type' => 'index',
                'columns' => [
                    'commercial_name'
                ],
                'length' => []
            ],
            'is_freelancer' => [
                'type' => 'index',
                'columns' => [
                    'is_freelancer'
                ],
                'length' => []
            ],
            'is_roi' => [
                'type' => 'index',
                'columns' => [
                    'is_roi'
                ],
                'length' => []
            ],
            'privacy' => [
                'type' => 'index',
                'columns' => [
                    'privacy'
                ],
                'length' => []
            ],
            'name' => [
                'type' => 'index',
                'columns' => [
                    'name'
                ],
                'length' => []
            ],
            'eu_vat_number' => [
                'type' => 'index',
                'columns' => [
                    'eu_vat_number'
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
            'client_id' => [
                'type' => 'unique',
                'columns' => [
                    'client_id'
                ],
                'length' => []
            ],
            'fiscal_data_ibfk_1' => [
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
            ],
            'fiscal_data_ibfk_2' => [
                'type' => 'foreign',
                'columns' => [
                    'country_id'
                ],
                'references' => [
                    'countries',
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
            'id' => '558534d2-2ca4-478f-9f0e-1c76fe5e9395',
            'client_id' => 'b76d0663-5994-48e7-9dd9-597d545511fe',
            'name' => 'Lorem ipsum dolor sit amet',
            'commercial_name' => 'Lorem ipsum dolor sit amet',
            'is_company' => 1,
            'is_freelancer' => 1,
            'is_roi' => 1,
            'address' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ipsum dolor sit amet',
            'city' => 'Lorem ipsum dolor sit amet',
            'country_id' => 'ccf5b99e-6d9b-4db7-b948-f76283142f7b',
            'phone' => 'Lorem ipsum dolor sit amet',
            'eu_vat_number' => 'Lorem ipsum dolor sit amet',
            'tax_num' => 'Lorem ipsum dolor sit amet',
            'privacy' => 1,
            'created' => 1502560068,
            'modified' => 1502560068
        ]
    ];
}
