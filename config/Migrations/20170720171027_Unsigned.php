<?php
use Migrations\AbstractMigration;

class Unsigned extends AbstractMigration
{

    public function up()
    {

        $this->table('budgets')
            ->changeColumn('number', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->update();

        $this->table('invoices')
            ->changeColumn('number', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->update();

        $this->table('projects')
            ->changeColumn('expected_hours', 'integer', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->update();

        $this->table('sessions')
            ->changeColumn('section', 'integer', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->changeColumn('subsection', 'integer', [
                'default' => null,
                'limit' => 4,
                'null' => true,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('budgets')
            ->changeColumn('number', 'integer', [
                'default' => null,
                'length' => 10,
                'null' => false,
            ])
            ->update();

        $this->table('invoices')
            ->changeColumn('number', 'integer', [
                'default' => null,
                'length' => 10,
                'null' => false,
            ])
            ->update();

        $this->table('projects')
            ->changeColumn('expected_hours', 'integer', [
                'comment' => 'Expected hours for the project execution',
                'default' => null,
                'length' => 4,
                'null' => true,
            ])
            ->update();

        $this->table('sessions')
            ->changeColumn('section', 'integer', [
                'comment' => 'Budget\'s related section',
                'default' => null,
                'length' => 4,
                'null' => true,
            ])
            ->changeColumn('subsection', 'integer', [
                'comment' => 'Budget\'s related subsection',
                'default' => null,
                'length' => 4,
                'null' => true,
            ])
            ->update();
    }
}

