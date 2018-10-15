<?php

use Migrations\AbstractMigration;

class Goals extends AbstractMigration
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
            ->changeColumn('duration', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
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

        $this->table('projects')
            ->addColumn('weekly_goal', 'integer', [
                'after' => 'expected_hours',
                'comment' => 'Weekly hour goal',
                'default' => null,
                'length' => 10,
                'null' => true,
            ])
            ->addColumn('monthly_goal', 'integer', [
                'after' => 'weekly_goal',
                'comment' => 'Monthly hour goal',
                'default' => null,
                'length' => 10,
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
            ->removeColumn('weekly_goal')
            ->removeColumn('monthly_goal')
            ->update();

        $this->table('sessions')
            ->changeColumn('duration', 'integer', [
                'comment' => 'In seconds',
                'default' => null,
                'length' => 11,
                'null' => true,
            ])
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

