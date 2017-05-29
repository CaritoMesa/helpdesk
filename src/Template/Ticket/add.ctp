<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticket'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ticket form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Add Ticket') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('id_categoria');
            echo $this->Form->control('id_tipo');
            echo $this->Form->control('contacto_adicional');
            echo $this->Form->control('fecha_abierto');
            echo $this->Form->control('fecha_cerrado');
            echo $this->Form->control('sla');
            echo $this->Form->control('id_estado');
            echo $this->Form->control('id_solicitante');
            echo $this->Form->control('id_tecnico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
