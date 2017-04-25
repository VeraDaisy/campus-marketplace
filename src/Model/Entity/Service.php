<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property int $rating_point
 * @property int $rating_number
 * @property int $current_rating
 * @property string $description
 * @property string $url
 * @property string $image_url
 * @property float $min_price
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\User $user
 */
class Service extends Entity
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
