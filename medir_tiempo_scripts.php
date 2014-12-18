<?php
	$tiempo_inicio = microtime(true);

	mifunciondelaostia();

	$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicio;

	echo "Ha tardado ",$tiempo," segundos";
?>