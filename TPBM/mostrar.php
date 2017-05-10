<?php 

include "empleado.php";

$ruta = fopen("empleados.txt","r");

if($ruta)
{
	while (($bufer = fgets($ruta,9999)) != false)
	{
		$arrayEmpleado = explode("-",$bufer);
		$empleado = new Empleado($arrayEmpleado[0],$arrayEmpleado[1],$arrayEmpleado[2],$arrayEmpleado[3],$arrayEmpleado[4],$arrayEmpleado[5]);
  		$empleado->setPathFoto($arrayEmpleado[6]."-".$arrayEmpleado[7]);
        // echo "Nombre:".$arrayEmpleado[0]."</br>";       
        // echo "Apellido:".$arrayEmpleado[1]."</br>";
        // echo "Dni:".$arrayEmpleado[2]."</br>";
        // echo "Sexo:".$arrayEmpleado[3]."</br>";
        // echo "Legajo:".$arrayEmpleado[4]."</br>";
        // echo "Sueldo:".$arrayEmpleado[5]."</br>";
        // echo "</br>";
        echo $empleado->ToString()."</br>";
        echo "<p><img src=".$empleado->getPathFoto()."style='width:304px;height:228px;' ></p>";

	}
}

fclose($ruta);


?>