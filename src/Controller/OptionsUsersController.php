<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OptionsUsers Controller
 *
 * @property \App\Model\Table\OptionsUsersTable $OptionsUsers
 *
 * @method \App\Model\Entity\OptionsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OptionsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $optionsUsers = $this->paginate($this->OptionsUsers);

        $this->set(compact('optionsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Options User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $optionsUser = $this->OptionsUsers->get($id, [
            'contain' => []
        ]);

        $this->set('optionsUser', $optionsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $optionsUser = $this->OptionsUsers->newEntity();
        if ($this->request->is('post')) {
            $optionsUser = $this->OptionsUsers->patchEntity($optionsUser, $this->request->getData());
            if ($this->OptionsUsers->save($optionsUser)) {
                $this->Flash->success(__('The options user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The options user could not be saved. Please, try again.'));
        }
        $this->set(compact('optionsUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Options User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $optionsUser = $this->OptionsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $optionsUser = $this->OptionsUsers->patchEntity($optionsUser, $this->request->getData());
            if ($this->OptionsUsers->save($optionsUser)) {
                $this->Flash->success(__('The options user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The options user could not be saved. Please, try again.'));
        }
        $this->set(compact('optionsUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Options User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $optionsUser = $this->OptionsUsers->get($id);
        if ($this->OptionsUsers->delete($optionsUser)) {
            $this->Flash->success(__('The options user has been deleted.'));
        } else {
            $this->Flash->error(__('The options user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
