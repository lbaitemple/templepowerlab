<?php
$client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
	
	
	
	
	$counter_name = "ip.txt";
// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"start");
  fclose($f);
}
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
// Has visitor been counted in this session?
// If not, increase counter value by one

  //$f = fopen($counter_name, "wb");
  //fwrite($f, $ip."\n");
  //fclose($f); 
$t=time();
file_put_contents("ip.txt", $ip. ",".date("Y-m-d-h-i-s",$t). "\n", FILE_APPEND);

//echo($t . "<br>");
//echo "$ip";
//echo "$ip"; // Output IP address [Ex: 177.87.193.134]
?>