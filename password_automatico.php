<?php
	function randomPass($longitud)
{
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $key = '';
    for($i=0;$i<$longitud;$i++)
    {
         $key .= $pattern{rand(0,35)};
    }

    return $key;
}

$pass = randomPass(16);
echo $pass;
?>