<?php

namespace App\Model\Table;

use App\Model\Entity\Session;
use Cake\Chronos\Chronos;
use Cake\Event\Event;
use Cake\I18n\FrozenTime;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

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
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $validator->integer('duration')->allowEmpty('duration');

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
            $this->aliasField('id'),
            $this->aliasField('project_id'),
            $this->aliasField('begin'),
            $this->aliasField('section'),
            $this->aliasField('subsection'),
            $this->aliasField('task')
        ])
            ->where([
                $this->aliasField('end IS') => null
            ])
            ->order([
                $this->aliasField('created') => 'ASC'
            ]);

        return $q;
    }

    public function getMonitor()
    {
        $q = $this->Projects->find('sums');

        $monitor = $q->toArray();

        foreach ($monitor as &$monitor_item) {
            if ($monitor_item['weekly_goal']) {
                $monitor_item['week_diff'] = (3600 * $monitor_item['weekly_goal']) - $monitor_item['week_sum'];
                $monitor_item['week_percentage'] = $monitor_item['week_sum'] / (3600 * $monitor_item['weekly_goal']) * 100;
            }

            if ($monitor_item['monthly_goal']) {
                $monitor_item['month_diff'] = (3600 * $monitor_item['monthly_goal']) - $monitor_item['month_sum'];
                $monitor_item['month_percentage'] = $monitor_item['month_sum'] / (3600 * $monitor_item['monthly_goal']) * 100;
            }
        }

        // Order by week_diff desc
        usort($monitor, function ($a, $b) {
            return ($a->month_diff < $b->month_diff);
        });

        return $monitor;
    }

    public function findProjectDuration(Query $q, array $options)
    {
        $q->select([
            'total_duration' => $q->func()
                ->sum($this->aliasField('duration'))
        ])
            ->where([
                'Sessions.project_id = Projects.id',
                $this->aliasField('begin >=') => $options['begin'],
                $this->aliasField('begin <') => $options['end']
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
            $this->aliasField('Projects.id'),
            $this->aliasField('Projects.name'),
            $this->aliasField('Projects.billable'),
            $this->aliasField('Sessions.id'),
            $this->aliasField('Sessions.project_id'),
            $this->aliasField('Sessions.begin'),
            $this->aliasField('Sessions.end'),
            $this->aliasField('Sessions.duration'),
            $this->aliasField('Sessions.section'),
            $this->aliasField('Sessions.subsection'),
            $this->aliasField('Sessions.task')
        ])
            ->contain([
                'Projects'
            ])
            ->where([
                $this->aliasField('Sessions.begin >=') => Chronos::today(),
                $this->aliasField('Sessions.begin <') => Chronos::tomorrow()
            ])
            ->order([
                $this->aliasField('Sessions.begin') => 'ASC'
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
            $this->aliasField('Projects.id'),
            $this->aliasField('Projects.name'),
            $this->aliasField('Projects.billable'),
            'total_duration' => $q->func()
                ->sum($this->aliasField('duration'))
        ])
            ->contain([
                'Projects'
            ])
            ->where([
                $this->aliasField('Sessions.begin >=') => Chronos::today(),
                $this->aliasField('Sessions.begin <') => Chronos::tomorrow()
            ])
            ->group($this->aliasField('Sessions.project_id'))
            ->orderDesc('total_duration');

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
            'total_duration' => $q->func()
                ->sum($this->aliasField('duration'))
        ])
            ->where([
                $this->aliasField('begin >=') => Chronos::today(),
                $this->aliasField('begin <') => Chronos::tomorrow()
            ]);

        return $q;
    }

    /**
     * Find Last day's total summary.
     *
     * Total time spent per day for last specified days.
     *
     * @param Query $q
     * @return Query
     */
    public function findLastDaysTotal(Query $q, array $options)
    {
        $days = $options['days'];

        $q->select([
            'day' => 'DATE(end)',
            'duration' => $q->func()
                ->sum($this->aliasField('Sessions.duration'))
        ])
            ->where([
                $this->aliasField('Sessions.end >=') => Chronos::parse("-$days days"),
                $this->aliasField('Sessions.end <') => Chronos::today()
            ])
            ->group('day')
            ->order([
                'day' => 'DESC'
            ]);

        return $q;
    }

    /**
     * Find last session's project.
     *
     * From the current time.
     *
     * @param Query $q
     * @return Query
     */
    public function findLastProject(Query $q)
    {
        $q->select([
            $this->aliasField('project_id')
        ])
            ->where([
                $this->aliasField('Sessions.begin <=') => new FrozenTime()
            ])
            ->order([
                $this->aliasField('Sessions.begin') => 'DESC'
            ])
            ->limit(1);

        return $q;
    }

    /**
     * Before save.
     *
     * @param \Cake\Event\Event $event
     *            The event that was triggered
     * @param \App\Model\Entity\Session $session
     *            Session entity being saved
     * @return void
     */
    public function beforeSave(Event $event, Session $session)
    {
        // Only if session ended
        if (isset($session->end)) {
            // Set total session duration
            $session->setDuration();
        }
    }
}
