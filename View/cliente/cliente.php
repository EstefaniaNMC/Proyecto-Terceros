<h1 class="page-header">Clientes </h1>

<div class="well well-sm text-right">

  
<a class="btn btn-primary" href="?c=PersonaNatural&a=Nuevo">Persona Natural </a>
    <a class="btn btn-primary" href="?c=PersonaJuridica&a=Nuevo">Persona Juridica</a>
    
          
    
    
</div>

<table class="table table-striped">
    <thead>
        <tr>
            
            <th style="width:120px;">idCliente</th>
            <th style="width:120px;">idIdentidad</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Direccion</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Email</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idCliente; ?></td>
            <td><?php echo $r->idIdentidad; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Direccion; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Email; ?></td>
            <td>
                <a href="?c=cliente&a=Crud&idCliente=<?php echo $r->idCliente; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=idCliente&a=Eliminar&idCliente=<?php echo $r->idCliente; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
