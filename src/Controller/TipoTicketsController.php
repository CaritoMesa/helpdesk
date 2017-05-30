<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoTickets Controller
 *
 * @property \App\Model\Table\TipoTicketsTable $TipoTickets
 *
 * @method \App\Model\Entity\TipoTicket[] paginate($object = null, array $settings = [])
 */
class TipoTicketsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipoTickets = $this->paginate($this->TipoTickets);

        $this->set(compact('tipoTickets'));
        $this->set('_serialize', ['tipoTickets']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Ticket id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoTicket = $this->TipoTickets->get($id, [
            'contain' => []
        ]);

        $this->set('tipoTicket', $tipoTicket);
        $this->set('_serialize', ['tipoTicket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoTicket = $this->TipoTickets->newEntity();
        if ($this->request->is('post')) {
            $tipoTicket = $this->TipoTickets->patchEntity($tipoTicket, $this->request->getData());
            if ($this->TipoTickets->save($tipoTicket)) {
                $this->Flash->success(__('The tipo ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoTicket'));
        $this->set('_serialize', ['tipoTicket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoTicket = $this->TipoTickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoTicket = $this->TipoTickets->patchEntity($tipoTicket, $this->request->getData());
            if ($this->TipoTickets->save($tipoTicket)) {
                $this->Flash->success(__('The tipo ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoTicket'));
        $this->set('_serialize', ['tipoTicket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoTicket = $this->TipoTickets->get($id);
        if ($this->TipoTickets->delete($tipoTicket)) {
            $this->Flash->success(__('The tipo ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
