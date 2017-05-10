<?php 


$array = array(rand(1,10),rand(1,10), rand(1,10), rand(1,10), rand(1,10));

var_dump($array);


$sumatoria = array_sum($array);
echo '<br />';
var_dump($sumatoria);
$promedio = $sumatoria / 5 ;
echo '<br />';
var_dump($promedio);
echo '<br />';

if ($promedio > 6) 
{	
	echo "El promedio de los numeros es mayor a 6";	
}
elseif($promedio < 6)
{
	echo "El promedio de los numero es menor a 6";
}
else
{
	echo "El promedio de los numeros es igual a 6";
}

?>