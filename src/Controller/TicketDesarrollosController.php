<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketDesarrollos Controller
 *
 * @property \App\Model\Table\TicketDesarrollosTable $TicketDesarrollos
 *
 * @method \App\Model\Entity\TicketDesarrollo[] paginate($object = null, array $settings = [])
 */
class TicketDesarrollosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ticketDesarrollos = $this->paginate($this->TicketDesarrollos);

        $this->set(compact('ticketDesarrollos'));
        $this->set('_serialize', ['ticketDesarrollos']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Desarrollo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketDesarrollo = $this->TicketDesarrollos->get($id, [
            'contain' => []
        ]);

        $this->set('ticketDesarrollo', $ticketDesarrollo);
        $this->set('_serialize', ['ticketDesarrollo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketDesarrollo = $this->TicketDesarrollos->newEntity();
        if ($this->request->is('post')) {
            $ticketDesarrollo = $this->TicketDesarrollos->patchEntity($ticketDesarrollo, $this->request->getData());
            if ($this->TicketDesarrollos->save($ticketDesarrollo)) {
                $this->Flash->success(__('The ticket desarrollo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket desarrollo could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketDesarrollo'));
        $this->set('_serialize', ['ticketDesarrollo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Desarrollo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketDesarrollo = $this->TicketDesarrollos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketDesarrollo = $this->TicketDesarrollos->patchEntity($ticketDesarrollo, $this->request->getData());
            if ($this->TicketDesarrollos->save($ticketDesarrollo)) {
                $this->Flash->success(__('The ticket desarrollo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket desarrollo could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketDesarrollo'));
        $this->set('_serialize', ['ticketDesarrollo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Desarrollo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketDesarrollo = $this->TicketDesarrollos->get($id);
        if ($this->TicketDesarrollos->delete($ticketDesarrollo)) {
            $this->Flash->success(__('The ticket desarrollo has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket desarrollo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
