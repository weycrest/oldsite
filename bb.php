<?php
include_once 'EntaXML.php';

$eXML = new EntaXML("/xml/ADSLChecker.php", "admin@weycrest.com", "s0ftcell");
$eXML->addParam("PhoneNo", "01234567890");
$eXML->addParam("Version", "6");

// change the location the CURL binary
$eXML->setCURL("/usr/bin/curl");

$results = $eXML->execute();
echo $results;
?>
