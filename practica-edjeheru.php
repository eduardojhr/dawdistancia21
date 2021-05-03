
		<?php
			/**
 			 * La función calculará el cuadrado de un número dado.
 			 *
 			 * Para el cálculo utilizaremos el número 20.
 			 *
 			 * @param integer $numero Número entero
 			 * @author Eduardo Jesús Hernández Ruiz                         
 			 * @version 1.0
			 * 
 			 * @return int Número entero correspondiente al cuadrado del número
 			 */
			function calcular_Cuadrado($numero) {
            	$calculo = $numero * $numero;
              	return $calculo;
			}
			/**
 			 * Esta función calculara el cubo de un número.
 			 *
 			 * Utilizaremos el número 20 para realizar la operación.
 			 * 
 			 * @author Eduardo Jesús Hernández Ruiz
			 * @internal Práctica 5 de DAW
			 * @version 1.0
 			 * @param integer $numero Número entero
 			 *                           
 			 *
 			 * @return integer Número entero correspondiente al cubo del número
 			 */
			function calcular_Cubo($numero) {
             	$calculo = $numero * $numero * $numero;
             	return $calculo;
			}

			echo "Hola<br/>";
			$raiz = calcular_Cuadrado(20);
			echo "El cuadrado de 20 es: ".$raiz.".<br/>";
			echo "Y el cubo de 20 es: ".calcular_Cubo(20)."<br/>";
		?>
	

