<?
/*
Formail ?  who needs it
<simon@simply.com
*/
if ($HTTP_REFERER != "http://www.weycrest.co.uk/contact.php") {
	Header("Location:$HTTP_REFERER");
	exit;
	}
if (!$Name) {
	print "Missing name. Please go back and complete the form";
	exit;
	}
if (!$email) {
	print "Missing email address. Please go back and complete the form";
	exit;
	}
if (!$Domain) {
	print "Missing Domain name. Please go back and complete the form";
	exit;
	}
if (preg_match("/Domain/",$subject)) {
	$subject="Domain Query: $Domain";
	}
if (preg_match("/Hosting/",$subject)) {
	$subject="Hosting Query: $Domain";
	}
if (!$subject) {
	$subject="Unspecified....";
	}
if (!$Query) {
	print "Please go back and enter your query";
	exit;
	}
if (!$uname) {
	$uname="Not entered";
	}
if (!$pass) {
	$pass="Not entered";
	}
$Query=stripslashes($Query);

$today = date("H:i d-m-Y");
$ip=getenv('REMOTE_ADDR');
$recipient = "Helpdesk <admin@weycrest.com>";
$message .= "Hello Helpdesk !,\n\n";
$message .= "$Name ($email) posted this query at $today from $ip...\n\n";
$message .= "Name: $Name\nEMail: $email\n";
$message .= "Telephone: $Telephone\n";
$message .= "Accnt Username: $usern\n";
$message .= "Browser and OS:\n$HTTP_USER_AGENT\n";
$message .= "Query Follows..\n$Query\n\n";
$message .= "-------------------------------------------------------\n";
$message .= "..bought to you by weycrest.com auto-mailer v2.0001 ";
$headers .= "From: Simply Automailer <null@weycrest.com>\n";
$headers .= "X-Sender: <automail@weycrest.co.uk>\n";
$headers .= "X-Mailer: simonPHP\n";
if ($imp=="h") {
	$headers .= "X-Priority: 1\n";
	}
$headers .= "Reply-To: $Name <$email>\n";
mail($recipient, $subject, $message, $headers);

$subject2 = "Weycrest Support Enquiry Confirmation";
$recipient2 = "$Name <$email>";
$message2 .= "$Name,\n\n";
$message2 .= "Thank you for contacting weycrest.co.uk\n";
$message2 .= "Your query was received by our support staff at\n";
$message2.= "$today and will be dealt with shortly.\n\n";
$message2.= "For the current service Network Status please see\n";
$message2.= "http://www.weycrest.co.uk/news.php as this may\n";
$message2.= "have details of the problem you are enquiring about.\n\n";
$message2 .= "-------------------------------------------------------\n";
$message2 .= "Sent by Weycrest.co.uk auto-mailer.\n";
$message2 .= "Please do not reply to this email.\n";
$headers2 .= "From: Weycrest Automailer <null@weycrest.com>\n";
$headers2 .= "X-Sender: <automail@weycrest.com>\n";
$headers2 .= "X-Mailer: simonPHP\n";
$headers2 .= "X-Priority: 1\n";
mail($recipient2, $subject2, $message2, $headers2);

#$from="helpdesk";
#require ("../c/database.php");
#$link=dbconnect("simplyweb");
#$stmt="INSERT INTO simplysupport (sentfrom, added) VALUES ('$from', NOW())";
#if (!($result=mysql_query($stmt, $link))) {
#	}

?>
<html><head><title>Thank You</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.mainText {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #000000}
-->
</style></head>
<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p><p>&nbsp;</p>	<table border="0" cellspacing="0" cellpadding="1" align="center">
<tr><td><p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#003399" size="4">Weycrest Helpdesk</font></b></font></p>
<p class="mainText">Thank you for your enquiry. Our support staff will contact you shortly.</p></td></tr></table></form></body></html>
