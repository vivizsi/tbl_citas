<h1 class="page-header">
    <?php echo $alm->idcliente != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">clientes</a></li>
  <li class="active"><?php echo $alm->idcliente != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcliente" value="<?php echo $alm->idcliente; ?>" />
    
    <div class="form-group">
        <label>tramite</label>
        <input type="text" name="tramite" value="<?php echo $alm->tramite; ?>" class="form-control" placeholder="Ingrese el tramite " data-validacion-tipo="requerido|tramite" />
    </div>
    
    <div class="form-group">
        <label>oficina</label>
        <input type="text" name="oficina" value="<?php echo $alm->oficina; ?>" class="form-control" placeholder="Ingrese la oficina que le queda cerca" data-validacion-tipo="requerido|oficina" />
    </div>
    
    <div class="form-group">
        <label>numero_cuenta</label>
        <input type="number" name="numero_cuenta" value="<?php echo $alm->numero_cuenta; ?>" class="form-control" placeholder="Ingrese su numero de cuenta" data-validacion-tipo="requerido|numero_cuenta" />
    </div>
    
    <div class="form-group">
        <label>nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|nombre" />
    </div>

    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $alm->Apellido; ?>" class="form-control" placeholder="Ingrese su Apellido" data-validacion-tipo="requerido|Apellido" />
    </div>
    
    <div class="form-group">
        <label>telefono</label>
        <input type="number" name="telefono" value="<?php echo $alm->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|telefono" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
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
