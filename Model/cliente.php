<?php
class cliente
{
	private $pdo;
    
    public $idcliente;
    public $tramite;
    public $oficina;
    public $numero_cuenta;
    public $nombre;
    public $Apellido;
	public $telefono;
	public $correo;


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

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE idcliente = ?");
			          

			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE idcliente = ?");			          

			$stm->execute(array($idcliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
{
    try 
    {
        $sql = "UPDATE cliente SET 
                    tramite = ?, 
                    oficina = ?,
                    numero_cuenta = ?,
                    nombre = ?, 
                    Apellido = ?,
                    telefono = ?,
                    correo = ?
                WHERE idcliente = ?";

        $this->pdo->prepare($sql)->execute(
            array(
                $data->tramite, 
                $data->oficina,
                $data->numero_cuenta,
                $data->nombre,
                $data->Apellido,
                $data->telefono,
                $data->correo,
                $data->idcliente // Asegúrate de incluir el idcliente aquí
            )
        );
    } 
    catch (Exception $e) 
    {
        die($e->getMessage());
    }
}


	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `cliente` (tramite,oficina,numero_cuenta,nombre,Apellido,telefono,correo) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->tramite, 
                    $data->oficina,
                    $data->numero_cuenta,
                    $data->nombre,
                    $data->Apellido,     
					$data->telefono,   
					$data->correo                  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
