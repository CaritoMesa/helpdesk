<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuarioTipos Controller
 *
 * @property \App\Model\Table\UsuarioTiposTable $UsuarioTipos
 *
 * @method \App\Model\Entity\UsuarioTipo[] paginate($object = null, array $settings = [])
 */
class UsuarioTiposController extends AppController
{

    public function index()
    {
        $usuarioTipos = $this->paginate($this->UsuarioTipos);

        $this->set(compact('usuarioTipos'));
        $this->set('_serialize', ['usuarioTipos']);
    }

    public function add()
    {
        $usuarioTipo = $this->UsuarioTipos->newEntity();
        if ($this->request->is('post')) {
            $usuarioTipo = $this->UsuarioTipos->patchEntity($usuarioTipo, $this->request->getData());
            if ($this->UsuarioTipos->save($usuarioTipo)) {
                $this->Flash->success(__('El tipo de usuario ha sido agregado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El tipo de usuario no ha sido agregado. Por favor, intente nuevamente.'));
        }
        $this->set(compact('usuarioTipo'));
        $this->set('_serialize', ['usuarioTipo']);
    }

    public function edit($id = null)
    {
        $usuarioTipo = $this->UsuarioTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuarioTipo = $this->UsuarioTipos->patchEntity($usuarioTipo, $this->request->getData());
            if ($this->UsuarioTipos->save($usuarioTipo)) {
                $this->Flash->success(__('El tipo de usuario ha sido agregado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El tipo de usuario no ha sido agregado. Por favor, intente nuevamente.'));
        }
        $this->set(compact('usuarioTipo'));
        $this->set('_serialize', ['usuarioTipo']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuarioTipo = $this->UsuarioTipos->get($id);
        if ($this->UsuarioTipos->delete($usuarioTipo)) {
            $this->Flash->success(__('El tipo de usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El tipo de usuario no ha sido eliminado. Por favor, intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
