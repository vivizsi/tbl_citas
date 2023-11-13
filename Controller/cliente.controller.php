<?php
require_once 'Model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/cliente.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new cliente();
        
        if(isset($_REQUEST['idcliente'])){
            $alm = $this->model->getting($_REQUEST['idcliente']);
        }
        
        require_once 'View/header.php';
        require_once 'View/cliente-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new cliente();
        
        $alm->idcliente= $_REQUEST['idcliente'];
        $alm->tramite = $_REQUEST['tramite'];
        $alm->oficina = $_REQUEST['oficina'];
        $alm->numero_cuenta = $_REQUEST['numero_cuenta'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->correo = $_REQUEST['correo'];

        // SI ID cliente ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA cliente, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idcliente > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idcliente > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcliente']);
        header('Location: index.php');
    }
}
