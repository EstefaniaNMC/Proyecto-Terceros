<h1 class="page-header">
    <?php echo $prod->idCliente != null ? $prod->Nombre: 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Cliente</a></li>
  <li class="active"><?php echo $prod->idCliente!= null ? $prod->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=cliente&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idCliente" value="<?php echo $prod->idCliente; ?>" />

  

    <div class="form-group">
        <label>Nombre </label>
        <input type="text" name="Nombre" value="<?php echo $prod->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Dirección </label>
        <input type="text" name="Direccion" value="<?php echo $prod->Direccion; ?>" class="form-control" placeholder="Ingrese su direccion" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $prod->Telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" value="<?php echo $prod->Email; ?>" class="form-control" placeholder="Ingrese su email" data-validacion-tipo="requerido|min:20" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>