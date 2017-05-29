<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Detalle Ticket'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="detalleTicket form large-9 medium-8 columns content">
    <?= $this->Form->create($detalleTicket) ?>
    <fieldset>
        <legend><?= __('Add Detalle Ticket') ?></legend>
        <?php
            echo $this->Form->control('id_ticket');
            echo $this->Form->control('descripción');
            echo $this->Form->control('id_desarrollo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
