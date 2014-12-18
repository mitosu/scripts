<?php
       $ads = array(
       array("Banner" => "<a href=\"http://website1.net\"><img src=\"http://placehold.it/800x300&text=[img]\"></a>"),
       array("Banner" => "<a href=\"http://website2.net\"><img src=\"http://placehold.it/800x300&text=[img]\"></a>"),
       array("Banner" => "<a href=\"http://website3.net\"><img src=\"http://placehold.it/800x300&text=[img]\"></a>")
       );
    srand ((double)microtime()*10000);
       $maxvalue = count($ads)-1;
       $nr = rand(0,$maxvalue);
       echo  $ads[$nr]['Banner'];
?>