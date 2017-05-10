<?php 

	class Empleado extends Persona
	{
		private $_legajo;
		private $_sueldo;


		public function __construct($nombre,$apellido,$dni,$sexo,$legajo, $sueldo)
		{
			parent::__construct($nombre,$apellido,$dni,$sexo);
			$this->_legajo=$legajo;
			$this->_sueldo=$sueldo;
		}

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

		public function Hablar($idioma)
		{
			echo "El empleado habla:" .$idioma;
		}


		public function ToString()
		{
			 return Persona::ToString().$this->_legajo."-".$this->_sueldo;
		}

	}


?>