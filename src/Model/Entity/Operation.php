<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Operation Entity
 *
 * @property int $id
 * @property int $ticket_id
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Ticket $ticket
 */
class Operation extends Entity
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
