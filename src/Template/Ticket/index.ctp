<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ticket index large-9 medium-8 columns content">
    <h3><?= __('Ticket') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto_adicional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_abierto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_cerrado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_solicitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tecnico') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticket as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= h($ticket->nombre) ?></td>
                <td><?= $this->Number->format($ticket->id_categoria) ?></td>
                <td><?= $this->Number->format($ticket->id_tipo) ?></td>
                <td><?= h($ticket->contacto_adicional) ?></td>
                <td><?= h($ticket->fecha_abierto) ?></td>
                <td><?= h($ticket->fecha_cerrado) ?></td>
                <td><?= $this->Number->format($ticket->sla) ?></td>
                <td><?= $this->Number->format($ticket->id_estado) ?></td>
                <td><?= $this->Number->format($ticket->id_solicitante) ?></td>
                <td><?= $this->Number->format($ticket->id_tecnico) ?></td>
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
