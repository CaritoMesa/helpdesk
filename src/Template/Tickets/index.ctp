<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Categorias'), ['controller' => 'TicketCategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Categoria'), ['controller' => 'TicketCategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Tickets'), ['controller' => 'TipoTickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Ticket'), ['controller' => 'TipoTickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Estados'), ['controller' => 'TicketEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Estado'), ['controller' => 'TicketEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto_adicional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_cerrado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnico_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= h($ticket->nombre) ?></td>
                <td><?= $ticket->has('ticket_categoria') ? $this->Html->link($ticket->ticket_categoria->nombre, ['controller' => 'TicketCategorias', 'action' => 'view', $ticket->ticket_categoria->id]) : '' ?></td>
                <td><?= $ticket->has('tipo_ticket') ? $this->Html->link($ticket->tipo_ticket->nombre, ['controller' => 'TipoTickets', 'action' => 'view', $ticket->tipo_ticket->id]) : '' ?></td>
                <td><?= h($ticket->contacto_adicional) ?></td>
                <td><?= h($ticket->created) ?></td>
                <td><?= h($ticket->fecha_cerrado) ?></td>
                <td><?= $this->Number->format($ticket->sla) ?></td>
                <td><?= $ticket->has('ticket_estado') ? $this->Html->link($ticket->ticket_estado->id, ['controller' => 'TicketEstados', 'action' => 'view', $ticket->ticket_estado->id]) : '' ?></td>
                <td><?= $this->Number->format($ticket->solicitante_id) ?></td>
                <td><?= $ticket->has('usuario') ? $this->Html->link($ticket->usuario->name, ['controller' => 'Usuarios', 'action' => 'view', $ticket->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
