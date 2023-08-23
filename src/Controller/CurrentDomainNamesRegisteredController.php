<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CurrentDomainNamesRegistered Controller
 *
 * @property \App\Model\Table\CurrentDomainNamesRegisteredTable $CurrentDomainNamesRegistered
 * @method \App\Model\Entity\CurrentDomainNamesRegistered[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CurrentDomainNamesRegisteredController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $currentDomainNamesRegistered = $this->paginate($this->CurrentDomainNamesRegistered);

        $this->set(compact('currentDomainNamesRegistered'));
    }

    /**
     * View method
     *
     * @param string|null $id Current Domain Names Registered id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('currentDomainNamesRegistered'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->newEmptyEntity();
        if ($this->request->is('post')) {
            $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->patchEntity($currentDomainNamesRegistered, $this->request->getData());
            if ($this->CurrentDomainNamesRegistered->save($currentDomainNamesRegistered)) {
                $this->Flash->success(__('The current domain names registered has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The current domain names registered could not be saved. Please, try again.'));
        }
        $users = $this->CurrentDomainNamesRegistered->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('currentDomainNamesRegistered', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Current Domain Names Registered id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->patchEntity($currentDomainNamesRegistered, $this->request->getData());
            if ($this->CurrentDomainNamesRegistered->save($currentDomainNamesRegistered)) {
                $this->Flash->success(__('The current domain names registered has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The current domain names registered could not be saved. Please, try again.'));
        }
        $users = $this->CurrentDomainNamesRegistered->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('currentDomainNamesRegistered', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Current Domain Names Registered id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $currentDomainNamesRegistered = $this->CurrentDomainNamesRegistered->get($id);
        if ($this->CurrentDomainNamesRegistered->delete($currentDomainNamesRegistered)) {
            $this->Flash->success(__('The current domain names registered has been deleted.'));
        } else {
            $this->Flash->error(__('The current domain names registered could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
