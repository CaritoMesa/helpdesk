<div class="row">
	<div class="col-md-6 col-md-offset-3">
	    <?= $this->Form->create($usuarioTipo) ?>
	    <fieldset>
	        <h3>Editando Tipo de Usario</h3>
	        <?php
	            echo $this->Form->control('name', ['label' => 'Nombre']);
	        ?>
	    </fieldset>
	    <?= $this->Html->link('Cancelar', ['controller' => 'UsuarioTipos', 'action' => 'index'], ['class' => 'btn btn-default']) ?>
	    <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-primary pull-right']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>