<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TaxRules Controller
 *
 * @property \App\Model\Table\TaxRulesTable $TaxRules
 */
class TaxRulesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('taxRules', $this->paginate($this->TaxRules));
        $this->set('_serialize', ['taxRules']);
    }

    /**
     * View method
     *
     * @param string|null $id Tax Rule id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxRule = $this->TaxRules->get($id, [
            'contain' => []
        ]);
        $this->set('taxRule', $taxRule);
        $this->set('_serialize', ['taxRule']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taxRule = $this->TaxRules->newEntity();
        if ($this->request->is('post')) {
            $taxRule = $this->TaxRules->patchEntity($taxRule, $this->request->data);
            if ($this->TaxRules->save($taxRule)) {
                $this->Flash->success('The tax rule has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tax rule could not be saved. Please, try again.');
            }
        }
        $this->set(compact('taxRule'));
        $this->set('_serialize', ['taxRule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tax Rule id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taxRule = $this->TaxRules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxRule = $this->TaxRules->patchEntity($taxRule, $this->request->data);
            if ($this->TaxRules->save($taxRule)) {
                $this->Flash->success('The tax rule has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tax rule could not be saved. Please, try again.');
            }
        }
        $this->set(compact('taxRule'));
        $this->set('_serialize', ['taxRule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tax Rule id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taxRule = $this->TaxRules->get($id);
        if ($this->TaxRules->delete($taxRule)) {
            $this->Flash->success('The tax rule has been deleted.');
        } else {
            $this->Flash->error('The tax rule could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
