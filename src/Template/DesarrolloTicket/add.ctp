<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Desarrollo Ticket'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="desarrolloTicket form large-9 medium-8 columns content">
    <?= $this->Form->create($desarrolloTicket) ?>
    <fieldset>
        <legend><?= __('Add Desarrollo Ticket') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
