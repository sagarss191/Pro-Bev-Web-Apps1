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
include ("connection.php");


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql = "SELECT * FROM data where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

			
$businessname = $row["businessname"];
$businessaddress = $row["businessaddress"];
$businessaddress2 = $row["businessaddress2"];
$city = $row["city"];
$zipcode = $row["zipcode"];
$state = $row["state"];

$businessphone = $row["businessphone"];
$contactname = $row["contactname"];
$contactemail = $row["contactemail"];
$contactphone = $row["contactphone"];
$auditnumber = $row["auditnumber"];
$auditdate = $row["auditdate"];
$auditname = $row["auditname"];
$offaucets = $row["offaucets"];
$towertype = $row["towertype"];
$systemtype = $row["systemtype"];
$coolingtype = $row["coolingtype"];
$lengthofrun = $row["lengthofrun"];
$coolertype = $row["coolertype"];
$cooleruse = $row["cooleruse"];
$beercoolertemp = $row["beercoolertemp"];
$brand = $row["brand"];
$model = $row["model"];
$serialno = $row["serialno"];
$tempsetting = $row["tempsetting"];
$gastype = $row["gastype"];
$gastypeothertext = $row["gastypeothertext"];
$regulatortype = $row["regulatortype"];
$regulatorbrand = $row["regulatorbrand"];
$ales = $row["ales"];
$lager = $row["lager"];
$nitrogen = $row["nitrogen"];
$beerpourrate = $row["beerpourrate"];
$beerpourtemp = $row["beerpourtemp"];
$recommendations = $row["recommendations"];
$recommendationsreplacetext = $row["recommendationsreplacetext"];
$auditorcomment = $row["auditorcomment"];
}
}
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_".$businessname.".doc");
echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
$message .= '<table rules="all" style="border-color: #666;">';
$message .= "<tr><td><strong>Business Name:</strong> </td><td>" . strip_tags($businessname) . "</td></tr>";
$message .= "<tr><td><strong>Address Line 1:</strong> </td><td>" . strip_tags($businessaddress) . "</td></tr>";

$message .= "<tr><td><strong>Address Line 2:</strong> </td><td>" . strip_tags($businessaddress2) . "</td></tr>";
$message .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($city) . "</td></tr>";
$message .= "<tr><td><strong>State:</strong> </td><td>" . strip_tags($state) . "</td></tr>";
$message .= "<tr><td><strong>Zipcode:</strong> </td><td>" . strip_tags($zipcode) . "</td></tr>";

$message .= "<tr><td><strong>Business Phone:</strong> </td><td>" . strip_tags($businessphone) . "</td></tr>";
$message .= "<tr><td><strong>Contact Name:</strong> </td><td>" . strip_tags($contactname) . "</td></tr>";
$message .= "<tr><td><strong>Contact Email:</strong> </td><td>" . strip_tags($contactemail) . "</td></tr>";
$message .= "<tr><td><strong>Contact Phone:</strong> </td><td>" . strip_tags($contactphone) . "</td></tr>";
$message .= "<tr><td><strong>Audit #:</strong> </td><td>" . strip_tags($auditnumber) . "</td></tr>";
$message .= "<tr><td><strong>Audit Date:</strong> </td><td>" . strip_tags($auditdate) . "</td></tr>";
$message .= "<tr><td><strong>Audit Name:</strong> </td><td>" . strip_tags($auditname) . "</td></tr>";
$message .= "<tr><td><strong># of Faucets:</strong> </td><td>" . strip_tags($offaucets) . "</td></tr>";
$message .= "<tr><td><strong>Tower Type:</strong> </td><td>" . strip_tags($towertype) . "</td></tr>";
$message .= "<tr><td><strong>System Type:</strong> </td><td>" . strip_tags($systemtype) . "</td></tr>";
$message .= "<tr><td><strong>Cooling Type:</strong> </td><td>" . strip_tags($coolingtype) . "</td></tr>";
$message .= "<tr><td><strong>Length of Run:</strong> </td><td>" . strip_tags($lengthofrun) . "</td></tr>";
$message .= "<tr><td><strong>Cooler Type:</strong> </td><td>" . strip_tags($coolertype) . "</td></tr>";
$message .= "<tr><td><strong>Cooler Use:</strong> </td><td>" . strip_tags($cooleruse) . "</td></tr>";
$message .= "<tr><td><strong>Beer Cooler Temp:</strong> </td><td>" . strip_tags($beercoolertemp) . "</td></tr>";
$message .= "<tr><td><strong>Brand:</strong> </td><td>" . strip_tags($brand) . "</td></tr>";
$message .= "<tr><td><strong>Model:</strong> </td><td>" . strip_tags($model) . "</td></tr>";
$message .= "<tr><td><strong>Serial #:</strong> </td><td>" . strip_tags($serialno) . "</td></tr>";
$message .= "<tr><td><strong>Temp Setting:</strong> </td><td>" . strip_tags($tempsetting) . "</td></tr>";
$message .= "<tr><td><strong>Gas Type:</strong> </td><td>" . strip_tags($gastype) . "</td></tr>";
$message .= "<tr><td><strong>Gas Type If Selected Mix Other:</strong> </td><td>" . strip_tags($gastypeothertext) . "</td></tr>";
$message .= "<tr><td><strong>Regulator Type:</strong> </td><td>" . strip_tags($regulatortype) . "</td></tr>";
$message .= "<tr><td><strong>Regulator Brand:</strong> </td><td>" . strip_tags($regulatorbrand) . "</td></tr>";
$message .= "<tr><td><strong>Ales:</strong> </td><td>" . strip_tags($ales) . "</td></tr>";
$message .= "<tr><td><strong>Lager:</strong> </td><td>" . strip_tags($lager) . "</td></tr>";
$message .= "<tr><td><strong>Nitrogen:</strong> </td><td>" . strip_tags($nitrogen) . "</td></tr>";
$message .= "<tr><td><strong>Beer Pour Rate (Oz/Sec):</strong> </td><td>" . strip_tags($beerpourrate) . "</td></tr>";
$message .= "<tr><td><strong>Beer Pour Temp:</strong> </td><td>" . strip_tags($beerpourtemp) . "</td></tr>";
$message .= "<tr><td><strong>Recommendations:</strong> </td><td>" . strip_tags($recommendations) . "</td></tr>";
$message .= "<tr><td><strong>Recommendations Replace Part:</strong> </td><td>" . strip_tags($recommendationsreplacetext) . "</td></tr>";
$message .= "<tr><td><strong>Auditor Comments:</strong> </td><td>" . strip_tags($auditorcomment) . "</td></tr>";
$message .= "</table>";
echo $message;
echo "</body>";
echo "</html>";
header('Location: /Pro-Bev-Web-Apps/index.php');
exit;	

}
else
{
header('Location: /Pro-Bev-Web-Apps/index.php');
exit;	
	
}
?>