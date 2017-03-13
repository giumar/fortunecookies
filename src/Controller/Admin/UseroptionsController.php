<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Useroptions Controller
 *
 * @property \App\Model\Table\UseroptionsTable $Useroptions
 */
class UseroptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $useroptions = $this->paginate($this->Useroptions);

        $this->set(compact('useroptions'));
        $this->set('_serialize', ['useroptions']);
    }

    /**
     * View method
     *
     * @param string|null $id Useroption id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $useroption = $this->Useroptions->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('useroption', $useroption);
        $this->set('_serialize', ['useroption']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $useroption = $this->Useroptions->newEntity();
        if ($this->request->is('post')) {
            $useroption = $this->Useroptions->patchEntity($useroption, $this->request->data);
            if ($this->Useroptions->save($useroption)) {
                $this->Flash->success(__('The useroption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The useroption could not be saved. Please, try again.'));
        }
        $users = $this->Useroptions->Users->find('list', ['limit' => 200]);
        $this->set(compact('useroption', 'users'));
        $this->set('_serialize', ['useroption']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Useroption id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $useroption = $this->Useroptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $useroption = $this->Useroptions->patchEntity($useroption, $this->request->data);
            if ($this->Useroptions->save($useroption)) {
                $this->Flash->success(__('The useroption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The useroption could not be saved. Please, try again.'));
        }
        $users = $this->Useroptions->Users->find('list', ['limit' => 200]);
        $this->set(compact('useroption', 'users'));
        $this->set('_serialize', ['useroption']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Useroption id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $useroption = $this->Useroptions->get($id);
        if ($this->Useroptions->delete($useroption)) {
            $this->Flash->success(__('The useroption has been deleted.'));
        } else {
            $this->Flash->error(__('The useroption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
