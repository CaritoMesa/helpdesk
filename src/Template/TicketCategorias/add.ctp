<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?= $this->Form->create($ticketCategoria) ?>
        <fieldset>
            <h3>Nueva Categoría de Ticket</h3>
            <?php
                echo $this->Form->control('nombre');
            ?>
        </fieldset>
        <?= $this->Html->link('Cancelar', ['controller' => 'Usuarios', 'action' => 'index'], ['class' => 'btn btn-default']) ?>
        <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-primary pull-right']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>