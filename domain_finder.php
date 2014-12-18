<?php
//-- Class

class whois
{
    const timeout = 30;
    const whoishost = 'whois.internic.net';

    public static function lookup($domain){

       $result = "";
       $errno = 0;
       $errstr='';

       $fd = fsockopen(whois::whoishost,43, $errno, $errstr, whois::timeout);

       if ($fd){
             fputs($fd, $domain."\015\012");
           while (!feof($fd))    {
            $result .= fgets($fd,128) . "<br />";
           }
           fclose($fd);
        }
         return $result;
     }
}


//-- Example

$domain = 'rockapproll.com';
$result = whois::lookup($domain);

if(strstr($result, "No match")){
       echo $domain . "seems to be available";
}else{
    echo $domain . " is in use";
    //echo "<hr>";
    //echo $result;
}
?>