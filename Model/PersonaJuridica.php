<?php
class PersonaJuridica
{
    private $pdo;
    public $idPersonaJuridica;
    public $Razon_Social;
    public $Nit;
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

			$stm = $this->pdo->prepare("SELECT * FROM `tbl.personajuridica`");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idPersonaJuridica)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM `tbl.personajuridica` WHERE idPersonaJuridica = ?");
			$stm->execute(array($idPersonaJuridica));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idPersonaJuridica)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM `tbl.personajuridica` WHERE idPersonaJuridica = ?");

			$stm->execute(array($idPersonaJuridica));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE `tbl.personajuridica`  SET
                       
						Razon_Social       =?,
						Nit        = ?,
						Telefono              = ?,
                        Correo              = ?,
						Dirrecion       = ?,

				    WHERE idPersonaJuridica     = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                       
                        $data->Razon_Social,
                        $data->Nit,  
                        $data->Telefono,
						$data->Correo,
                        $data->Direccion,
						$data->idPersonaJuridica
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(personajuridica $data)
	{
		try
		{
		$sql = "INSERT INTO `tbl.personajuridica` (idPersonaJuridica,Razon_Social,Nit,Telefono, Correo, Direccion)
		        VALUES (?, ?, ?, ?, ? , ? )";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idPersonaJuridica,
                    $data->Razon_Social,
                    $data->Nit,
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
