<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estado Controller
 *
 * @property \App\Model\Table\EstadoTable $Estado
 *
 * @method \App\Model\Entity\Estado[] paginate($object = null, array $settings = [])
 */
class EstadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $estado = $this->paginate($this->Estado);

        $this->set(compact('estado'));
        $this->set('_serialize', ['estado']);
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => []
        ]);

        $this->set('estado', $estado);
        $this->set('_serialize', ['estado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estado = $this->Estado->newEntity();
        if ($this->request->is('post')) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
        $this->set('_serialize', ['estado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $this->Flash->success(__('The estado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estado could not be saved. Please, try again.'));
        }
        $this->set(compact('estado'));
        $this->set('_serialize', ['estado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estado = $this->Estado->get($id);
        if ($this->Estado->delete($estado)) {
            $this->Flash->success(__('The estado has been deleted.'));
        } else {
            $this->Flash->error(__('The estado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
