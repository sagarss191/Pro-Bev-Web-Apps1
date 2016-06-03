<?php
/**
 * Template Name: Update
 *
 * Displays the Business Template of the theme.
 *
 * @package thbusiness
 */

?>
<?php
require_once('class.phpmailer.php');
$contactemail = $_POST["contactemail"];

	$sendmailchk = $_POST["sendmailchk"];
	$sendemailtotxt= $_POST["sendemailtotxt"];
	$prodevmail= $_POST["prodevmail"];
				
$to = $contactemail;
if($sendmailchk == "yes")
{
	$to = $sendemailtotxt;
	
	}
else
{
	$to = $contactemail;
	}
if($prodevmail == "yes")
{
$headers .= "CC: service@pro-bev.com\r\n";
}
$subject = 'Draft Beer Audit Report-Audit #'.strip_tags($_POST['auditnumber']) ;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;">';
$message .= "<tr><td><strong>Business Name:</strong> </td><td>" . strip_tags($_POST['businessname']) . "</td></tr>";
$message .= "<tr><td><strong>Address Line 1:</strong> </td><td>" . strip_tags($_POST['businessaddress']) . "</td></tr>";

$message .= "<tr><td><strong>Address Line 2:</strong> </td><td>" . strip_tags($_POST['businessaddress2']) . "</td></tr>";
$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['city']) . "</td></tr>";
$message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($_POST['state']) . "</td></tr>";
$message .= "<tr><td><strong>Zipcode:</strong> </td><td>" . strip_tags($_POST['zipcode']) . "</td></tr>";



$message .= "<tr><td><strong>Business Phone:</strong> </td><td>" . strip_tags($_POST['businessphone']) . "</td></tr>";
$message .= "<tr><td><strong>Contact Name:</strong> </td><td>" . strip_tags($_POST['contactname']) . "</td></tr>";
$message .= "<tr><td><strong>Contact Email:</strong> </td><td>" . strip_tags($_POST['contactemail']) . "</td></tr>";
$message .= "<tr><td><strong>Contact Phone:</strong> </td><td>" . strip_tags($_POST['contactphone']) . "</td></tr>";
$message .= "<tr><td><strong>Audit #:</strong> </td><td>" . strip_tags($_POST['auditnumber']) . "</td></tr>";
$message .= "<tr><td><strong>Audit Date:</strong> </td><td>" . strip_tags($_POST['auditdate']) . "</td></tr>";
$message .= "<tr><td><strong>Audit Name:</strong> </td><td>" . strip_tags($_POST['auditname']) . "</td></tr>";
$message .= "<tr><td><strong># of Faucets:</strong> </td><td>" . strip_tags($_POST['offaucets']) . "</td></tr>";
$message .= "<tr><td><strong>Tower Type:</strong> </td><td>" . strip_tags($_POST['towertype']) . "</td></tr>";
$message .= "<tr><td><strong>System Type:</strong> </td><td>" . strip_tags($_POST['systemtype']) . "</td></tr>";
$message .= "<tr><td><strong>Cooling Type:</strong> </td><td>" . strip_tags($_POST['coolingtype']) . "</td></tr>";
$message .= "<tr><td><strong>Length of Run:</strong> </td><td>" . strip_tags($_POST['lengthofrun']) . "</td></tr>";
$message .= "<tr><td><strong>Cooler Type:</strong> </td><td>" . strip_tags($_POST['coolertype']) . "</td></tr>";
$message .= "<tr><td><strong>Cooler Use:</strong> </td><td>" . strip_tags($_POST['cooleruse']) . "</td></tr>";
$message .= "<tr><td><strong>Beer Cooler Temp:</strong> </td><td>" . strip_tags($_POST['beercoolertemp']) . "</td></tr>";
$message .= "<tr><td><strong>Brand:</strong> </td><td>" . strip_tags($_POST['brand']) . "</td></tr>";
$message .= "<tr><td><strong>Model:</strong> </td><td>" . strip_tags($_POST['model']) . "</td></tr>";
$message .= "<tr><td><strong>Serial #:</strong> </td><td>" . strip_tags($_POST['serialno']) . "</td></tr>";
$message .= "<tr><td><strong>Temp Setting:</strong> </td><td>" . strip_tags($_POST['tempsetting']) . "</td></tr>";
$message .= "<tr><td><strong>Gas Type:</strong> </td><td>" . strip_tags($_POST['gastype']) . "</td></tr>";
$message .= "<tr><td><strong>Gas Type If Selected Mix Other:</strong> </td><td>" . strip_tags($_POST['gastypeothertext']) . "</td></tr>";
$message .= "<tr><td><strong>Regulator Type:</strong> </td><td>" . strip_tags($_POST['regulatortype']) . "</td></tr>";
$message .= "<tr><td><strong>Regulator Brand:</strong> </td><td>" . strip_tags($_POST['regulatorbrand']) . "</td></tr>";
$message .= "<tr><td><strong>Ales:</strong> </td><td>" . strip_tags($_POST['ales']) . "</td></tr>";
$message .= "<tr><td><strong>Lager:</strong> </td><td>" . strip_tags($_POST['lager']) . "</td></tr>";
$message .= "<tr><td><strong>Nitrogen:</strong> </td><td>" . strip_tags($_POST['nitrogen']) . "</td></tr>";
$message .= "<tr><td><strong>Beer Pour Rate (Oz/Sec):</strong> </td><td>" . strip_tags($_POST['beerpourrate']) . "</td></tr>";
$message .= "<tr><td><strong>Beer Pour Temp:</strong> </td><td>" . strip_tags($_POST['beerpourtemp']) . "</td></tr>";
$message .= "<tr><td><strong>Recommendations:</strong> </td><td>" . strip_tags($_POST['recommendations']) . "</td></tr>";
$message .= "<tr><td><strong>Recommendations Replace Part:</strong> </td><td>" . strip_tags($_POST['recommendationsreplacetext']) . "</td></tr>";
$message .= "<tr><td><strong>Auditor Comments:</strong> </td><td>" . strip_tags($_POST['auditorcomment']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

?>