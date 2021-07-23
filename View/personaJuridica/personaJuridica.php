<h1 class="page-header">Persona Juridica</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=PersonaJuridica&a=Crud">Nueva Persona Juridica</a>
    <a class="btn btn-primary" href="?c=PersonaNatural&a=Crud">Nueva Persona Natural</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            
            
            <th style="width:120px;">idPersonaJuridica</th>
            <th style="width:120px;">Razón Social</th>
            <th style="width:120px;">Nit</th>
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
          
            <td><?php echo $r->idPersonaJuridica; ?></td>
            <td><?php echo $r->Razon_Social; ?></td>
            <td><?php echo $r->Nit; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->Direccion; ?></td>
            <td><?php echo $r->Sede; ?></td>
            <td><?php echo $r->Estado; ?></td>
            
            <td>
                <a href="?c=PersonaJuridica&a=Crud&idPersonaJuridica=<?php echo $r->idPersonaJuridica; ?>">Editar</a>
            </td>
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
