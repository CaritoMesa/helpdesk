<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket Estado'), ['action' => 'edit', $ticketEstado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Estado'), ['action' => 'delete', $ticketEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketEstado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticketEstados view large-9 medium-8 columns content">
    <h3><?= h($ticketEstado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ticketEstado->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketEstado->id) ?></td>
        </tr>
    </table>
</div>
