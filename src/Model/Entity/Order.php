<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'status' => true,
        'carrier_id' => true,
        'total_products' => true,
        'total_shipping' => true,
        'total_discount' => true,
        'total_paid' => true,
        'delivery_date' => true,
        'invoice_date' => true,
        'reference' => true,
        'user_id' => true,
        'customer' => true,
        'carrier' => true,
        'user' => true,
        'order_items' => true,
    ];
}
