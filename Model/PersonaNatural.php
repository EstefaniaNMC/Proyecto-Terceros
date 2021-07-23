<?php
class PersonaNatural
{
    private $pdo;
    public $idPersonaNatural;
    public $Nombres;
    public $Apellidos;
    public $Identificacion;
    public $Telefono;
    public $Correo;
    public $Direccion;

  

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM `tbl.personanatural`");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idPersonaNatural)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM `tbl.personanatural` WHERE idPersonaNatural = ?");
			$stm->execute(array($idPersonaNatural));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idPersonaNatural)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM `tbl.personanatural` WHERE idPersonaNatural = ?");

			$stm->execute(array($idPersonaNatural));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE `tbl.personanatural`  SET
                       
						
						Nombres        = ?,
                        Apellidos        = ?,
                        Identificacion        = ?,
						Telefono              = ?,
                        Correo              = ?,
                        Dirrecion       = ?,
						
				    WHERE idPersonaNatural     = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                       
                   
                        $data->Nombres,
                        $data->Apellidos,
                        $data->Identificacion,                     
                        $data->Telefono,
						$data->Correo,
                        $data->Direccion,
						$data->idPersonaNatural
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(personanatural $data)
	{
		try
		{
		$sql = "INSERT INTO `tbl.personanatural` (idPersonaNatural,Nombres,Apellidos,identifiacion,,Telefono, Correo,Direccion)
		        VALUES (?, ?, ?, ?, ? , ? ,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idPersonaNatural,
                    $data->Nombres,
                    $data->Apellidos,
                    $data->Identificacion,
                    $data->Telefono,
                    $data->Correo,
                    $data->Direccion
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
