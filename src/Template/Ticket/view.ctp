<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticket view large-9 medium-8 columns content">
    <h3><?= h($ticket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ticket->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto Adicional') ?></th>
            <td><?= h($ticket->contacto_adicional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categoria') ?></th>
            <td><?= $this->Number->format($ticket->id_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tipo') ?></th>
            <td><?= $this->Number->format($ticket->id_tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sla') ?></th>
            <td><?= $this->Number->format($ticket->sla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Estado') ?></th>
            <td><?= $this->Number->format($ticket->id_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Solicitante') ?></th>
            <td><?= $this->Number->format($ticket->id_solicitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tecnico') ?></th>
            <td><?= $this->Number->format($ticket->id_tecnico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Abierto') ?></th>
            <td><?= h($ticket->fecha_abierto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Cerrado') ?></th>
            <td><?= h($ticket->fecha_cerrado) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->descripcion)); ?>
    </div>
</div>
