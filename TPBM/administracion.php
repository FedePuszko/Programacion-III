<?php

require ("empleado.php");

    // $legajo = $_POST['legajo'] ;
    // $nombre = $_POST['nombre'] ;
    // $apellido = $_POST['apellido'] ;
    // $dni = $_POST['dni'] ;
    // $sexo = $_POST['sexo'] ;
    // $sueldo = $_POST['sueldo'] ;

	var_dump($_POST);

	if(isset($_POST["borrar"]))
	{

		Empleado::BorrarEmpleado($_POST['dniborrar']);
	}
			




$arrayExt = array("jpg","bmp","gif","png","jpeg");
    if(isset($_POST["guardar"]))
    {
        if($_FILES["archivo"]["size"]< 1024000)
        {
            foreach ($arrayExt as $key) 
            {
            if("image/".$key ==$_FILES['archivo']['type'])
                {
                    $destino = "Fotos/".$_POST["dni"]."-".$_POST["apellido"].".".trim($_FILES["archivo"]["type"],"image/");
                    move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino);   
                }
            }

			$empleado1 = new Empleado($_POST["nombre"],$_POST["apellido"],$_POST["dni"],$_POST["sexo"],$_POST["legajo"],$_POST["sueldo"]);
			$empleado1->setPathFoto("Fotos/".$_POST["dni"]."-".$_POST["apellido"].".".trim($_FILES["archivo"]["type"],"image/"));
			//$empleado1->setPathFoto($destino);

			if(isset($_POST["nombre"],$_POST["apellido"],$_POST["dni"],$_POST["sexo"],$_POST["legajo"],$_POST["sueldo"]))
			{
				if ($_POST["nombre"] != null && $_POST["apellido"] != null && $_POST["dni"] != null && $_POST["sexo"] != null && $_POST["legajo"] != null && $_POST["sueldo"] != null)
				{
					$empleado1->Guardar($empleado1);
					echo "</br>".'<a href="mostrar.php">Mostrar </a>';
				}
				else 
				{
					echo "</br>"."<a href='index.html'>Error</a>";
				}
			}
			else
			{
				echo "</br>"."<a href='index.html'>Error</a>";
			}
		}
		else
		{
			echo "La imagen es muy grande"."</br>"."<a href='index.html'>Error</a>";
		}
	}



?>