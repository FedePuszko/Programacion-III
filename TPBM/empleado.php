<?php 
include "persona.php";

	class Empleado extends Persona
	{
//Atributos		
		protected $_legajo;
		protected $_sueldo;
		protected $_pathFoto;

//Constructor
		public function __construct($nombre,$apellido,$dni,$sexo,$legajo, $sueldo)
		{
			parent::__construct($nombre,$apellido,$dni,$sexo);
			$this->_legajo=$legajo;
			$this->_sueldo=$sueldo;
		}

//Getters
		public function getApellido()
		{
			return parent::getApellido();
		}
		public function getDni()
		{
			return parent::getDni();
		}
		public function getNombre()
		{
			return parent::getNombre();
		}
		public function getSexo()
		{
			return parent::getSexo();
		}

		public function getLegajo()
		{
			return $this->_legajo;
		}

		public function getSueldo()
		{
			return $this->_sueldo;
		}

		public function getPathFoto()
		{
			return $this->_pathFoto;
		}

//Setters
		// public function setNombre($nombre)
		// {
		// 	$parent::SetNombre() = $nombre;
		// }

		public function setPathFoto($foto)
		{
			$this->_pathFoto = $foto;
		}


//Funciones
		public function Hablar($idioma)
		{
			echo "El empleado habla:" .$idioma;
		}

		public function ToString()
		{
			 return Persona::ToString().$this->_legajo."-".$this->_sueldo."-".$this->_pathFoto;
		}

		public function Guardar()
		{
			$archivo=fopen("empleados.txt","a");
			$renglon= $this->ToString()."\r\n";
			fwrite($archivo, $renglon);
			fclose($archivo);
		}

		public function GuardarNuevo()
		{
			$archivo=fopen("empleados.txt","w");
			$renglon= $this->ToString()."\r\n";
			fwrite($archivo, $renglon);
			fclose($archivo);
		}


		public static function BorrarEmpleado($dni)
		{
			$arrayEmpleado = array();
			$ruta = fopen("empleados.txt","r");

				while(!feof($ruta))
				{
					
					$arr = explode("-", fgets($ruta));

			echo "</br>"."</br>";
			var_dump($arr);

					if(count($arr) > 1)
					{
						if($arr[2] == $dni)
						{
							continue;
						}

							
							$empleado = new Empleado($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6]);
					  		//$empleado = $empleado->setPathFoto($arr[6]);
					  		//En caso de no funcionar la siguiente linea, saltear. La foto no sale
					  		//$empleado->setPathFoto($arr[6].$arr[7]."-".$arr[2]."."."jp");
					  		//$empleado->setPathFoto($arr[7]);
							//$empleado1->setPathFoto("Fotos/".$arr[2]."-".$arr[1].".".trim($_FILES["archivo"]["type"],"image/"));
							array_push($arrayEmpleado,$empleado);

					}
				}
			fclose($ruta);



			$archivo=fopen("empleados.txt","w");
			fclose($ruta);

			foreach ($arrayEmpleado as $key => $e) 
			{
				$e->Guardar();
			}
		}

	}


?>