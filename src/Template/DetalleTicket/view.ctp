<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalle Ticket'), ['action' => 'edit', $detalleTicket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalle Ticket'), ['action' => 'delete', $detalleTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalleTicket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalle Ticket'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalle Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detalleTicket view large-9 medium-8 columns content">
    <h3><?= h($detalleTicket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detalleTicket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Ticket') ?></th>
            <td><?= $this->Number->format($detalleTicket->id_ticket) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Desarrollo') ?></th>
            <td><?= $this->Number->format($detalleTicket->id_desarrollo) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripción') ?></h4>
        <?= $this->Text->autoParagraph(h($detalleTicket->descripción)); ?>
    </div>
</div>
