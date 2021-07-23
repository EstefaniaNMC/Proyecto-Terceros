<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=PersonaNatural">Persona Natural</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-PersonaNatural" action="?c=PersonaNatural&a=Guardar" method="post" enctype="multipart/form-data">


<div class="form-group">
        <label>Nombres </label>
        <input type="text" name="Nombres" value="<?php echo $prod->Nombres; ?>" class="form-control" placeholder="Ingrese su nombre correctamente" data-validacion-tipo="requerido|min:20" />
    </div>


    <div class="form-group">
        <label>Apellidos </label>
        <input type="text" name="Apellidos" value="<?php echo $prod->Apellidos; ?>" class="form-control" placeholder="Ingrese sus apellidos correctamente" data-validacion-tipo="requerido|min:20" />
    </div>
    

    <div class="form-group">
        <label>Identificacion</label>
        <input type="text" name="Identificacion" value="<?php echo $prod->Identificacion; ?>" class="form-control" placeholder="Ingrese su identidicacion correctamente " data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefono </label>
        <input type="tel" name="Telefono"  value="<?php echo $prod->Telefono; ?>" class="form-control" placeholder="Ej. 3054263654" data-validacion-tipo="requerido|min:20" />
    </div>

    
    <div class="form-group">
        <label>Correo </label>
        <input type="email" name="Correo" value="<?php echo $prod->Correo; ?>" class="form-control" placeholder="Ej. micorreo@gmail.com" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Direccion </label>
        <input type="text" name="Direccion" value="<?php echo $prod->Direccion; ?>" class="form-control" placeholder="Ingrese su direccion correctamente" data-validacion-tipo="requerido|min:20" />
    </div>

       <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-PersonaNatural").submit(function(){
            return $(this).validate();
        });
    })
</script>