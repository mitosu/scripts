<?php
	$tiempo_inicio = microtime(true);

	//Aquí el script a medir tiempo
	mifunciondelaostia();

	$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicio;

	echo "Ha tardado ",$tiempo," segundos";
?>