<?php 			


$operador = '/';
$op1 = 3;
$op2 = 0;

switch ($operador) 
{
	case '+':
		echo ($op1 + $op2);
		break;
	case '-':
		echo ($op1 - $op2);
		break;
	case '*':
		echo ($op1 * $op2);
		break;
	case '/':
	if($op2 == 0)
	{
		echo "Error. No se puede dividir por cero.";	
		break;
	}
	else
	{
		echo ($op1 / $op2);
		break;	
	}

}


?>