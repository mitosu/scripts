<?php
	function isBlacklisted($ip){
	     $check = join('.',array_reverse(explode('.',$ip))).'.xbl.spamhaus.org.';
	     return dns_check_record($check,'A');
	}
?>