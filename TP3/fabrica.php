<?php 

	class Fabrica
	{
		private $_empleados;
		private $_razonSocial;

		public function __construct($razonSocial)
		{
			$this->_empleados=array();
			$this->_razonSocial = $razonSocial;
		}


		public function AgregarEmpleado($empleado)
		{
			array_push($this->_empleados,$empleado);
			sort($this->_empleados);
		}

		public function CalcularSueldos()
		{
            $acum = 0;
            foreach ($this->_empleados as $item) 
            {
                $acum += $item->getSueldo();
            }
            return $acum;
		}

    	public function EliminarEmpleado($empleado)
    	{
        	for ($i=0; $i < count($this->_empleados); $i++) 
        	{ 
            	if($this->_empleados[$i] == $empleado)
            		{
                		unset($this->_empleados[$i]);
                		break;
            		}
        	}
   		}

		public function EliminarEmpleadosRepetidos()
		{
			$this->_empleados = array_unique($this->_empleados,SORT_REGULAR);
		}

		public function ToString()
		{
			$cadena = "<br>" . "Razon Social :" . $this->_razonSocial . "<br>" ;

        	foreach ($this->_empleados as $item) 
        	{ 
            	$cadena .=  "<br>" . $item->ToString() . "<br>";
        	}
        	return $cadena ;
		}	
	}	

?>