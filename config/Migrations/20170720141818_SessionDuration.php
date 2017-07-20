<?php
use Migrations\AbstractMigration;

class SessionDuration extends AbstractMigration
{

    public function up()
    {

        $this->table('sessions')
            ->addColumn('duration', 'integer', [
                'after' => 'time',
                'comment' => 'In seconds',
                'default' => null,
                'length' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'duration',
                ],
                [
                    'name' => 'duration',
                ]
            )
            ->update();
    }

    public function down()
    {

        $this->table('sessions')
            ->removeIndexByName('duration')
            ->update();

        $this->table('sessions')
            ->removeColumn('duration')
            ->update();
    }
}

