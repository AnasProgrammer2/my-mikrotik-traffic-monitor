<?php
header("Content-type: text/javascript");
require_once('api_mt_include2.php'); 
include 'config.php'; 

	$API = new routeros_api();
	$API->debug = false;
	if ($API->connect($ipRouteros , $Username , $Pass, $api_puerto)) {
$rows = array(); $rows2 = array();	
		  $API->write('/interface/getall');
		  
		   $READ = $API->read(false);
		   $ARRAY = $API->parse_response($READ);
		
   $API->disconnect();
  

  print json_encode($ARRAY);

	}
	


?>