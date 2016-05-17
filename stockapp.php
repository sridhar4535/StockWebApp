<?php

header("Access-Control-Allow-Origin: *");
$json   = array();

	$compname = $_GET['compname'];
	$comp = urlencode($compname);
	$request_url = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=".$comp;
	$json = file_get_contents($request_url) or die("url not loading");
    $json = json_decode($json, true);
    if(isset($json["Status"])) {               
      if($json["Status"] == "SUCCESS")
	  {
	    echo json_encode($json);
	  }
	    
    }
    
?>
