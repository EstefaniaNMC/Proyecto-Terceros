<h1 class="page-header">Persona Natural </h1>

<div class="well well-sm text-right">

  
<a class="btn btn-primary" href="?c=PersonaNatural&a=Nuevo"> Nueva Persona Natural </a>
    <a class="btn btn-primary" href="?c=Persona Juridica&a=Nuevo">Nueva Persona Juridica</a>
    
          
    
    
</div>
<table class="table table-striped">
    <thead>
        <tr>
            
            
            
            <th style="width:120px;">Nombres</th>
            <th style="width:120px;">Apellido</th>
            <th style="width:120px;">Identificacion</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Correo</th>
            <th style="width:120px;">Direccion</th>
            <th style="width:120px;">Sede</th>
            <th style="width:120px;">Estado</th>
            



            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
          
            <td><?php echo $r->Nombres; ?></td>
            <td><?php echo $r->Apellido; ?></td>
            <td><?php echo $r->Identificacion; ?></td> 
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->Direccion; ?></td>
            <td><?php echo $r->Sede; ?></td>
            <td><?php echo $r->Estado; ?></td>
            
            <td>
                <a href="?c=PersonaNatural&a=Crud&idPersonaNatural=<?php echo $r->idPersonaNatural; ?>">Editar</a>
            </td>
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
