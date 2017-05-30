<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket Detalle'), ['action' => 'edit', $ticketDetalle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Detalle'), ['action' => 'delete', $ticketDetalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketDetalle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Detalles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Detalle'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticketDetalles view large-9 medium-8 columns content">
    <h3><?= h($ticketDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Ticket') ?></th>
            <td><?= $this->Number->format($ticketDetalle->id_ticket) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Desarrollo') ?></th>
            <td><?= $this->Number->format($ticketDetalle->id_desarrollo) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripción') ?></h4>
        <?= $this->Text->autoParagraph(h($ticketDetalle->descripción)); ?>
    </div>
</div>
