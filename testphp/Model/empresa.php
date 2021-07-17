<?php
class Empresa
{
	private $pdo;
    
    public $idempresa;
    public $razon_social;
    public $rif;
    public $fecha_creacion;
    public $direccion;
    public $telefono;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM empresa");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idempresa)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM empresa WHERE idempresa = ?");
			          

			$stm->execute(array($idempresa));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idempresa)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM empresa WHERE idempresa = ?");			          

			$stm->execute(array($idempresa));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE empresa SET 
						razon_social          = ?, 
						rif        = ?,
                        fecha_creacion        = ?,
						direccion            = ?, 
						telefono = ?
				    WHERE idempresa = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->razon_social, 
                        $data->rif,
                        $data->fecha_creacion,
                        $data->direccion,
                        $data->telefono,
                        $data->idempresa
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `empresa` (razon_social,rif,fecha_creacion,direccion,telefono) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->razon_social, 
                    $data->rif,
                    $data->fecha_creacion,
                    $data->direccion,
                    $data->telefono                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
