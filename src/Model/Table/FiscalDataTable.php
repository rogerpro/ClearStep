<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FiscalData Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\FiscalData get($primaryKey, $options = [])
 * @method \App\Model\Entity\FiscalData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FiscalData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FiscalData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FiscalData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FiscalData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FiscalData findOrCreate($search, callable $callback = null, $options = [])
 *        
 *         @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FiscalDataTable extends Table
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
        
        $this->table('fiscal_data');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
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
        
        $validator->requirePresence('name', 'create')->notEmpty('name');
        
        $validator->allowEmpty('commercial_name');
        
        $validator->boolean('is_company')
            ->requirePresence('is_company', 'create')
            ->notEmpty('is_company');
        
        $validator->boolean('is_freelancer')
            ->requirePresence('is_freelancer', 'create')
            ->notEmpty('is_freelancer');
        
        $validator->boolean('is_roi')
            ->requirePresence('is_roi', 'create')
            ->notEmpty('is_roi');
        
        $validator->requirePresence('address', 'create')->notEmpty('address');
        
        $validator->requirePresence('postal_code', 'create')->notEmpty('postal_code');
        
        $validator->requirePresence('city', 'create')->notEmpty('city');
        
        $validator->allowEmpty('phone');
        
        $validator->allowEmpty('eu_vat_number');
        
        $validator->requirePresence('tax_num', 'create')->notEmpty('tax_num');
        
        $validator->boolean('privacy')
            ->requirePresence('privacy', 'create')
            ->notEmpty('privacy');
        
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
            'client_id'
        ], 'Clients'));
        $rules->add($rules->existsIn([
            'country_id'
        ], 'Countries'));
        
        return $rules;
    }
}
