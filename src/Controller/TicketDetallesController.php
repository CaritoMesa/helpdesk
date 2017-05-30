<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketDetalles Controller
 *
 * @property \App\Model\Table\TicketDetallesTable $TicketDetalles
 *
 * @method \App\Model\Entity\TicketDetalle[] paginate($object = null, array $settings = [])
 */
class TicketDetallesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ticketDetalles = $this->paginate($this->TicketDetalles);

        $this->set(compact('ticketDetalles'));
        $this->set('_serialize', ['ticketDetalles']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Detalle id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketDetalle = $this->TicketDetalles->get($id, [
            'contain' => []
        ]);

        $this->set('ticketDetalle', $ticketDetalle);
        $this->set('_serialize', ['ticketDetalle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketDetalle = $this->TicketDetalles->newEntity();
        if ($this->request->is('post')) {
            $ticketDetalle = $this->TicketDetalles->patchEntity($ticketDetalle, $this->request->getData());
            if ($this->TicketDetalles->save($ticketDetalle)) {
                $this->Flash->success(__('The ticket detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket detalle could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketDetalle'));
        $this->set('_serialize', ['ticketDetalle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Detalle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketDetalle = $this->TicketDetalles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketDetalle = $this->TicketDetalles->patchEntity($ticketDetalle, $this->request->getData());
            if ($this->TicketDetalles->save($ticketDetalle)) {
                $this->Flash->success(__('The ticket detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket detalle could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketDetalle'));
        $this->set('_serialize', ['ticketDetalle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Detalle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketDetalle = $this->TicketDetalles->get($id);
        if ($this->TicketDetalles->delete($ticketDetalle)) {
            $this->Flash->success(__('The ticket detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
