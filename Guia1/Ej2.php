<?php 

echo date("r");
echo "<br>";

//$mes = date("m");
//$dia = date("d");
$mes = '12';
$dia = '20';
var_dump($mes);
var_dump($dia);


if ($mes >= '01' && $mes <= '03') 
	{
		if ($mes == '03' && $dia <= '20') 
			{
				echo "Es verano.";
			}
		else
			{
				echo "Es otoño.";
			}
		
	}
elseif ($mes >= '04' && $mes <= '07') 
	{
		if ($mes == '07' && $dia <= '20') 
			{
				echo "Es otoño.";
			}		
		else
			{
				echo "Es invierno";
			}
	}
elseif ($mes >= '07' && $mes <= '10') 
	{
		if($mes == '10' && $dia <= '20')
			{
				echo "Es invierno";
			}			
		else
			{
				echo "Es primvaera";
			}
	}
elseif($mes >='10' && $mes <='12')
{
		if($mes='12' && $dia <='20')
			{
				echo "Es primavera.";
			}
		else
			{
				echo "Es verano.";
			}
}


	





?>