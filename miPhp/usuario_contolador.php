<?php
	
		require_once('usuario_modelo.php');


		$boton=$_POST['boton'];

		switch ($boton) {
			
			case 'cerrar':
					session_start();
					session_destroy();
				break;
			case 'ingresar':
					$email = $_POST['email'];
					$password = $_POST['password'];
					$ins = new usuario();
					$array=$ins->identificar($email,$password);
					if ($array[0]=="") 
					{
						echo '0';
					}
					elseif ($array[4]=="0") 
                    {
                        echo '1';
                    }
                    else
                    {
                        session_start();
                        $_SESSION['ingreso']='YES';
                        $_SESSION['nombre']=$array[0];
                    }
                
				break;
			case 'registrar':
					
					$email = $_POST['email'];
					$password = $_POST['password'];

					$ins = new usuario();
					if($ins->registrar($email,$password))
					{
						echo "Registro efectuado ok. Pendiente de activación.";
					}
					else{
						echo "No se registro";
					}
				break;
			case 'estado':
					
					$email = $_POST['email'];
					$estado = $_POST['estado'];

					$ins = new usuario();
					if($ins->estado($email,$estado))
					{
						echo $ins->listar();
					}
					else{
						echo "No se registro";
					}
				break;
			case 'listar':
					
					$ins = new usuario();
					$array=$ins->listar();
					echo $array;
				break;
			case 'eliminar':
					
					$email = $_POST['email'];

					$ins = new usuario();
					if($ins->eliminar($email))
					{
						echo $ins->listar();
					}
					else{
						echo "No se registro";
					}
				break;
			
			default:
				# code...
				break;
		}

		
?>