<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketEstados Controller
 *
 * @property \App\Model\Table\TicketEstadosTable $TicketEstados
 *
 * @method \App\Model\Entity\TicketEstado[] paginate($object = null, array $settings = [])
 */
class TicketEstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ticketEstados = $this->paginate($this->TicketEstados);

        $this->set(compact('ticketEstados'));
        $this->set('_serialize', ['ticketEstados']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Estado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketEstado = $this->TicketEstados->get($id, [
            'contain' => []
        ]);

        $this->set('ticketEstado', $ticketEstado);
        $this->set('_serialize', ['ticketEstado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketEstado = $this->TicketEstados->newEntity();
        if ($this->request->is('post')) {
            $ticketEstado = $this->TicketEstados->patchEntity($ticketEstado, $this->request->getData());
            if ($this->TicketEstados->save($ticketEstado)) {
                $this->Flash->success(__('The ticket estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket estado could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketEstado'));
        $this->set('_serialize', ['ticketEstado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketEstado = $this->TicketEstados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketEstado = $this->TicketEstados->patchEntity($ticketEstado, $this->request->getData());
            if ($this->TicketEstados->save($ticketEstado)) {
                $this->Flash->success(__('The ticket estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket estado could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketEstado'));
        $this->set('_serialize', ['ticketEstado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketEstado = $this->TicketEstados->get($id);
        if ($this->TicketEstados->delete($ticketEstado)) {
            $this->Flash->success(__('The ticket estado has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
