<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OptionsSystems Controller
 *
 * @property \App\Model\Table\OptionsSystemsTable $OptionsSystems
 *
 * @method \App\Model\Entity\OptionsSystem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OptionsSystemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $optionsSystems = $this->paginate($this->OptionsSystems);

        $this->set(compact('optionsSystems'));
    }

    /**
     * View method
     *
     * @param string|null $id Options System id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $optionsSystem = $this->OptionsSystems->get($id, [
            'contain' => []
        ]);

        $this->set('optionsSystem', $optionsSystem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $optionsSystem = $this->OptionsSystems->newEntity();
        if ($this->request->is('post')) {
            $optionsSystem = $this->OptionsSystems->patchEntity($optionsSystem, $this->request->getData());
            if ($this->OptionsSystems->save($optionsSystem)) {
                $this->Flash->success(__('The options system has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The options system could not be saved. Please, try again.'));
        }
        $this->set(compact('optionsSystem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Options System id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $optionsSystem = $this->OptionsSystems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $optionsSystem = $this->OptionsSystems->patchEntity($optionsSystem, $this->request->getData());
            if ($this->OptionsSystems->save($optionsSystem)) {
                $this->Flash->success(__('The options system has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The options system could not be saved. Please, try again.'));
        }
        $this->set(compact('optionsSystem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Options System id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $optionsSystem = $this->OptionsSystems->get($id);
        if ($this->OptionsSystems->delete($optionsSystem)) {
            $this->Flash->success(__('The options system has been deleted.'));
        } else {
            $this->Flash->error(__('The options system could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
