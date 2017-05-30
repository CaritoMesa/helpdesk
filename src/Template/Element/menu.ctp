<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="navbar-brand" href="/helpdesk/">Helpdesk</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?= $this->Html->link('Tickets', ['controller' => 'Tickets', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Categoría Tickets', ['controller' => 'TicketCategorias', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Desarrollo Tickets', ['controller' => 'TicketDesarrollos', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Detalle Tickets', ['controller' => 'TicketDetalles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Estado Tickets', ['controller' => 'TicketEstados', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Tipo Tickets', ['controller' => 'TipoTickets', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link('Usuarios', ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link('Tipos de Usuario', ['controller' => 'UsuarioTipos', 'action' => 'index']) ?></li>
          </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>