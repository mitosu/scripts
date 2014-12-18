<?php
/*Detectar si el navegador es Chrome*/
function is_chrome(){
	return(eregi("chrome", $_SERVER['HTTP_USER_AGENT']));
}

if(is_chrome()){
	echo 'Tu estas usando el navegador Google Chrome.';
}

?>