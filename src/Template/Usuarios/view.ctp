<div class="well">
    <h3><?= h($usuario->name) ?> <?= h($usuario->lastname) ?></h3>
    <dt>Email</dt>
    <dd>
        <?= h($usuario->email) ?>
    </dd>
    <br />
    <dt>
        Contraseña
    </dt>
    <dd>
        <?= h($usuario->password) ?>
    </dd>
    <br />

    <dt>
        Teléfono
    </dt>
    <dd>
        <?= h($usuario->telefono) ?>
    </dd>
    <br />

    <dt>
        Cargo
    </dt>
    <dd>
        <?= h($usuario->cargo) ?>
    </dd>
    <br />

    <dt>
        Tipo de Usuario
    </dt>
    <dd>
        <?= h($usuario->usuario_tipo->name) ?>
    </dd>
    <br />
    <?= $this->Html->link('Volver', ['controller' => 'Usuarios', 'action' => 'index'], ['class' => 'btn btn-default']) ?>
</div>
