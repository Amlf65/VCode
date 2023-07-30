

<?php 
	class usuario
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

		function identificar($email,$password)
		{
			$pass=sha1($password);
			$sql="SELECT * FROM usuarios WHERE nombre='$email' && clave='$pass'";
			$resultados = $this->conexion->conexion->query($sql);
			if ($resultados->num_rows > 0) {
				$r=$resultados->fetch_array();
			}
			else{
				$r[0]=0;
			}
			return $r;
			$this->conexion->cerrar();
		}
		
		function registrar($email,$password)
        {
			$pass= sha1($password);
			// echo "<script>console.log( 'Password: " . $password . "' );</script>";
			$sql="INSERT INTO usuarios VALUES('$email','$pass','','',0)";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

		function eliminar($email)
        {
			
			$sql="DELETE  FROM usuarios WHERE nombre='$email'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}
        
        function estado($email,$estado)
        {
			$fechaactual = getdate();
			
			if($estado=="1"){
				$sql="UPDATE usuarios SET activo=1, falta='".$fechaactual['year']  . $fechaactual['mon'] . $fechaactual['mday']."' WHERE nombre='$email'";
			}else{
				$sql="UPDATE usuarios SET activo=0, fbaja='".$fechaactual['year']  . $fechaactual['mon'] . $fechaactual['mday']."' WHERE nombre='$email'";
			}
			
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

		function listar()
		{
			$sql='SELECT * FROM usuarios';
			$resultados = $this->conexion->conexion->query($sql);
			if ($resultados->num_rows > 0)
			{
				
				$lista="<table class='table table-responsize'><tr><th>Usuario</th ><th  class='text-center'>Alta</th><th  class='text-center' >Baja</th><th  class='text-center'>Activo</th><th  class='text-center'></th></tr>";

				while($row = $resultados->fetch_array(MYSQLI_ASSOC))
				{
					$lista.="<tr><td><label for='".$row["nombre"]."'>". $row["nombre"] ."</label></td>"; 
					$lista.="<td class='text-center'>". $row["falta"] ."</td>"; 
										$lista.="<td class='text-center'>". $row["fbaja"] ."</td>"; 
					
					if ($row["activo"]=="1"){
						$lista.="<td class='text-center'><input checked type='checkbox' onclick=estado('".$row["nombre"]."','0')></td> ";
					}else{
						$lista.="<td class='text-center'><input type='checkbox' onclick=estado('".$row["nombre"]."','1')></td> ";
					}
					if($row["nombre"]=='admin'){
						$lista.="<td class='text-center'></td> ";
					}else{
						$lista.="<td class='text-center'><button onclick=eliminar('".$row["nombre"]."')>Borrar</button></td> ";
					}
					
					$lista.="</tr>";	
				}
				$lista.="</table>";
			} else 
			{
				$lista="";
			}
			$this->conexion->cerrar();
			return $lista;
		}
	}
?>
