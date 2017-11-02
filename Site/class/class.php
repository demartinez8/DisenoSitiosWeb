<?php
class Trabajo
{
	public function operacionNumeros($numero1,$operacion,$numero2) // Se realiza la operacion aritmetica entre los dos números Ingresados ...
	{
		if($operacion == "Sumar")
		{
			$resultado = $numero1 + $numero2;
		}else
		if($operacion == "Restar")
		{
			$resultado = $numero1 - $numero2;
		}else
		if($operacion == "Multiplicacion")
		{
			$resultado = $numero1 * $numero2;
		}else
		if($operacion == "Division")
		{
			$resultado = $numero1 / $numero2;
		}
		
		return $resultado;
	}
	
	public function compararNumeros($numero1,$numero2) // Se compara cual de los 2 números es mayor o menor, como tambien identificar si son Iguales ...
	{
		if($numero1 < $numero2)
		{
			$resultado = "El N&uacute;mero 1 es Menor al N&uacute;mero 2";
		}else
		if($numero1 > $numero2)
		{
			$resultado = "El N&uacute;mero 1 es Mayor al N&uacute;mero 2";
		}else
		if($numero1 == $numero2)
		{
			$resultado = "El N&uacute;mero 1 es Igual al N&uacute;mero 2";
		}
		
		return $resultado;
	}
	
	public function secuenciaNumeros($grupoColaborativo) // Se genera una secuencia de números del 1 al número del grupo colaborativo ...
	{
		$resultado = "";
		for($a=0;$a<$grupoColaborativo;$a++)
		{
			$inicio = $a + 1;
			
			$resultado .= $inicio." &nbsp;&nbsp; "; 
		}
		
		return $resultado;
	}
}
?>