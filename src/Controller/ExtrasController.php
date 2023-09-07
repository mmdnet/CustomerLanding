<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Extras Controller
 *
 * @property \App\Model\Table\ExtrasTable $Extras
 * @method \App\Model\Entity\Extra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtrasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $extras = $this->paginate($this->Extras);

        $this->set(compact('extras'));
    }

    /**
     * View method
     *
     * @param string|null $id Extra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extra = $this->Extras->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('extra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extra = $this->Extras->newEmptyEntity();
        if ($this->request->is('post')) {
            $extra = $this->Extras->patchEntity($extra, $this->request->getData());
            if ($this->Extras->save($extra)) {
                $this->Flash->success(__('The extra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra could not be saved. Please, try again.'));
        }
        $this->set(compact('extra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extra = $this->Extras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extra = $this->Extras->patchEntity($extra, $this->request->getData());
            if ($this->Extras->save($extra)) {
                $this->Flash->success(__('The extra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra could not be saved. Please, try again.'));
        }
        $this->set(compact('extra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extra = $this->Extras->get($id);
        if ($this->Extras->delete($extra)) {
            $this->Flash->success(__('The extra has been deleted.'));
        } else {
            $this->Flash->error(__('The extra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
