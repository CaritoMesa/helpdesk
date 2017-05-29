<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipo Controller
 *
 * @property \App\Model\Table\TipoTable $Tipo
 *
 * @method \App\Model\Entity\Tipo[] paginate($object = null, array $settings = [])
 */
class TipoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipo = $this->paginate($this->Tipo);

        $this->set(compact('tipo'));
        $this->set('_serialize', ['tipo']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipo = $this->Tipo->get($id, [
            'contain' => ['Usuario']
        ]);

        $this->set('tipo', $tipo);
        $this->set('_serialize', ['tipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipo = $this->Tipo->newEntity();
        if ($this->request->is('post')) {
            $tipo = $this->Tipo->patchEntity($tipo, $this->request->getData());
            if ($this->Tipo->save($tipo)) {
                $this->Flash->success(__('The tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo could not be saved. Please, try again.'));
        }
        $usuario = $this->Tipo->Usuario->find('list', ['limit' => 200]);
        $this->set(compact('tipo', 'usuario'));
        $this->set('_serialize', ['tipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipo = $this->Tipo->get($id, [
            'contain' => ['Usuario']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipo->patchEntity($tipo, $this->request->getData());
            if ($this->Tipo->save($tipo)) {
                $this->Flash->success(__('The tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo could not be saved. Please, try again.'));
        }
        $usuario = $this->Tipo->Usuario->find('list', ['limit' => 200]);
        $this->set(compact('tipo', 'usuario'));
        $this->set('_serialize', ['tipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipo = $this->Tipo->get($id);
        if ($this->Tipo->delete($tipo)) {
            $this->Flash->success(__('The tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
