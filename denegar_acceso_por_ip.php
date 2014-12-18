<?php
/* Listamos la IPs a bloquear */
$ban_ip_list = array('68.180.206.184', '64.233.167.99', '207.46.232.182');

/* Listamos un rango de IPs. Usamos el comodin '*' para seleccionar un rango de IPs*/
$ban_ip_range = array('69.*.83.197');

/* Obtener dirección IP del visitante */
$user_ip = $_SERVER['REMOTE_ADDR'];

/* Mensaje de salida si el IP del visitante no tiene acceso */
$msg = 'Tu no tienes permiso para acceder a esta página.';

    if(in_array($user_ip, $ban_ip_list))
        {
          exit($msg);
        }

/* Chequeamos su la IP del visitante esta dentro del rango de IPs denegadas*/

if(!empty($ban_ip_range))
{
foreach($ban_ip_range as $range)
{
        $range = str_replace('*','(.*)', $range);

    if(preg_match('/'.$range.'/', $user_ip))
        {
          exit($msg);
        }
}
}


/* De pasar todas las restricciones se le muestra el contenido*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>Bienvenido</TITLE>
 </HEAD>
 <BODY>

  Contenido del sitio.
 </BODY>
</HTML>