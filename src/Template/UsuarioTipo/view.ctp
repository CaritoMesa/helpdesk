<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario Tipo'), ['action' => 'edit', $usuarioTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario Tipo'), ['action' => 'delete', $usuarioTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Tipo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Tipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarioTipo view large-9 medium-8 columns content">
    <h3><?= h($usuarioTipo->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($usuarioTipo->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuarioTipo->id) ?></td>
        </tr>
    </table>
</div>
