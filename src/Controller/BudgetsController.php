<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Budgets Controller
 *
 * @property \App\Model\Table\BudgetsTable $Budgets
 */
class BudgetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Currencies', 'Invoices']
        ];
        $budgets = $this->paginate($this->Budgets);

        $this->set(compact('budgets'));
        $this->set('_serialize', ['budgets']);
    }

    /**
     * View method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $budget = $this->Budgets->get($id, [
            'contain' => ['Currencies', 'Invoices', 'Tickets']
        ]);

        $this->set('budget', $budget);
        $this->set('_serialize', ['budget']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $budget = $this->Budgets->newEntity();
        if ($this->request->is('post')) {
            $budget = $this->Budgets->patchEntity($budget, $this->request->data);
            if ($this->Budgets->save($budget)) {
                $this->Flash->success(__('The budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The budget could not be saved. Please, try again.'));
        }
        $currencies = $this->Budgets->Currencies->find('list', ['limit' => 200]);
        $invoices = $this->Budgets->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('budget', 'currencies', 'invoices'));
        $this->set('_serialize', ['budget']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $budget = $this->Budgets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $budget = $this->Budgets->patchEntity($budget, $this->request->data);
            if ($this->Budgets->save($budget)) {
                $this->Flash->success(__('The budget has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The budget could not be saved. Please, try again.'));
        }
        $currencies = $this->Budgets->Currencies->find('list', ['limit' => 200]);
        $invoices = $this->Budgets->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('budget', 'currencies', 'invoices'));
        $this->set('_serialize', ['budget']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Budget id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $budget = $this->Budgets->get($id);
        if ($this->Budgets->delete($budget)) {
            $this->Flash->success(__('The budget has been deleted.'));
        } else {
            $this->Flash->error(__('The budget could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
