<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketDetalle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketDetalle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket Detalles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ticketDetalles form large-9 medium-8 columns content">
    <?= $this->Form->create($ticketDetalle) ?>
    <fieldset>
        <legend><?= __('Edit Ticket Detalle') ?></legend>
        <?php
            echo $this->Form->control('id_ticket');
            echo $this->Form->control('descripción');
            echo $this->Form->control('id_desarrollo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
