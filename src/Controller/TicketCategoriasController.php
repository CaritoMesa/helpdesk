<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketCategorias Controller
 *
 * @property \App\Model\Table\TicketCategoriasTable $TicketCategorias
 *
 * @method \App\Model\Entity\TicketCategoria[] paginate($object = null, array $settings = [])
 */
class TicketCategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ticketCategorias = $this->paginate($this->TicketCategorias);

        $this->set(compact('ticketCategorias'));
        $this->set('_serialize', ['ticketCategorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Categoria id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketCategoria = $this->TicketCategorias->get($id, [
            'contain' => []
        ]);

        $this->set('ticketCategoria', $ticketCategoria);
        $this->set('_serialize', ['ticketCategoria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketCategoria = $this->TicketCategorias->newEntity();
        if ($this->request->is('post')) {
            $ticketCategoria = $this->TicketCategorias->patchEntity($ticketCategoria, $this->request->getData());
            if ($this->TicketCategorias->save($ticketCategoria)) {
                $this->Flash->success(__('The ticket categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketCategoria'));
        $this->set('_serialize', ['ticketCategoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Categoria id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketCategoria = $this->TicketCategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketCategoria = $this->TicketCategorias->patchEntity($ticketCategoria, $this->request->getData());
            if ($this->TicketCategorias->save($ticketCategoria)) {
                $this->Flash->success(__('The ticket categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketCategoria'));
        $this->set('_serialize', ['ticketCategoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Categoria id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketCategoria = $this->TicketCategorias->get($id);
        if ($this->TicketCategorias->delete($ticketCategoria)) {
            $this->Flash->success(__('The ticket categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket categoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
