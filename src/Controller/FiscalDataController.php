<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FiscalData Controller
 *
 * @property \App\Model\Table\FiscalDataTable $FiscalData
 */
class FiscalDataController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Countries']
        ];
        $fiscalData = $this->paginate($this->FiscalData);

        $this->set(compact('fiscalData'));
        $this->set('_serialize', ['fiscalData']);
    }

    /**
     * View method
     *
     * @param string|null $id Fiscal Data id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiscalData = $this->FiscalData->get($id, [
            'contain' => ['Clients', 'Countries']
        ]);

        $this->set('fiscalData', $fiscalData);
        $this->set('_serialize', ['fiscalData']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiscalData = $this->FiscalData->newEntity();
        if ($this->request->is('post')) {
            $fiscalData = $this->FiscalData->patchEntity($fiscalData, $this->request->data);
            if ($this->FiscalData->save($fiscalData)) {
                $this->Flash->success(__('The fiscal data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiscal data could not be saved. Please, try again.'));
        }
        $clients = $this->FiscalData->Clients->find('list', ['limit' => 200]);
        $countries = $this->FiscalData->Countries->find('list', ['limit' => 200]);
        $this->set(compact('fiscalData', 'clients', 'countries'));
        $this->set('_serialize', ['fiscalData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiscal Data id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiscalData = $this->FiscalData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiscalData = $this->FiscalData->patchEntity($fiscalData, $this->request->data);
            if ($this->FiscalData->save($fiscalData)) {
                $this->Flash->success(__('The fiscal data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiscal data could not be saved. Please, try again.'));
        }
        $clients = $this->FiscalData->Clients->find('list', ['limit' => 200]);
        $countries = $this->FiscalData->Countries->find('list', ['limit' => 200]);
        $this->set(compact('fiscalData', 'clients', 'countries'));
        $this->set('_serialize', ['fiscalData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiscal Data id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiscalData = $this->FiscalData->get($id);
        if ($this->FiscalData->delete($fiscalData)) {
            $this->Flash->success(__('The fiscal data has been deleted.'));
        } else {
            $this->Flash->error(__('The fiscal data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
