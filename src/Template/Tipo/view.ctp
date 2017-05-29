<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo'), ['action' => 'edit', $tipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo'), ['action' => 'delete', $tipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipo view large-9 medium-8 columns content">
    <h3><?= h($tipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tipo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuario') ?></h4>
        <?php if (!empty($tipo->usuario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Mail') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Cargo') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipo->usuario as $usuario): ?>
            <tr>
                <td><?= h($usuario->id) ?></td>
                <td><?= h($usuario->name) ?></td>
                <td><?= h($usuario->lastname) ?></td>
                <td><?= h($usuario->mail) ?></td>
                <td><?= h($usuario->telefono) ?></td>
                <td><?= h($usuario->cargo) ?></td>
                <td><?= h($usuario->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuario', 'action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuario', 'action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuario', 'action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
