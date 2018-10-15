<?php

namespace App\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property string $id
 * @property string $project_id
 * @property \Cake\I18n\Time $begin
 * @property \Cake\I18n\Time $end
 * @property int $duration
 * @property int $section
 * @property int $subsection
 * @property string $task
 * @property float $expected_hours
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Session extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Set total session duration.
     */
    public function setDuration()
    {
        $this->set('duration', $this->getInterval($this->begin, $this->end));
    }

    /**
     * Calculate the interval between the begin and end of a session.
     *
     * Sustract timestamps of both.
     *
     * @param \Cake\I18n\FrozenTime $begin
     * @param \Cake\I18n\FrozenTime $end
     * @return int
     */
    private function getInterval($begin, $end)
    {
        return $end->format('U') - $begin->format('U');
    }

    //TODO: remove as now we are using FormatterHelper
    /**
     * Virtual property: format duration with human readable time like h:mm:ss
     *
     * Better solution than a getter https://github.com/cakephp/cakephp/issues/10993
     *
     * @return string
     */
    protected function _getDurationTime()
    {
        $duration = $this->_properties['duration'];
        return isset($duration) ? (new FrozenTime($duration))->format('G:i:s') : '';
    }
}
