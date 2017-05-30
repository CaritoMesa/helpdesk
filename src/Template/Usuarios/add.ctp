<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?= $this->Form->create($usuario) ?>
        <fieldset>
            <h3>Nuevo Usuario</h3>
            <?php
                echo $this->Form->control('name', ['label' => 'Nombres']);
                echo $this->Form->control('lastname', ['label' => 'Apellidos']);
                echo $this->Form->control('email', ['label' => 'E-mail']);
                echo $this->Form->control('password', ['label' => 'Contraseña']);
                echo $this->Form->control('telefono', ['label' => 'Telefono']);
                echo $this->Form->control('cargo', ['label' => 'Cargo']);
                echo $this->Form->control('id_tipo_usuario',  ['label' => 'Tipo de Usuario', 'options' => $usuarioTipos]);
            ?>
        </fieldset>
        <?= $this->Html->link('Cancelar', ['controller' => 'Usuarios', 'action' => 'index'], ['class' => 'btn btn-default']) ?>
        <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-primary pull-right']) ?>
        <?= $this->Form->end() ?>

    </div>
</div>
