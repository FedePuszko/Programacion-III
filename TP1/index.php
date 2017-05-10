<?php  

require_once "persona.php";
require_once "empleado.php";
require_once "fabrica.php";

echo "HOLA";

echo "<br/>";
$empleado = new Empleado("Federico","Puszko","36880981","Masculino","10291","20000");
$empleado2 = new Empleado("Federico","Martinez","36880982","Masculino","10292","22000");

$fabrica = new Fabrica("Osde");

$fabrica->AgregarEmpleado($empleado);
$fabrica->AgregarEmpleado($empleado2);
//$fabrica->AgregarEmpleado($empleado);



var_dump($fabrica);
echo "<br/>"."<br/>";

var_dump($empleado);
echo "<br/>"."<br/>";

echo $empleado->Tostring();
echo "<br/>";

echo $empleado->Hablar("Español");
echo "<br/>"."<br/>";

$fabrica->Tostring();

echo $fabrica->CalcularSueldos();
echo "<br/>"."<br/>";

//$fabrica->EliminarEmpleadosRepetidos();
//$fabrica->EliminarEmpleado($empleado);
//var_dump($fabrica);


echo $fabrica->ToString();














?>

<!-- 
    <form action="administracion.php" method="post" enctype="multipart/form-data">
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label>Apellido:</label><br>
        <input type="text" name="apellido"><br>
        <label>Dni:</label><br>
        <input type="text" name="dni"><br>
        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="hombre"> Hombre<br>
        <input type="radio" name="sexo" value="mujer"> Mujer<br>
        <label>Legajo:</label><br>
        <input type="text" name="legajo"><br>
        <label>Sueldo:</label><br>
        <input type="text" name="sueldo"><br><br>
        <input type="file" name="img" id="img"><br><br>
        <input type="submit" value="Submit">
    </form> -->