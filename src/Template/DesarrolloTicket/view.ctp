<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Desarrollo Ticket'), ['action' => 'edit', $desarrolloTicket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Desarrollo Ticket'), ['action' => 'delete', $desarrolloTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $desarrolloTicket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Desarrollo Ticket'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Desarrollo Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="desarrolloTicket view large-9 medium-8 columns content">
    <h3><?= h($desarrolloTicket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($desarrolloTicket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= $this->Number->format($desarrolloTicket->nombre) ?></td>
        </tr>
    </table>
</div>
