<?php





?>
<h1 class="page-header">Reporte</h1>




<table class="table table-striped">
    <thead>
        <tr>
          
            <th>Fecha de creacion de la empresa</th>
           
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
           
            <td><?php echo $r->fecha_creacion; ?></td>
            
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 