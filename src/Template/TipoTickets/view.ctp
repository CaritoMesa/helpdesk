<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Ticket'), ['action' => 'edit', $tipoTicket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Ticket'), ['action' => 'delete', $tipoTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoTicket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoTickets view large-9 medium-8 columns content">
    <h3><?= h($tipoTicket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tipoTicket->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoTicket->id) ?></td>
        </tr>
    </table>
</div>
