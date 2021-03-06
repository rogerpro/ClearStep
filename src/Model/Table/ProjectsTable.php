<?php

namespace App\Model\Table;

use Cake\Chronos\Chronos;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\HasMany $Sessions
 * @property \Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config
     *            The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Sessions', [
            'sort' => [
                'Sessions.begin' => 'desc'
            ],
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'project_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator
     *            Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator->uuid('id')->allowEmpty('id', 'create');

        $validator->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

        $validator->allowEmpty('description');

        $validator->boolean('billable')
            ->requirePresence('billable', 'create')
            ->notEmpty('billable');

        $validator->numeric('hourly_price')->allowEmpty('hourly_price');

        $validator->integer('expected_hours')->allowEmpty('expected_hours');

        $validator->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules
     *            The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique([
            'name'
        ]));
        $rules->add($rules->existsIn([
            'client_id'
        ], 'Clients'));

        return $rules;
    }

    /**
     * Find sums for the monitor table
     *
     * @param Query $q
     * @return Query
     */
    public function findSums(Query $q)
    {
        $q->select([
            $this->aliasField('Projects.id'),
            $this->aliasField('Projects.name'),
            $this->aliasField('Projects.billable'),
            'week_sum' => $this->Sessions->find('projectDuration', [
                'begin' => (new Chronos())->startOfWeek(),
                'end' => (new Chronos())->endOfWeek()->modify('+1 seconds')
            ]),
            $this->aliasField('Projects.weekly_goal'),
            'month_sum' => $this->Sessions->find('projectDuration', [
                'begin' => (new Chronos())->startOfMonth(),
                'end' => (new Chronos())->startOfMonth()->modify('+1 months')
            ]),
            $this->aliasField('Projects.monthly_goal')
        ])
            ->where([
                'OR' => [
                    $this->aliasField('Projects.weekly_goal'),
                    $this->aliasField('Projects.monthly_goal')
                ]
            ])
            ->order('Projects.name');

        return $q;
    }

    /**
     * Find active projects.
     *
     * @param Query $q
     * @return Query
     */
    public function findActiveProjects(Query $q)
    {
        $q->select([
            $this->aliasField('id'),
            $this->aliasField('name')
        ])
            ->where([
                $this->aliasField('active') => true
            ])
            ->order([
                $this->aliasField('name') => 'ASC'
            ]);
        return $q;
    }
}
