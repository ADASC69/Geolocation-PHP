<?php    

    $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
        echo 'Uzytkownik z  ' . $query['country'] . ', ' . $query['city'] . '!'."\n";
		
    }
   
    if($query && ($query['country'] == 'China'|| $query['country'] == 'Russia'|| $query['country'] == 'Indonesia'|| $query['country'] == 'Poland')){
		
		die("chuj");
	}
	
?>