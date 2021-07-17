<h1 class="page-header">Empresas</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Empresa&a=Crud">Agregar Empresa</a>
</div>
<div class="well well-sm text-right">
    <a class="btn btn-primary" onClick="document.location.href='/Reporte-pdf-php/index.php'" >Agregar reporte</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Razon Social</th>
            <th>Rif</th>
            <th>Fecha de creacion de la empresa</th>
            <th >Direccion</th>
            <th >Telefono</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->razon_social; ?></td>
            <td><?php echo $r->rif; ?></td>
            <td><?php echo $r->fecha_creacion; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=Empresa&a=Crud&idempresa=<?php echo $r->idempresa; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=Empresa&a=Eliminar&idempresa=<?php echo $r->idempresa; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
