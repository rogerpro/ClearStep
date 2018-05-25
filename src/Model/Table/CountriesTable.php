<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @property \Cake\ORM\Association\HasMany $FiscalData
 *
 * @method \App\Model\Entity\Country get($primaryKey, $options = [])
 * @method \App\Model\Entity\Country newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Country|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Country[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Country findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CountriesTable extends Table
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

        $this->hasMany('FiscalData', [
            'foreignKey' => 'country_id'
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

        $validator->requirePresence('iso2', 'create')
            ->notEmpty('iso2')
            ->add('iso2', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

        $validator->requirePresence('iso3', 'create')
            ->notEmpty('iso3')
            ->add('iso3', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

        $validator->boolean('is_eu')
            ->requirePresence('is_eu', 'create')
            ->notEmpty('is_eu');

        $validator->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

        $validator->requirePresence('spa', 'create')
            ->notEmpty('spa')
            ->add('spa', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

        $validator->requirePresence('cat', 'create')
            ->notEmpty('cat')
            ->add('cat', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table'
            ]);

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
            'spa'
        ]));
        $rules->add($rules->isUnique([
            'cat'
        ]));
        $rules->add($rules->isUnique([
            'iso2'
        ]));
        $rules->add($rules->isUnique([
            'iso3'
        ]));
        $rules->add($rules->isUnique([
            'name'
        ]));

        return $rules;
    }
}
