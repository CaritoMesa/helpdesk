<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Tipos de Usuario
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'UsuarioTipos', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarioTipos as $usuarioTipo): ?>
                    <tr>
                        <td><?= $this->Number->format($usuarioTipo->id) ?></td>
                        <td><?= h($usuarioTipo->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuarioTipo->id]) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $usuarioTipo->id], ['confirm' => __('¿Está seguro de eliminar {0}?', $usuarioTipo->name)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primero')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('último') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>


<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario Tipos'), ['controller' => 'UsuarioTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario Tipo'), ['controller' => 'UsuarioTipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tipo_usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->name) ?></td>
                <td><?= h($usuario->lastname) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= h($usuario->telefono) ?></td>
                <td><?= h($usuario->cargo) ?></td>
                <td><?= $usuario->has('usuario_tipo') ? $this->Html->link($usuario->usuario_tipo->name, ['controller' => 'UsuarioTipos', 'action' => 'view', $usuario->usuario_tipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
