<?php

namespace App\Controller;

use Cake\I18n\FrozenTime;

/**
 * Sessions Controller
 *
 * @property \App\Model\Table\SessionsTable $Sessions
 */
class SessionsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        // $this->loadComponent('Auth');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [
                'Projects'
            ]
        ];
        $sessions = $this->paginate($this->Sessions);

        $this->set(compact('sessions'));
        $this->set('_serialize', [
            'sessions'
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id
     *            Session id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => [
                'Projects',
                'Tickets'
            ]
        ]);

        $this->set('session', $session);
        $this->set('_serialize', [
            'session'
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->Sessions->newEntity();
        if ($this->request->is('post')) {
            $session = $this->Sessions->patchEntity($session, $this->request->data);
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect([
                    'action' => 'index'
                ]);
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $projects = $this->Sessions->Projects->find('list', [
            'limit' => 200
        ]);
        $this->set(compact('session', 'projects'));
        $this->set('_serialize', [
            'session'
        ]);
    }

    /**
     * Register method
     *
     * @return \Cake\Network\Response|null Redirects on successful register, renders view otherwise.
     */
    public function register()
    {
        // Check for ongoing sessions
        $ongoing = $this->Sessions->find('ongoingSessions', [])->first();

        $this->set('ongoing', $ongoing);

        $projects = $this->Sessions->Projects->find('list')->find('activeProjects');

        // Get Monitor
        $monitor_projects = $this->Sessions->getMonitor();
        $this->set(compact('monitor_projects'));
        $this->set('_serialize', [
            'monitor_projects'
        ]);

        // Get Today's detail
        $sessions = $this->Sessions->find('todaysDetail');
        $this->set(compact('sessions'));
        $this->set('_serialize', [
            'sessions'
        ]);

        // Get Today's summary
        $summary_projects = $this->Sessions->find('todaysSummary');
        $this->set(compact('summary_projects'));
        $this->set('_serialize', [
            'summary_projects'
        ]);

        // Get Today's total
        $total = $this->Sessions->find('todaysTotal')->first();
        $this->set(compact('total'));

        // Get Last day's total summary
        $last_days = $this->Sessions->find('lastDaysTotal', [
            'days' => 7
        ]);
        $this->set(compact('last_days'));
        $this->set('_serialize', [
            'last_days'
        ]);

        // Get this week's totals
        $weekTotal = $this->Sessions->find('weekTotal')->first();
        $this->set(compact('weekTotal'));

        // Get this month's totals
        $monthTotal = $this->Sessions->find('monthTotal')->first();
        $this->set(compact('monthTotal'));

        $last_project = null;

        if ($ongoing) {
            // Ongoing sessions: edit

            // Get ongoing session data
            $session = $this->Sessions->get($ongoing['id']);

            if ($this->request->is([
                'patch',
                'post',
                'put'
            ])) {
                // Set end time to session
                $data = array_merge($this->request->data, [
                    'end' => FrozenTime::now()
                ]);

                $session = $this->Sessions->patchEntity($session, $data);
                if ($this->Sessions->save($session)) {
                    return $this->redirect($this->here);
                }
                $this->Flash->error(__('The session could not be saved. Please, try again.'));
            }
        } else {
            // No ongoing sessions: add

            // Get last session's project
            $last_project = $this->Sessions->find('lastProject')->first()['project_id'];

            $session = $this->Sessions->newEntity();
            if ($this->request->is('post')) {

                // Set begin time to session
                $data = array_merge($this->request->data, [
                    'begin' => FrozenTime::now()
                ]);

                $session = $this->Sessions->patchEntity($session, $data);
                if ($this->Sessions->save($session)) {
                    return $this->redirect($this->here);
                } else {
                    $this->Flash->error(__('The session could not be saved. Please, try again.'));
                }
            }
        }

        $this->set(compact('session', 'projects', 'last_project'));
        $this->set('_serialize', [
            'projects'
        ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id
     *            Session id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is([
            'patch',
            'post',
            'put'
        ])) {
            $session = $this->Sessions->patchEntity($session, $this->request->data);
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect('/');
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $projects = $this->Sessions->Projects->find('list', [
            'limit' => 200
        ]);
        $this->set(compact('session', 'projects'));
        $this->set('_serialize', [
            'session'
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id
     *            Session id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod([
            'post',
            'delete'
        ]);
        $session = $this->Sessions->get($id);
        if ($this->Sessions->delete($session)) {
            $this->Flash->success(__('The session has been deleted.'));
        } else {
            $this->Flash->error(__('The session could not be deleted. Please, try again.'));
        }

        return $this->redirect('/');
    }
}
