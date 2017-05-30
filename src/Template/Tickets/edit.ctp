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
                ['action' => 'delete', $ticket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
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
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Edit Ticket') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('categoria_id', ['options' => $ticketCategorias]);
            echo $this->Form->control('tipo_id', ['options' => $tipoTickets]);
            echo $this->Form->control('contacto_adicional');
            echo $this->Form->control('fecha_cerrado', ['empty' => true]);
            echo $this->Form->control('sla');
            echo $this->Form->control('estado_id', ['options' => $ticketEstados]);
            echo $this->Form->control('solicitante_id');
            echo $this->Form->control('tecnico_id', ['options' => $usuarios, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
