<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket Desarrollo'), ['action' => 'edit', $ticketDesarrollo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Desarrollo'), ['action' => 'delete', $ticketDesarrollo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketDesarrollo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Desarrollos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Desarrollo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticketDesarrollos view large-9 medium-8 columns content">
    <h3><?= h($ticketDesarrollo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ticketDesarrollo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketDesarrollo->id) ?></td>
        </tr>
    </table>
</div>
