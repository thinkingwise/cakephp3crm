<?php
namespace App\Model\Table;

use App\Model\Entity\Order;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 */
class OrdersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('orders');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Carriers', [
            'foreignKey' => 'carrier_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('OrderItems', [
            'foreignKey' => 'order_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('status')
            ->add('total_products', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('total_products')
            ->add('total_shipping', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('total_shipping')
            ->add('total_discount', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('total_discount')
            ->add('total_paid', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('total_paid')
            ->add('delivery_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('delivery_date')
            ->add('invoice_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('invoice_date')
            ->allowEmpty('reference');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['carrier_id'], 'Carriers'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
