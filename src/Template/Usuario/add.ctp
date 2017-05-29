<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipo'), ['controller' => 'Tipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuario form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lastname');
            echo $this->Form->control('mail');
            echo $this->Form->control('telefono');
            echo $this->Form->control('cargo');
            echo $this->Form->control('tipo');
            echo $this->Form->control('tipo._ids', ['options' => $tipo]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
