<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property string $id
 * @property string $project_id
 * @property string $session_id
 * @property string $invoice_id
 * @property string $state_id
 * @property string $budget_id
 * @property \Cake\I18n\Time $min_time
 * @property \Cake\I18n\Time $max_time
 * @property \Cake\I18n\Time $deadline
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Session $session
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Budget $budget
 * @property \App\Model\Entity\Comment[] $comments
 */
class Ticket extends Entity
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
}
