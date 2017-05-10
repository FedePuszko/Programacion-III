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

		public function BorrarEmpleado($dni)
		{
			$arrayEmpleado = array();
			$ruta = fopen("empleados.txt","r");

			while(!feof($ruta))
			{

			}
		}


	}


?>