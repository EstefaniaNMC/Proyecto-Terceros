<?php
require_once 'model/PersonaJuridica.php';

class PersonaJuridicaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new PersonaJuridica();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/personaJuridica/personaJuridica.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new PersonaJuridica();

        if(isset($_REQUEST['idPersonaJuridica'])){
            $prod = $this->model->Obtener($_REQUEST['idPersonaJuridica']);
        }

        require_once 'view/header.php';
        require_once 'view/personaJuridica/personaJuridica-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new PersonaJuridica();

        require_once 'view/header.php';
        require_once 'view/personaJuridica/personaJuridica-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new PersonaJuridica();

        $prod->idPersonaJuridica = $_REQUEST['idPersonaJuridica'];
        $prod->Razon_Social = $_REQUEST['Razon_Social'];
        $prod->Nit= $_REQUEST['Nit'];
        $prod->Telefono= $_REQUEST['Telefono'];
        $prod->Correo = $_REQUEST['Correo'];
        $prod->Direccion = $_REQUEST['Direccion'];
        
        $this->model->Registrar($prod);

        header('Location: index.php');
    }

    public function Editar(){
        $prod = new PersonaJuridica();

        
        $prod->Razon_Social = $_REQUEST['Razon_Social'];
        $prod->Nit= $_REQUEST['Nit'];
        $prod->Telefono= $_REQUEST['Telefono'];
        $prod->Correo = $_REQUEST['Correo'];
        $prod->Direccion = $_REQUEST['Direccion'];
        

        $this->model->Actualizar($prod);

        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idPersonaJuridica']);
        header('Location: index.php');
    }
}
