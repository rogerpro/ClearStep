<?php
use Migrations\AbstractMigration;

class CreatedModifiedNull extends AbstractMigration
{
    public function up()
    {

        $this->table('budgets', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('year', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('number', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => false,
            ])
            ->addColumn('currency_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 7,
                'scale' => 2,
            ])
            ->addColumn('rendered', 'boolean', [
                'comment' => 'File generated',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('invoice_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'comment' => 'Budget date',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'year',
                    'number',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'currency_id',
                ]
            )
            ->addIndex(
                [
                    'invoice_id',
                ]
            )
            ->addIndex(
                [
                    'year',
                ]
            )
            ->addIndex(
                [
                    'number',
                ]
            )
            ->addIndex(
                [
                    'title',
                ]
            )
            ->addIndex(
                [
                    'amount',
                ]
            )
            ->addIndex(
                [
                    'rendered',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('clients', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('comments', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('ticket_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('content', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'ticket_id',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('countries', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('iso2', 'string', [
                'comment' => 'ISO 3166-1 alfa-2 code',
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('iso3', 'string', [
                'comment' => 'ISO 3166-1 alfa-3 code',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('is_eu', 'boolean', [
                'comment' => 'European Union country',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'Name in English',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('spa', 'string', [
                'comment' => 'Name in Spanish',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('cat', 'string', [
                'comment' => 'Name in Catalan',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'cat',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'iso2',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'iso3',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'spa',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'is_eu',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('currencies', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('iso', 'string', [
                'comment' => 'ISO 4217 code',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'iso',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('fiscal_data', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('client_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'comment' => 'Company name',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('commercial_name', 'string', [
                'comment' => 'Trademark',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('is_company', 'boolean', [
                'comment' => 'Is juridic person',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_freelancer', 'boolean', [
                'comment' => 'Is a freelancer',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_roi', 'boolean', [
                'comment' => 'Is ROI (EU only)',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('postal_code', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('city', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('country_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('eu_vat_number', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('tax_num', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('privacy', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'client_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'client_id',
                ]
            )
            ->addIndex(
                [
                    'country_id',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'address',
                ]
            )
            ->addIndex(
                [
                    'phone',
                ]
            )
            ->addIndex(
                [
                    'tax_num',
                ]
            )
            ->addIndex(
                [
                    'postal_code',
                ]
            )
            ->addIndex(
                [
                    'city',
                ]
            )
            ->addIndex(
                [
                    'commercial_name',
                ]
            )
            ->addIndex(
                [
                    'is_freelancer',
                ]
            )
            ->addIndex(
                [
                    'is_roi',
                ]
            )
            ->addIndex(
                [
                    'privacy',
                ]
            )
            ->addIndex(
                [
                    'name',
                ]
            )
            ->addIndex(
                [
                    'eu_vat_number',
                ]
            )
            ->create();

        $this->table('invoices', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('year', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('number', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('ticket_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('currency_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 7,
                'scale' => 2,
            ])
            ->addColumn('rendered', 'boolean', [
                'comment' => 'File generated',
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('transaction_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'comment' => 'Invoice date',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'year',
                    'number',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'currency_id',
                ]
            )
            ->addIndex(
                [
                    'ticket_id',
                ]
            )
            ->addIndex(
                [
                    'transaction_id',
                ]
            )
            ->addIndex(
                [
                    'year',
                ]
            )
            ->addIndex(
                [
                    'number',
                ]
            )
            ->addIndex(
                [
                    'amount',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'title',
                ]
            )
            ->addIndex(
                [
                    'rendered',
                ]
            )
            ->create();

        $this->table('languages', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('iso', 'string', [
                'comment' => 'ISO code',
                'default' => null,
                'limit' => 3,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'iso',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->create();

        $this->table('projects', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('client_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('description', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => true,
            ])
            ->addColumn('billable', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('hourly_price', 'float', [
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
            ])
            ->addColumn('expected_hours', 'integer', [
                'comment' => 'Expected hours for the project execution',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'client_id',
                ]
            )
            ->addIndex(
                [
                    'billable',
                ]
            )
            ->addIndex(
                [
                    'hourly_price',
                ]
            )
            ->addIndex(
                [
                    'expected_hours',
                ]
            )
            ->addIndex(
                [
                    'active',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('sessions', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('project_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('begin', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('end', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('time', 'time', [
                'comment' => 'Time spent',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('section', 'integer', [
                'comment' => 'Budget\'s related section',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('subsection', 'integer', [
                'comment' => 'Budget\'s related subsection',
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->addColumn('task', 'string', [
                'comment' => 'Description of the session',
                'default' => null,
                'limit' => 2000,
                'null' => true,
            ])
            ->addColumn('expected_hours', 'float', [
                'comment' => 'Expected hours for the task execution',
                'default' => null,
                'null' => true,
                'precision' => 5,
                'scale' => 2,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'project_id',
                ]
            )
            ->addIndex(
                [
                    'begin',
                ]
            )
            ->addIndex(
                [
                    'end',
                ]
            )
            ->addIndex(
                [
                    'time',
                ]
            )
            ->addIndex(
                [
                    'section',
                ]
            )
            ->addIndex(
                [
                    'subsection',
                ]
            )
            ->addIndex(
                [
                    'task',
                ]
            )
            ->addIndex(
                [
                    'expected_hours',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('states', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'name',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->create();

        $this->table('tickets', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('project_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('session_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('invoice_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('state_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('budget_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('min_time', 'time', [
                'comment' => 'Minimum expected resolution time',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('max_time', 'time', [
                'comment' => 'Maximum expected resolution time',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deadline', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'budget_id',
                ]
            )
            ->addIndex(
                [
                    'invoice_id',
                ]
            )
            ->addIndex(
                [
                    'project_id',
                ]
            )
            ->addIndex(
                [
                    'session_id',
                ]
            )
            ->addIndex(
                [
                    'state_id',
                ]
            )
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'deadline',
                ]
            )
            ->create();

        $this->table('transactions', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 7,
                'scale' => 2,
            ])
            ->addColumn('paypal_details', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => true,
            ])
            ->addColumn('paypal_result', 'string', [
                'default' => null,
                'limit' => 10000,
                'null' => true,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'created',
                ]
            )
            ->addIndex(
                [
                    'modified',
                ]
            )
            ->addIndex(
                [
                    'amount',
                ]
            )
            ->create();

        $this->table('budgets')
            ->addForeignKey(
                'currency_id',
                'currencies',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'invoice_id',
                'invoices',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('comments')
            ->addForeignKey(
                'ticket_id',
                'tickets',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('fiscal_data')
            ->addForeignKey(
                'client_id',
                'clients',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'country_id',
                'countries',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('invoices')
            ->addForeignKey(
                'currency_id',
                'currencies',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'ticket_id',
                'tickets',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'transaction_id',
                'transactions',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('projects')
            ->addForeignKey(
                'client_id',
                'clients',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('sessions')
            ->addForeignKey(
                'project_id',
                'projects',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('tickets')
            ->addForeignKey(
                'budget_id',
                'budgets',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'invoice_id',
                'invoices',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'project_id',
                'projects',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'session_id',
                'sessions',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'state_id',
                'states',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('budgets')
            ->dropForeignKey(
                'currency_id'
            )
            ->dropForeignKey(
                'invoice_id'
            );

        $this->table('comments')
            ->dropForeignKey(
                'ticket_id'
            );

        $this->table('fiscal_data')
            ->dropForeignKey(
                'client_id'
            )
            ->dropForeignKey(
                'country_id'
            );

        $this->table('invoices')
            ->dropForeignKey(
                'currency_id'
            )
            ->dropForeignKey(
                'ticket_id'
            )
            ->dropForeignKey(
                'transaction_id'
            );

        $this->table('projects')
            ->dropForeignKey(
                'client_id'
            );

        $this->table('sessions')
            ->dropForeignKey(
                'project_id'
            );

        $this->table('tickets')
            ->dropForeignKey(
                'budget_id'
            )
            ->dropForeignKey(
                'invoice_id'
            )
            ->dropForeignKey(
                'project_id'
            )
            ->dropForeignKey(
                'session_id'
            )
            ->dropForeignKey(
                'state_id'
            );

        $this->dropTable('budgets');
        $this->dropTable('clients');
        $this->dropTable('comments');
        $this->dropTable('countries');
        $this->dropTable('currencies');
        $this->dropTable('fiscal_data');
        $this->dropTable('invoices');
        $this->dropTable('languages');
        $this->dropTable('projects');
        $this->dropTable('sessions');
        $this->dropTable('states');
        $this->dropTable('tickets');
        $this->dropTable('transactions');
    }
}
