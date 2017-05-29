<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Detalle Ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detalleTicket index large-9 medium-8 columns content">
    <h3><?= __('Detalle Ticket') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_ticket') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_desarrollo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detalleTicket as $detalleTicket): ?>
            <tr>
                <td><?= $this->Number->format($detalleTicket->id) ?></td>
                <td><?= $this->Number->format($detalleTicket->id_ticket) ?></td>
                <td><?= $this->Number->format($detalleTicket->id_desarrollo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detalleTicket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detalleTicket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detalleTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalleTicket->id)]) ?>
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
