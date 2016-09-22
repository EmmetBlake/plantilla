
<?php  
/**
* 
*/
class Conexion
{
	// clase que realiza todo el trabajo pesado de conexion
	//incluye todas las funciones que se ocupan 
	var $driver ;
	var $hostName;
	var $dbName;
	var $us;     
	var $pass;   
	var $connection;
	
	 function Conexion()
	{
		try {

			$this->us="root";
			$this->pass="";
			$this->driver = "mysql:host";
			$this->hostName="localhost";
			$this->dbName="pruebas";
			$this->connection = new PDO($this->driver.'='.$this->hostName.';dbname='.$this->dbName,$this->us,$this->pass);
				// verificar esta linea
			$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->connection->exec("SET CHARACTER SET utf8");
		} catch (Exception $e) {
				echo $e->getMessage();
				echo $e->getLine();
		}
		
	}

    

	
	//funcion que envia el comentario de la galeria 
	//
	//
	 function comentario($coment)
	{
		
		try{
			
			$sentencia= "INSERT INTO COMENTARIOS(COMENTARIO) VALUES(?)";
			$insert   = $this->connection->prepare($sentencia);
			$insert->execute(array($coment));
			}catch(Exception $e){
				echo $e->getMessage();
				echo $e->getLine();
			} finally {
				
			header("location:galeria.php");
			}
	}
	
	//
	//funcion que envia los datos del formulario de contacto
	//

	public function contacto($nom,$mail,$com)
	{
		try{

			$sentencia= "INSERT INTO CONTACTO(NOMBRE,MAIL,CONTACTO) VALUES(?,?,?)";
			$insert   = $this->connection->prepare($sentencia);
			$insert->execute(array($nom,$mail,$com));
			

			}catch(Exception $e){
				echo $e->getMessage();
				echo $e->getLine();
			}finally{
				header("location:contacto.php");
			}	
		
	}

	//funcion que recupera los ultimos 3 comentarios insertados en galeria
	//
	//

	public function comentarioVista()
	{
		try{

			$sentencia= "SELECT * FROM COMENTARIOS ORDER BY Fecha DESC LIMIT 3";
			$select   = $this->connection->query($sentencia);
			
			while ($vista=$select->fetch(PDO::FETCH_ASSOC)) {
				echo "<p class='comAnteriores1'>".$vista['fecha']."</p><br>";
				echo "<p class='comAnteriores2'>".$vista['comentario']."</p>";
			}
			

			}catch(Exception $e){
				echo $e->getMessage();
				echo $e->getLine();
			}	
		
	}


	//funcion que recupera los datos que s envian por el formlario de contacto
	//empezando del mas reciente al mas antiguo
	//

	public function manager()
	{
		try{

			$sentencia= "SELECT * FROM CONTACTO ORDER BY Fecha DESC";
			$select   = $this->connection->query($sentencia);
			
			while ($vista=$select->fetch(PDO::FETCH_ASSOC)) {
				echo "<table>";
			 	echo "<tr><th>fecha</th><th>nombre</th><th>e-mail</th><th >mensaje</th></tr>";
				echo "<tr><td>".$vista['fecha']."</td><td>".$vista['nombre']."</td><td>".$vista['mail']."</td>
				<td class='mensaje'>".$vista['contacto']."</td></tr>";
			    echo "</table>";
			}
			

			}catch(Exception $e){
				echo $e->getMessage();
				echo $e->getLine();
			}	
	}

	//funcion que realiza el login del administrador 
	//
	//

	public function login($manager,$password)
	{
		try{

			$sentencia= "SELECT * FROM MANAGER";
			$select   = $this->connection->query($sentencia);
			
			while ($vista=$select->fetch(PDO::FETCH_ASSOC)) {
				if ($manager==$vista['manager']&&$password==$vista['password']) {
					session_start();
					$_SESSION["admin"] = $manager;
					header("location:manger.php");
				}else{
					header("location:managerLogin.php");
				}
			}
			

			}catch(Exception $e){
				echo $e->getMessage();
				echo $e->getLine();
			}	
	}
	
}

?>
