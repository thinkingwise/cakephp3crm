<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Carriers', 'Users']
        ];
        $this->set('orders', $this->paginate($this->Orders));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Customers', 'Carriers', 'Users', 'OrderItems']
        ]);
        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();

        /* additional model */
        $this->loadModel('Products'); $this->loadModel('Carriers');
        $products = $this->Products->find('list');
        $this->loadModel('OrderItems');
        $orderItem = $this->OrderItems->newEntity();
        /* end */

        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            $orderItem = $this->OrderItems->patchEntity($orderItem, $this->request->data['OrderItems']);

            if ($this->Orders->save($order)) {
                //assign the order id to $orderItem
                $orderItem->order_id = $order->id;
                if($this->OrderItems->save($orderItem)) {
                    $this->Flash->success('The order has been saved.');
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error('The order could not be saved. Please, try again.');
            }
        }
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $carriers = $this->Orders->Carriers->find('list', ['limit' => 200]);
        $this->Carriers->displayField('cost');  $costcarriers = $this->Carriers->find('list');
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $this->set(compact('order', 'customers', 'carriers', 'users', 'products', 'orderItems', 'costcarriers'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success('The order has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order could not be saved. Please, try again.');
            }
        }
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $carriers = $this->Orders->Carriers->find('list', ['limit' => 200]);
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $this->set(compact('order', 'customers', 'carriers', 'users'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success('The order has been deleted.');
        } else {
            $this->Flash->error('The order could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
