<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Budget Entity
 *
 * @property string $id
 * @property string $year
 * @property int $number
 * @property string $title
 * @property string $description
 * @property string $currency_id
 * @property float $amount
 * @property bool $rendered
 * @property string $invoice_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Currency $currency
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Budget extends Entity
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
