<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderItemsTable Test Case
 */
class OrderItemsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'OrderItems' => 'app.order_items',
        'Orders' => 'app.orders',
        'Customers' => 'app.customers',
        'Carriers' => 'app.carriers',
        'Users' => 'app.users',
        'Products' => 'app.products',
        'Categories' => 'app.categories',
        'Suppliers' => 'app.suppliers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrderItems') ? [] : ['className' => 'App\Model\Table\OrderItemsTable'];
        $this->OrderItems = TableRegistry::get('OrderItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
