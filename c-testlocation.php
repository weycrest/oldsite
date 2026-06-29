<?php

$url = $HTTP_SERVER_VARS["HTTP_HOST"];
echo $url;
echo "<br>";
echo "HostingSpeeds.com v2.0 beta<br>";

$id = $_GET['amp;id'];
if ($id == "") {
$id = $_GET['id'];
}

$op = $_GET['amp;op'];
if ($op == "") {
$op = $_GET['op'];
}

$ch = curl_init(); // create cURL handle (ch)
if (!$ch) {
   die("Couldn't initialize a cURL handle");
}
// set some cURL options
$ret = curl_setopt($ch, CURLOPT_URL,            $op);
$ret = curl_setopt($ch, CURLOPT_HEADER,        1);
$ret = curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
$ret = curl_setopt($ch, CURLOPT_TIMEOUT,        30);

// execute
$ret = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch); // close cURL handler

       // collect results

       $code = $info['http_code'];
       $filetime = $info['filetime'];
       $totaltime = $info['total_time'];
       $nslookup = $info['namelookup_time'];
       $connecttime = $info['connect_time'];
       $pretransfertime = $info['pretransfer_time'];
       $starttransfertime = $info['starttransfer_time'];
       $sizedownload = $info['size_download'];
       $speeddownload = $info['speed_download'];
       $headersize = $info['header_size'];
       $requestsize = $info['request_size'];

$code1 = $info['url'];
$code2 = $info['content_type'];
$code3 = $info['http_code'];
$code4 = $info['header_size'];
$code5 = $info['request_size'];
$code6 = $info['filetime'];
$code7 = $info['ssl_verify_result'];
$code8 = $info['redirect_count'];
$code9 = $info['total_time'];
$code10 = $info['namelookup_time'];
$code11 = $info['connect_time'];
$code12 = $info['pretransfer_time'];
$code13 = $info['size_upload'];
$code14 = $info['size_download'];
$code15 = $info['speed_download'];
$code16 = $info['speed_upload'];
$code17 = $info['download_content_length'];
$code18 = $info['upload_content_length'];
$code19 = $info['starttransfer_time'];
$code20 = $info['redirect_time']; 

$pld = $totaltime;
$ref = $code1;
$ref = str_replace ( 'http://www.', '', $ref );
$ref = str_replace ( 'http://', '', $ref );
$ref = str_replace ( '?', '', $ref );
$ref = str_replace ( 'id=', '', $ref );

echo "<br><br>----------- Pageload v 2.0 results ----------------<br><br>";

       echo "<b>".$code1."</b> - Last effective URL<br>";
       echo "<b>".$id."</b> - user ID<br>";
       echo "<b>".$code2."</b> - Content-type of downloaded object, NULL indicates server did not send valid Content-Type: header<br>";
       echo "<b>".$code."</b> - Last received HTTP code<br>";
       echo "<b>".$code4."</b> - Total size of all headers received<br>";
       echo "<b>".$code5."</b> - Total size of issued requests, currently only for HTTP requests<br>";
       echo "<b>".$code7."</b> - Result of SSL certification verification<br>";
       echo "<b>".$code20."</b> - Time in seconds of all redirection steps before final transaction was started<br>";
       echo "<b>".$nslookup."</b> - Time in seconds until name resolving was complete <br>";
       echo "<b>".$connecttime."</b> - Time in seconds it took to establish the connection <br>";
       echo "<b>".$pretransfertime."</b> - Time in seconds from start until just before file transfer begins <br>";
       echo "<b>".$starttransfertime."</b> - Time in seconds until the first byte is about to be transferred <br>";
       echo "<b>".$totaltime."</b> - Total transaction time in seconds<br>";
       echo "<b>".$sizedownload."</b> - Total number of bytes downloaded<br>";
       echo "<b>".$speeddownload."</b> - Average download speed <br>";


echo ("<img src=\"http://www.hostingspeeds.com/coutsidelocal.php?id=$_GET[id]&amp;hid=$hid&amp;pld=$pld&amp;refright=$ref&amp;refremark=$refremark&amp;url=$url&amp;size=$sizedownload\" width=\"0\" height=\"0\" style=\"border:0\" alt=\"\" />");

echo "<br>";
echo "Writing to database.";
echo "<br>";


                                  
?>
