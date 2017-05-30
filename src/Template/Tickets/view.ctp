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
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Categorias'), ['controller' => 'TicketCategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Categoria'), ['controller' => 'TicketCategorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Tickets'), ['controller' => 'TipoTickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Ticket'), ['controller' => 'TipoTickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Estados'), ['controller' => 'TicketEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Estado'), ['controller' => 'TicketEstados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($ticket->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Categoria') ?></th>
            <td><?= $ticket->has('ticket_categoria') ? $this->Html->link($ticket->ticket_categoria->nombre, ['controller' => 'TicketCategorias', 'action' => 'view', $ticket->ticket_categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Ticket') ?></th>
            <td><?= $ticket->has('tipo_ticket') ? $this->Html->link($ticket->tipo_ticket->nombre, ['controller' => 'TipoTickets', 'action' => 'view', $ticket->tipo_ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto Adicional') ?></th>
            <td><?= h($ticket->contacto_adicional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Estado') ?></th>
            <td><?= $ticket->has('ticket_estado') ? $this->Html->link($ticket->ticket_estado->id, ['controller' => 'TicketEstados', 'action' => 'view', $ticket->ticket_estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $ticket->has('usuario') ? $this->Html->link($ticket->usuario->name, ['controller' => 'Usuarios', 'action' => 'view', $ticket->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sla') ?></th>
            <td><?= $this->Number->format($ticket->sla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solicitante Id') ?></th>
            <td><?= $this->Number->format($ticket->solicitante_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticket->created) ?></td>
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
