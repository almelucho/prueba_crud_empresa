<h1 class="page-header">
    <?php echo $alm->idempresa != null ? $alm->razon_social : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Empresa">Empresas</a></li>
  <li class="active"><?php echo $alm->idempresa != null ? $alm->razon_social : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Empresa&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idempresa" value="<?php echo $alm->idempresa; ?>" />
    
    <div class="form-group">
        <label>Razon Social</label>
        <input type="text" name="razon_social" value="<?php echo $alm->razon_social; ?>" class="form-control" placeholder="Ingrese Razon Social" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Rif</label>
        <input type="number" name="rif" min="100000", max="999999999"   title="Agregue rif de 10 digitos sin espacios ni guiones" require value="<?php echo $alm->rif; ?>" class="form-control" placeholder="Ingrese su rif" data-validacion-tipo="requerido|:10" />
    </div>
    
    <div class="form-group">
        <label>Fecha de creacion de la empresa</label>
        <input type="date" name="fechaCreacion" value="<?php echo $alm->fecha_creacion; ?>" class="form-control" placeholder="Ingrese fecha de creacion de la empresa" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese su dirección" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="tel" name="telefono" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" title="Agregue Codigo local y su numero" required value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su n° de telefono" data-validacion-tipo="requerido|telefono" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
