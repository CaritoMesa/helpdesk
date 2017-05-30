<div class="row">
    <div class="col-md-6 col-md-offset-3">
       <?= $this->Form->create($ticket) ?>
        <fieldset>
            <h3>Nuevo Ticket</h3>
            <?php
                echo $this->Form->control('nombre', ['label' => 'Asunto']);
                echo $this->Form->control('descripcion', ['label' => 'Descripción']);
                echo $this->Form->control('categoria_id',  ['label' => 'Categoría', 'options' => $ticketCategorias]);
                echo $this->Form->control('tipo_id',  ['label' => 'Tipo de Soporte', 'options' => $tipoTickets]);
                echo $this->Form->control('contacto_adicional', ['label' => 'Otro contacto']);
                echo $this->Form->control('sla', ['label' => 'SLA']);
                echo $this->Form->control('solicitante_id', ['options' => $usuarios, 'empty' => true]);
            ?>
        </fieldset>
        <?= $this->Html->link('Cancelar', ['controller' => 'Tickets', 'action' => 'index'], ['class' => 'btn btn-default']) ?>
        <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-primary pull-right']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
