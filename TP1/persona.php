<?php 

	abstract class Persona
	{
		private $_apellido;
		private $_dni;
		private $_nombre;
		private $_sexo;


		public function __construct($nombre,$apellido,$dni,$sexo)
		{
			$this->_nombre=$nombre;
			$this->_apellido=$apellido;
			$this->_dni=$dni;
			$this->_sexo=$sexo;
		}


		abstract protected function Hablar($idioma);

		public function ToString()
		{
			return $this->_nombre."-".$this->_apellido."-".$this->_dni."-".$this->_sexo."-";
		}


		public function getNombre()
		{
			return $this->_nombre;
		}

		// public function setNombre($nombre)
		// {
		// 	$this->_nombre = $nombre;
		// }

		public function getDNI()
		{
			return $this->_dni;
		}

		public function getApellido()
		{
			return $this->_apellido;
		}

		public function getSexo()
		{
			return $this->_sexo;
		}


	}	



?>