<?php
require_once 'Model/empresa.php';

class EmpresaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Empresa();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/empresa.php';
        require_once 'View/footer.php';
        require_once 'View/reporte.vista.php';
        
        
    }
    
    public function Crud(){
        $alm = new Empresa();
        
        if(isset($_REQUEST['idempresa'])){
            $alm = $this->model->getting($_REQUEST['idempresa']);
        }
        
        require_once 'View/header.php';
        require_once 'View/empresa-editar.php';
        require_once 'View/footer.php';
        
    }

    public function Crud2(){
        $alm = new Empresa();
        
        if(isset($_REQUEST['idempresa'])){
            $alm = $this->model->getting($_REQUEST['idempresa']);
        }
        
        require_once 'View/header.php';
        require_once 'View/reporte.php';
        require_once 'View/footer.php';
        
    
    }

  
    public function Guardar(){
        $alm = new Empresa();
        
        $alm->idempresa = $_REQUEST['idempresa'];
        $alm->razon_social = $_REQUEST['razon_social'];
        $alm->rif = $_REQUEST['rif'];
        $alm->fecha_creacion = $_REQUEST['fechaCreacion'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->telefono = $_REQUEST['telefono'];

        // SI ID empresa ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA empresa, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idempresa > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idempresa > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idempresa']);
        header('Location: index.php');
    }
}
