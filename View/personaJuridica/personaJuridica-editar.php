<h1 class="page-header">
    <?php echo $prod->idPersonaJuridica != null ? $prod->Razon_Social: 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=PersonaJuridica">Persona Juridica</a></li>
  <li class="active"><?php echo $prod->idPersonaJuridica!= null ? $prod->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-PersonaJuridica" action="?c=PersonaJuridica&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idPersonaJuridica" value="<?php echo $prod->idPersonaJuridica; ?>" />

  

    <div class="form-group">
        <label>Razón Social </label>
        <input type="text" name="Razon_Social" value="<?php echo $prod->Razon_Social; ?>" class="form-control" placeholder="Ingrese la razón social correctamente" data-validacion-tipo="requerido|min:20" />
    </div>


    <div class="form-group">
        <label>Nit</label>
        <input type="text" name="Nit" value="<?php echo $prod->Nit; ?>" class="form-control" placeholder="Ingrese el nit correctamente" data-validacion-tipo="requerido|min:20" />
    </div>
    

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $prod->Telefono; ?>" class="form-control" placeholder="Ingrese su telefono correctamente " data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $prod->Correo; ?>" class="form-control" placeholder="Ingrese su Correo correctamente" data-validacion-tipo="requerido|min:20" />
    </div>

    
    <div class="form-group">
        <label>Dirección </label>
        <input type="text" name="Direccion" value="<?php echo $prod->Direccion; ?>" class="form-control" placeholder="Ingrese su direccion correctamente" data-validacion-tipo="requerido|min:20" />
    </div>>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-PersonaJuridica").submit(function(){
            return $(this).validate();
        });
    })
</script>