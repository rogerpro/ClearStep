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

    public function findSums(Query $q)
    {
        $q->select([
            $this->aliasField('Projects.id'),
            $this->aliasField('Projects.name'),
            'week_sum' => $this->Sessions->findProjectDuration($this->Sessions->find(), [
                'begin' => get_object_vars(new Chronos('last monday'))['date']
            ]),
            $this->aliasField('Projects.week_goal'),
            'month_sum' => $this->Sessions->findProjectDuration($this->Sessions->find(), [
                'begin' => get_object_vars(Chronos::today())['date']
            ]),
            $this->aliasField('Projects.month_goal')
        ])
            ->where([
                'OR' => [
                    $this->aliasField('Projects.week_monitor') => true,
                    $this->aliasField('Projects.month_monitor') => true
                ]
            ])
            ->order('Projects.name');

        return $q;
    }

    /**
     * Find active projects.
     *
     * @param Query $q
     * @param array $options
     * @throws OutOfBoundsException
     */
    public function findActiveProjects(Query $q, array $options)
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
