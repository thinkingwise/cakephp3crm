<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 */
class Customer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'company' => true,
        'birthday' => true,
        'telephone' => true,
        'address' => true,
        'delivery_address' => true,
        'invoice_address' => true,
    ];
}
