<?php
namespace App\Model\Table;

use Cake\Chronos\Chronos;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\I18n\FrozenTime;
use Cake\Validation\Validator;
use App\Model\Entity\Session;

/**
 * Sessions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Session get($primaryKey, $options = [])
 * @method \App\Model\Entity\Session newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Session[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Session|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Session[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Session findOrCreate($search, callable $callback = null, $options = [])
 *        
 *         @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SessionsTable extends Table
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
        
        $this->table('sessions');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'session_id'
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
        
        $validator->dateTime('begin')
            ->requirePresence('begin', 'create')
            ->notEmpty('begin');
        
        $validator->dateTime('end')->allowEmpty('end');
        
        $validator->time('time')->allowEmpty('time');
        
        $validator->integer('section')->allowEmpty('section');
        
        $validator->integer('subsection')->allowEmpty('subsection');
        
        $validator->allowEmpty('task');
        
        $validator->numeric('expected_hours')->allowEmpty('expected_hours');
        
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
            'project_id'
        ], 'Projects'));
        
        return $rules;
    }

    /**
     * Find ongoing sessions.
     *
     * Sessions that has not a defined end.
     *
     * @param Query $q            
     * @return Query
     */
    public function findOngoingSessions(Query $q)
    {
        $q->select([
            'id',
            'project_id',
            'begin',
            'time',
            'section',
            'subsection',
            'task'
        ])
            ->where([
            $this->aliasField('end IS') => null
        ])
            ->order([
            'created' => 'ASC'
        ]);
        return $q;
    }

    /**
     * Find Today's detail.
     *
     * All sessions that begin today.
     *
     * @param Query $q            
     * @return Query
     */
    public function findTodaysDetail(Query $q)
    {
        $q->select([
            'id',
            'project_id',
            'begin',
            'end',
            'time',
            'section',
            'subsection',
            'task'
        ])
            ->where([
            $this->aliasField('begin >=') => Chronos::today(),
            $this->aliasField('begin <') => Chronos::tomorrow()
        ])
            ->order([
            'created' => 'ASC'
        ]);
        return $q;
    }

    /**
     * Find Today's summary.
     *
     * Total time spent today per project.
     *
     * @param Query $q            
     * @return Query
     */
    public function findTodaysSummary(Query $q)
    {
        $q->select([
            'project_id',
            'total_time' => $q->func()
                ->sum('time')
        ])
            ->where([
            $this->aliasField('begin >=') => Chronos::today(),
            $this->aliasField('begin <') => Chronos::tomorrow()
        ])
            ->group('project_id')
            ->order([
            'created' => 'ASC'
        ]);
        return $q;
    }

    /**
     * Find Today's total.
     *
     * Total time spent today.
     *
     * @param Query $q            
     * @return Query
     */
    public function findTodaysTotal(Query $q)
    {
        $q->select([
            'total_time' => $q->func()
                ->sum('time')
        ])
            ->where([
            $this->aliasField('begin >=') => Chronos::today(),
            $this->aliasField('begin <') => Chronos::tomorrow()
        ]);
        return $q;
    }

    /**
     * Calculate the interval between the begin and end of a session.
     *
     * Sustract timestamps of both.
     *
     * @param \Cake\I18n\FrozenTime $begin            
     * @param \Cake\I18n\FrozenTime $end            
     * @return \Cake\I18n\FrozenTime
     */
    private function getInterval($begin, $end)
    {
        return new FrozenTime($end->format('U') - $begin->format('U'));
    }

    /**
     * Calculate total session time.
     *
     * @param \Cake\Event\Event $event
     *            The event that was triggered
     * @param \App\Model\Entity\Session $session
     *            Session entity being saved
     * @return void
     */
    public function beforeSave(Event $event, Session $session)
    {
        $begin = $session->begin;
        $end = $session->end;
        
        // Only if session ended
        if (isset($end)) {
            $session->set('time', $this->getInterval($begin, $end));
            // TODO: consider using SQL function TIMEDIFF()
        }
    }
}
