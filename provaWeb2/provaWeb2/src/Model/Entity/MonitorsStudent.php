<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MonitorsStudent Entity
 *
 * @property int $id
 * @property int $monitor_id
 * @property int $student_id
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property string $status
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\Student $student
 */
class MonitorsStudent extends Entity
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
        'student_id' => true,
        'start_time' => true,
        'end_time' => true,
        'status' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'monitor' => true,
        'student' => true
    ];
    public function isOwnedBy($monitorsStudentsId, $userId)
    {
        return $this->exists(['id' => $monitorsStudentsId, 'user_id' => $userId]);
    }
}
