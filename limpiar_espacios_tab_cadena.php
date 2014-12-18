<?php
/*Limpiar los datos introducidos por un usuario es una tarea usual antes
de insertarlos en la base de datos. Nos podemos encontrar con espacios extra,
tabulaciones y retornos de carro innecesarios. Con esta función,
y con un poco de ayuda de las expresiones regulares, conseguiremos eliminarlos.
La función se ejecuta en tres pasos: primero utilizamos trim -que
elimina los espacios sobrantes del principio y final de la cadena-.
 Después eliminamos los dobles espacios que pudieramos tener dentro de
 la cadena y por último eliminamos tabulaciones (\t), retornos de carro (\r)
 y nuevas líneas (\n) y los sustituimos por un espacio en blanco.
*/
	function eliminarblancos($cadena){
	         $cadena = trim($cadena);
	         $cadena = preg_replace('/\s(?=\s)/', '', $cadena);
	         $cadena = preg_replace('/[\n\r\t]/', ' ', $cadena);
	         return $cadena;
	}
?>