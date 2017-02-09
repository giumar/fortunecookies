<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tickettypes Controller
 *
 * @property \App\Model\Table\TickettypesTable $Tickettypes
 */
class TickettypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tickettypes = $this->paginate($this->Tickettypes);
		
		$title = "Type of ticket";

        $this->set(compact(['tickettypes', 'title']));
        $this->set('_serialize', ['tickettypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tickettype = $this->Tickettypes->get($id, [
            'contain' => []
        ]);

        $this->set('tickettype', $tickettype);
        $this->set('_serialize', ['tickettype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tickettype = $this->Tickettypes->newEntity();
        if ($this->request->is('post')) {
            $tickettype = $this->Tickettypes->patchEntity($tickettype, $this->request->data);
            if ($this->Tickettypes->save($tickettype)) {
                $this->Flash->success(__('The tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickettype could not be saved. Please, try again.'));
        }
        $this->set(compact('tickettype'));
        $this->set('_serialize', ['tickettype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tickettype = $this->Tickettypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tickettype = $this->Tickettypes->patchEntity($tickettype, $this->request->data);
            if ($this->Tickettypes->save($tickettype)) {
                $this->Flash->success(__('The tickettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickettype could not be saved. Please, try again.'));
        }
        $this->set(compact('tickettype'));
        $this->set('_serialize', ['tickettype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tickettype id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tickettype = $this->Tickettypes->get($id);
        if ($this->Tickettypes->delete($tickettype)) {
            $this->Flash->success(__('The tickettype has been deleted.'));
        } else {
            $this->Flash->error(__('The tickettype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
