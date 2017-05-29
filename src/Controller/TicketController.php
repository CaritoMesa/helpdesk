<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ticket Controller
 *
 * @property \App\Model\Table\TicketTable $Ticket
 *
 * @method \App\Model\Entity\Ticket[] paginate($object = null, array $settings = [])
 */
class TicketController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ticket = $this->paginate($this->Ticket);

        $this->set(compact('ticket'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticket = $this->Ticket->get($id, [
            'contain' => []
        ]);

        $this->set('ticket', $ticket);
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticket = $this->Ticket->newEntity();
        if ($this->request->is('post')) {
            $ticket = $this->Ticket->patchEntity($ticket, $this->request->getData());
            if ($this->Ticket->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('ticket'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticket = $this->Ticket->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticket = $this->Ticket->patchEntity($ticket, $this->request->getData());
            if ($this->Ticket->save($ticket)) {
                $this->Flash->success(__('The ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('ticket'));
        $this->set('_serialize', ['ticket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticket = $this->Ticket->get($id);
        if ($this->Ticket->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
