<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Ticketstatuses Controller
 *
 * @property \App\Model\Table\TicketstatusesTable $Ticketstatuses
 */
class TicketstatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ticketstatuses = $this->paginate($this->Ticketstatuses);

        $this->set(compact('ticketstatuses'));
        $this->set('_serialize', ['ticketstatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketstatus = $this->Ticketstatuses->get($id, [
            'contain' => []
        ]);

        $this->set('ticketstatus', $ticketstatus);
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketstatus = $this->Ticketstatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $ticketstatus = $this->Ticketstatuses->patchEntity($ticketstatus, $this->getRequest()->getData());
            if ($this->Ticketstatuses->save($ticketstatus)) {
                $this->Flash->success(__('The ticketstatus has been saved.'));

                return $this->redirect(['prefix'=>'Admin', 'controller'=>'Ticketstatuses', 'action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketstatus'));
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketstatus = $this->Ticketstatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketstatus = $this->Ticketstatuses->patchEntity($ticketstatus, $this->request->data);
            if ($this->Ticketstatuses->save($ticketstatus)) {
                $this->Flash->success(__('The ticketstatus has been saved.'));

                return $this->redirect(['prefix'=>false, 'controller'=>'Ticketstatuses', 'action' => 'index']);
            }
            $this->Flash->error(__('The ticketstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketstatus'));
        $this->set('_serialize', ['ticketstatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticketstatus id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketstatus = $this->Ticketstatuses->get($id);
        if ($this->Ticketstatuses->delete($ticketstatus)) {
            $this->Flash->success(__('The ticketstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The ticketstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['prefix'=>false, 'controller'=>'Ticketstatuses', 'action' => 'index']);
    }
}
