<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MonitorsUser Entity
 *
 * @property int $id
 * @property int $monitor_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\User $user
 */
class MonitorsUser extends Entity
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
        'monitor_id' => true,
        'user_id' => true,
        'start_time' => true,
        'end_time' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'monitor' => true,
        'user' => true
    ];
}
