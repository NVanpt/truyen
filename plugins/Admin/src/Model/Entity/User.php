<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $name
 * @property int $usertype
 * @property int $comment_count
 * @property string $active
 * @property string $facebook
 * @property string $gmail
 * @property string $twitter
 * @property int $account_type
 * @property \Cake\I18n\Time $created_date
 * @property \Cake\I18n\Time $destroy_date
 *
 * @property \App\Model\Entity\Post[] $posts
 */
class User extends Entity
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
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
