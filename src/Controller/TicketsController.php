<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\I18n\I18n;

/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 */
class TicketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        
		$tickets = $this->paginate($this->Tickets->find('all', ['contain'=>['Tickettypes', 'Ticketstatuses']]));

        $this->set(compact('tickets'));
        $this->set('_serialize', ['tickets']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Operations', 'Tickettypes']
        ]);

        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
		$types = $this->Tickets->Tickettypes->find('list');
		$statuses = $this->Tickets->Ticketstatuses->find('list');
        $this->set(compact('ticket', 'types', 'statuses'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Tickets->get($id, [
            'contain' => ['Tickettypes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Tickets->patchEntity($ticket, $this->request->data);
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
		$tickettypes = $this->Tickets->Tickettypes->find('list');
		$ticketstatuses = $this->Tickets->Ticketstatuses->find('list');
        $this->set(compact('ticket', 'tickettypes', 'ticketstatuses'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function addOperation($id = null) {
		$ticket = $this->Tickets->get($id, [
            'contain' => []
        ]);
		
		$this->loadModel('Operations');
		$newOperation = $this->Operations->newEntity();
		if ($this->request->is('post')) {
			debug($newOperation);
            //$newOperation = $this->Operations->patchEntity($newOperation, $this->request->data);
			$start = Time::parseDateTime($this->request->data['start']);
			$end = Time::parseDateTime($this->request->data['end']);
			$newOperation->ticket_id = $this->request->data['ticket_id'];
			$newOperation->description = $this->request->data['description'];
			$newOperation->start = $start;
			$newOperation->end = $end;
			debug($newOperation);
            if ($this->Operations->save($newOperation)) {
                $this->Flash->success(__('The new operation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The new operation could not be saved. Please, try again.'));
        }
		$newOperation->ticket_id = $id;
		$this->set('newOperation', $newOperation);
	}
}
