<?php
class cliente
{
    private $pdo;
    public $idCliente;
    public $idIdentidad;
    public $Nombre;
    public $Direccion;
    public $Telefono;
    public $Email;

  

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

			$stm = $this->pdo->prepare("SELECT * FROM clientes");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idCliente)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM clientes WHERE idCliente = ?");
			$stm->execute(array($idCliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idCliente)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM clientes WHERE idCliente = ?");

			$stm->execute(array($idCliente));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE cliente  SET
                       
						idIdentidad       =?,
						Nombre        = ?,
						Dirrecion       = ?,
            			Telefono              = ?,
                        Email              = ?,
						
				    WHERE idCliente     = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                       
                        $data->idIdentidad,
                        $data->Nombre,
                        $data->Direccion,
                        $data->Telefono,
						$data->Email,
						$data->idCliente
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(clientes $data)
	{
		try
		{
		$sql = "INSERT INTO clientes (idCliente,idIdentidad,Nombre,Direccion,Telefono, Email)
		        VALUES (?, ?, ?, ?, ? , ? )";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idCliente,
                    $data->ididentidad,
                    $data->Nombre,
                    $data->Direccion,
					$data->Telefono,
                    $data->Email
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
