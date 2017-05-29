<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo'), ['controller' => 'Tipo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuario view large-9 medium-8 columns content">
    <h3><?= h($usuario->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($usuario->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($usuario->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($usuario->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($usuario->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($usuario->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($usuario->tipo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tipo') ?></h4>
        <?php if (!empty($usuario->tipo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->tipo as $tipo): ?>
            <tr>
                <td><?= h($tipo->id) ?></td>
                <td><?= h($tipo->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tipo', 'action' => 'view', $tipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tipo', 'action' => 'edit', $tipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tipo', 'action' => 'delete', $tipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
