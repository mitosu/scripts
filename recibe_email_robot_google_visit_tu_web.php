<?php

   if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Googlebot' ) !== false )
   {
         // Tu direccecion de correo
         $email_address = 'tu@tudominio.com ';

         // Enviate el email
         mail($email_address,'Alerta de Googlebot',
         'El Googlebot ha visitado tu pagina: '.$_SERVER['REQUEST_URI']);
   }
?>