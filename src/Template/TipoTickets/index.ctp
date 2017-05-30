<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoTickets index large-9 medium-8 columns content">
    <h3><?= __('Tipo Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoTickets as $tipoTicket): ?>
            <tr>
                <td><?= $this->Number->format($tipoTicket->id) ?></td>
                <td><?= h($tipoTicket->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoTicket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoTicket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoTicket->id)]) ?>
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
