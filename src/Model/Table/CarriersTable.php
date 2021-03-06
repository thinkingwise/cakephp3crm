<?php
namespace App\Model\Table;

use App\Model\Entity\Carrier;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carriers Model
 */
class CarriersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('carriers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Orders', [
            'foreignKey' => 'carrier_id'
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
            ->allowEmpty('name')
            ->add('cost', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('cost');

        return $validator;
    }
}
