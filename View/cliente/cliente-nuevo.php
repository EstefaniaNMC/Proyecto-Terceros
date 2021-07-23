<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-cliente" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">


<div class="form-group">
        <label>Nombre </label>
        <input type="text" name="Nombre" value="<?php echo $prod->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre correctamente" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Dirección </label>
        <input type="text" name="Direccion" value="<?php echo $prod->Direccion; ?>" class="form-control" placeholder="Ingrese su direccion correctamente" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $prod->Telefono; ?>" class="form-control" placeholder="Ingrese su telefono correctamente " data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" value="<?php echo $prod->Email; ?>" class="form-control" placeholder="Ingrese su email correctamente" data-validacion-tipo="requerido|min:20" />
    </div>

       <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>