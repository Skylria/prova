<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $username
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Monitor[] $monitors
 */
class Student extends Entity
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
        'name' => true,
        'email' => true,
        'username' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'monitors' => true
    ];

    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
    
}
