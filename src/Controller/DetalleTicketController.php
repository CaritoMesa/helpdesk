<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetalleTicket Controller
 *
 * @property \App\Model\Table\DetalleTicketTable $DetalleTicket
 *
 * @method \App\Model\Entity\DetalleTicket[] paginate($object = null, array $settings = [])
 */
class DetalleTicketController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $detalleTicket = $this->paginate($this->DetalleTicket);

        $this->set(compact('detalleTicket'));
        $this->set('_serialize', ['detalleTicket']);
    }

    /**
     * View method
     *
     * @param string|null $id Detalle Ticket id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detalleTicket = $this->DetalleTicket->get($id, [
            'contain' => []
        ]);

        $this->set('detalleTicket', $detalleTicket);
        $this->set('_serialize', ['detalleTicket']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detalleTicket = $this->DetalleTicket->newEntity();
        if ($this->request->is('post')) {
            $detalleTicket = $this->DetalleTicket->patchEntity($detalleTicket, $this->request->getData());
            if ($this->DetalleTicket->save($detalleTicket)) {
                $this->Flash->success(__('The detalle ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('detalleTicket'));
        $this->set('_serialize', ['detalleTicket']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalle Ticket id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detalleTicket = $this->DetalleTicket->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detalleTicket = $this->DetalleTicket->patchEntity($detalleTicket, $this->request->getData());
            if ($this->DetalleTicket->save($detalleTicket)) {
                $this->Flash->success(__('The detalle ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('detalleTicket'));
        $this->set('_serialize', ['detalleTicket']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalle Ticket id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detalleTicket = $this->DetalleTicket->get($id);
        if ($this->DetalleTicket->delete($detalleTicket)) {
            $this->Flash->success(__('The detalle ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The detalle ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
