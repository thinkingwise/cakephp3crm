<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'category_id' => true,
        'sku' => true,
        'supplier_id' => true,
        'quantity' => true,
        'price' => true,
        'weight' => true,
        'category' => true,
        'supplier' => true,
    ];
}
