<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DesarrolloTicket Controller
 *
 * @property \App\Model\Table\DesarrolloTicketTable $DesarrolloTicket
 *
 * @method \App\Model\Entity\DesarrolloTicket[] paginate($object = null, array $settings = [])
 */
class DesarrolloTicketController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $desarrolloTicket = $this->paginate($this->DesarrolloTicket);

        $this->set(compact('desarrolloTicket'));
        $this->set('_serialize', ['desarrolloTicket']);
    }

    /**
     * View method
     *
     * @param string|null $id Desarrollo Ticket id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $desarrolloTicket = $this->DesarrolloTicket->get($id, [
            'contain' => []
        ]);

        $this->set('desarrolloTicket', $desarrolloTicket);
        $this->set('_serialize', ['desarrolloTicket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $desarrolloTicket = $this->DesarrolloTicket->newEntity();
        if ($this->request->is('post')) {
            $desarrolloTicket = $this->DesarrolloTicket->patchEntity($desarrolloTicket, $this->request->getData());
            if ($this->DesarrolloTicket->save($desarrolloTicket)) {
                $this->Flash->success(__('The desarrollo ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desarrollo ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('desarrolloTicket'));
        $this->set('_serialize', ['desarrolloTicket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Desarrollo Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $desarrolloTicket = $this->DesarrolloTicket->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $desarrolloTicket = $this->DesarrolloTicket->patchEntity($desarrolloTicket, $this->request->getData());
            if ($this->DesarrolloTicket->save($desarrolloTicket)) {
                $this->Flash->success(__('The desarrollo ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The desarrollo ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('desarrolloTicket'));
        $this->set('_serialize', ['desarrolloTicket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Desarrollo Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $desarrolloTicket = $this->DesarrolloTicket->get($id);
        if ($this->DesarrolloTicket->delete($desarrolloTicket)) {
            $this->Flash->success(__('The desarrollo ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The desarrollo ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
