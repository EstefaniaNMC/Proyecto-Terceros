<?php
require_once 'model/PersonaNatural.php';

class PersonaNaturalController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new PersonaNatural();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/personaNatural/personaNatural.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new PersonaNatural();

        if(isset($_REQUEST['idPersonaNatural'])){
            $prod = $this->model->Obtener($_REQUEST['idPersonaNatural']);
        }

        require_once 'view/header.php';
        require_once 'view/personaNatural/personaNatural-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new PersonaNatural();

        require_once 'view/header.php';
        require_once 'view/personaNatural/personaNatural-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new PersonaNatural();

        $prod->idPersonaNatural = $_REQUEST['idPersonaNatural'];
        $prod->Nombres= $_REQUEST['Nombres'];
        $prod->Apellidos= $_REQUEST['Apellidos'];
        $prod->Identificacion= $_REQUEST['Identificacion'];
        $prod->Telefono= $_REQUEST['Telefono'];
        $prod->Correo = $_REQUEST['Correo'];
        $prod->Direccion = $_REQUEST['Direccion'];

        $this->model->Registrar($prod);

        header('Location: index.php');
    }

    public function Editar(){
        $prod = new PersonaNatural();

        
        $prod->Nombres= $_REQUEST['Nombres'];
        $prod->Apellidos= $_REQUEST['Apellidos'];
        $prod->Identificacion= $_REQUEST['Identificacion'];
        $prod->Telefono= $_REQUEST['Telefono'];
        $prod->Correo = $_REQUEST['Correo'];
        $prod->Direccion = $_REQUEST['Direccion'];

        $this->model->Actualizar($prod);

        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idPersonaNatural']);
        header('Location: index.php');
    }
}
