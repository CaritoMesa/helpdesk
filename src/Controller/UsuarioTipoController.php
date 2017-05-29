<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuarioTipo Controller
 *
 * @property \App\Model\Table\UsuarioTipoTable $UsuarioTipo
 *
 * @method \App\Model\Entity\UsuarioTipo[] paginate($object = null, array $settings = [])
 */
class UsuarioTipoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $usuarioTipo = $this->paginate($this->UsuarioTipo);

        $this->set(compact('usuarioTipo'));
        $this->set('_serialize', ['usuarioTipo']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario Tipo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuarioTipo = $this->UsuarioTipo->get($id, [
            'contain' => []
        ]);

        $this->set('usuarioTipo', $usuarioTipo);
        $this->set('_serialize', ['usuarioTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuarioTipo = $this->UsuarioTipo->newEntity();
        if ($this->request->is('post')) {
            $usuarioTipo = $this->UsuarioTipo->patchEntity($usuarioTipo, $this->request->getData());
            if ($this->UsuarioTipo->save($usuarioTipo)) {
                $this->Flash->success(__('The usuario tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('usuarioTipo'));
        $this->set('_serialize', ['usuarioTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario Tipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuarioTipo = $this->UsuarioTipo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuarioTipo = $this->UsuarioTipo->patchEntity($usuarioTipo, $this->request->getData());
            if ($this->UsuarioTipo->save($usuarioTipo)) {
                $this->Flash->success(__('The usuario tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario tipo could not be saved. Please, try again.'));
        }
        $this->set(compact('usuarioTipo'));
        $this->set('_serialize', ['usuarioTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario Tipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuarioTipo = $this->UsuarioTipo->get($id);
        if ($this->UsuarioTipo->delete($usuarioTipo)) {
            $this->Flash->success(__('The usuario tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
