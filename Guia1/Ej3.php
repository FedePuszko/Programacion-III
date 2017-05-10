<?php 

$var1 = 5;
$var2 = 4;
$var3 = 8;


if($var1 > $var2 && $var1 > $var3)
	{
		if($var2 > $var3)
		{
			echo $var2;	
		}
		elseif($var2 == $var3)
		{
			echo "No hay valor del medio.";
		}
		else
		{
			echo $var3;
		}
	}

if($var2 > $var1 && $var2 > $var3)
	{
		if($var1 > $var3)
		{
			echo $var1;
		}
		elseif($var1 == $var3)
		{
			echo "No hay valor del medio";
		}
		else
		{
			echo $var3;
		}
	}

if($var3 > $var1 && $var3 > $var2)
	{
		if($var1 > $var2)
		{
			echo $var1;
		}
		elseif($var1 == $var2)
		{
			echo "No hay valor del medio";
		}
		else
		{
			echo $var2;
		}
	}

?>