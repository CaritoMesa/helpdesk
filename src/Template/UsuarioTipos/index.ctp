<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Tipos de Usuario
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'UsuarioTipos', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarioTipos as $usuarioTipo): ?>
                    <tr>
                        <td><?= $this->Number->format($usuarioTipo->id) ?></td>
                        <td><?= h($usuarioTipo->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuarioTipo->id]) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $usuarioTipo->id], ['confirm' => __('¿Está seguro de eliminar {0}?', $usuarioTipo->name)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primero')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('último') . ' >>') ?>
            </ul>
        </div>
    </div>
</div>
