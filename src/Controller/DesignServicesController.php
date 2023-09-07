<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DesignServices Controller
 *
 * @property \App\Model\Table\DesignServicesTable $DesignServices
 * @method \App\Model\Entity\DesignService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DesignServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $designServices = $this->paginate($this->DesignServices);

        $this->set(compact('designServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Design Service id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $designService = $this->DesignServices->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('designService'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $designService = $this->DesignServices->newEmptyEntity();
        if ($this->request->is('post')) {
            $designService = $this->DesignServices->patchEntity($designService, $this->request->getData());
            if ($this->DesignServices->save($designService)) {
                $this->Flash->success(__('The design service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The design service could not be saved. Please, try again.'));
        }
        $this->set(compact('designService'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Design Service id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $designService = $this->DesignServices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $designService = $this->DesignServices->patchEntity($designService, $this->request->getData());
            if ($this->DesignServices->save($designService)) {
                $this->Flash->success(__('The design service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The design service could not be saved. Please, try again.'));
        }
        $this->set(compact('designService'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Design Service id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $designService = $this->DesignServices->get($id);
        if ($this->DesignServices->delete($designService)) {
            $this->Flash->success(__('The design service has been deleted.'));
        } else {
            $this->Flash->error(__('The design service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
