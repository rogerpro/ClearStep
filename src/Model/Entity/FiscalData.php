<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FiscalData Entity
 *
 * @property string $id
 * @property string $client_id
 * @property string $name
 * @property string $commercial_name
 * @property bool $is_company
 * @property bool $is_freelancer
 * @property bool $is_roi
 * @property string $address
 * @property string $postal_code
 * @property string $city
 * @property string $country_id
 * @property string $phone
 * @property string $eu_vat_number
 * @property string $tax_num
 * @property bool $privacy
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Country $country
 */
class FiscalData extends Entity
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
