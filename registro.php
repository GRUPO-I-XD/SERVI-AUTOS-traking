<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="registros";

    //conectar con el servidor
    $conectar=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos); // $conectar=mysqli_connect('localhost(nomb. del servidor)','root(usuario)');
    //verificamos la conexion
    if(!$conectar){
        echo"No se pudo conectar con el servidor";
    }else{
        $base=mysqli_select_db($conectar, $baseDeDatos); //'registro'
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }


    //Recuperar las variable del formulario
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $contraseña2=$_POST['contraseña2'];

    //hacemos la sentencia de sql para guardar los datos en la 
    $sql="INSERT INTO registro VALUES('$correo','$contraseña','$contraseña2')";
   
    //Ejecutamos la sentencia
    $ejecutar=mysqli_query($conectar,$sql);
    
    //verificamos la ejecucion
    if(!$ejecutar){
        echo"Hubo algun error";
    }else{
        echo"Datos Guardados correctamente<br><a href='index.html'>Volver</a>";
    }    

?>


<div class="tabla">
			<table>
				<tr>
					<th>email</th>
					<th>contraseña</th>
					<th>contraseña2</th>
				</tr>
					<?php
						$consulta= "SELECT * FROM registro"; /*Vamos hacer una consulta a la base de atos "datos" (selecciona todos los datos de la table datos*/
						$ejecutarConsulta =mysqli_query($conectar, $consulta); /*ejecutamos la consulta para mostrar tods los datos de datos */
						$verFilas=mysqli_num_rows($ejecutarConsulta);/*Consulatr si  "datos " tiene datos, cuantas lineas o dato saco de la tabla de datos  */
						$fila=mysqli_fetch_array($ejecutarConsulta); /*trae lo de la consulta por medioe de $ejecutarConsulta,  en un array y guarde lo en la var fila*/

                        /*var_dump($fila);*/


						if(!$ejecutarConsulta){ /**Si no se ejecuta , se  ejecurta el sgt. codigo */
							echo"Error en la consulta";
						}else{
							if($verFilas<1){ /*Si no hay registr ejecurta el sgt. codigo */
								echo"<tr><td> Sin registros </td></tr>";
							}else{/**Si hay registro hacer lo sgt */
								for($i=0; $i<=$fila; $i++ ) {
									echo'
										<tr>
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
										</tr>
									';
									$fila=mysqli_fetch_array($ejecutarConsulta); /*evita que el bucle sea infinito*//*trae lo de la consulta por medioe de $ejecutarConsulta,  en un array y guarde lo en la var fila*/

								}
							}
						}
					?>	
			</table>
		</div>
</body>
</html>