<h1 class="page-header">clientes</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Crud">Agregar cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >tramite</th>
            <th>oficina</th>
            <th>numero_cuenta</th>
            <th >nombre</th>
            <th >Apellido</th>
            <th >telefono</th>
            <th >correo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->tramite; ?></td>
            <td><?php echo $r->oficina; ?></td>
            <td><?php echo $r->numero_cuenta; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->Apellido; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->correo; ?></td>

            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=cliente&a=Crud&idcliente=<?php echo $r->idcliente; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=cliente&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
