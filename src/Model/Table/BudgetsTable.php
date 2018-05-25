<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Budgets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Currencies
 * @property \Cake\ORM\Association\BelongsTo $Invoices
 * @property \Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Budget get($primaryKey, $options = [])
 * @method \App\Model\Entity\Budget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Budget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Budget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Budget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Budget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Budget findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BudgetsTable extends Table
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

        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'budget_id'
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

        $validator->requirePresence('year', 'create')->notEmpty('year');

        $validator->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator->requirePresence('title', 'create')->notEmpty('title');

        $validator->requirePresence('description', 'create')->notEmpty('description');

        $validator->decimal('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator->boolean('rendered')
            ->requirePresence('rendered', 'create')
            ->notEmpty('rendered');

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
        $rules->add($rules->existsIn([
            'currency_id'
        ], 'Currencies'));
        $rules->add($rules->existsIn([
            'invoice_id'
        ], 'Invoices'));

        return $rules;
    }
}
