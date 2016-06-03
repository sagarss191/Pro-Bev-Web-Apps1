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
	

$businessname = $_POST["businessname"];
$businessaddress = $_POST["businessaddress"];

$businessaddress2 = $_POST["businessaddress2"];
$city = $_POST["city"];
$zipcode = $_POST["zipcode"];
$state = $_POST["state"];

$businessphone = $_POST["businessphone"];
$contactname = $_POST["contactname"];
$contactemail = $_POST["contactemail"];
$contactphone = $_POST["contactphone"];
$auditnumber = $_POST["auditnumber"];
$auditdate = $_POST["auditdate"];
$auditname = $_POST["auditname"];
$offaucets = $_POST["offaucets"];
$towertype = $_POST["towertype"];
$systemtype = $_POST["systemtype"];
$coolingtype = $_POST["coolingtype"];
$lengthofrun = $_POST["lengthofrun"];
$coolertype = $_POST["coolertype"];
$cooleruse = $_POST["cooleruse"];
$beercoolertemp = $_POST["beercoolertemp"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$serialno = $_POST["serialno"];
$tempsetting = $_POST["tempsetting"];
$gastype = $_POST["gastype"];
$gastypeothertext = $_POST["gastypeothertext"];
$regulatortype = $_POST["regulatortype"];
$regulatorbrand = $_POST["regulatorbrand"];
$ales = $_POST["ales"];
$lager = $_POST["lager"];
$nitrogen = $_POST["nitrogen"];
$beerpourrate = $_POST["beerpourrate"];
$beerpourtemp = $_POST["beerpourtemp"];
$recommendations = $_POST["recommendations"];
$recommendationsreplacetext = $_POST["recommendationsreplacetext"];
$auditorcomment = $_POST["auditorcomment"];

$flag=0;
$sql1 = "SELECT * FROM data where id='$auditnumber'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
 $flag = 1;
} else {
 $flag=0;
}

if($flag == 0){

$sql = "INSERT INTO data (businessname,
businessaddress,
businessaddress2,
city,
zipcode,
state,
businessphone,
contactname,
contactemail,
contactphone,
auditnumber,
auditdate,
auditname,
offaucets,
towertype,
systemtype,
coolingtype,
lengthofrun,
coolertype,
cooleruse,
beercoolertemp,
brand,
model,
serialno,
tempsetting,
gastype,
gastypeothertext,
regulatortype,
regulatorbrand,
ales,
lager,
nitrogen,
beerpourrate,
beerpourtemp,
recommendations,
recommendationsreplacetext,
auditorcomment
)
VALUES ('$businessname',
'$businessaddress',
'$businessaddress2',
'$city',
'$zipcode',
'$state',
'$businessphone',
'$contactname',
'$contactemail',
'$contactphone',
'$auditnumber',
'$auditdate',
'$auditname',
'$offaucets',
'$towertype',
'$systemtype',
'$coolingtype',
'$lengthofrun',
'$coolertype',
'$cooleruse',
'$beercoolertemp',
'$brand',
'$model',
'$serialno',
'$tempsetting',
'$gastype',
'$gastypeothertext',
'$regulatortype',
'$regulatorbrand',
'$ales',
'$lager',
'$nitrogen',
'$beerpourrate',
'$beerpourtemp',
'$recommendations',
'$recommendationsreplacetext',
'$auditorcomment')";

if (mysqli_query($conn, $sql)) {
			$id = mysqli_insert_id($conn);
			echo $id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else if($flag==1)
{
	
	mysqli_query($conn,"UPDATE data SET `businessname` = '$businessname',
`businessaddress`= '$businessaddress',
`businessaddress2`= '$businessaddress2',
`city`= '$city',
`zipcode`= '$zipcode',
`state`= '$state',
`businessphone`= '$businessphone',
`contactname`= '$contactname',
`contactemail`= '$contactemail',
`contactphone`= '$contactphone',
`auditnumber`= '$auditnumber',
`auditdate`= '$auditdate',
`auditname`= '$auditname',
`offaucets`= '$offaucets',
`towertype`= '$towertype',
`systemtype`= '$systemtype',
`coolingtype`= '$coolingtype',
`lengthofrun`= '$lengthofrun',
`coolertype`= '$coolertype',
`cooleruse`= '$cooleruse',
`beercoolertemp`= '$beercoolertemp',
`brand`= '$brand',
`model`= '$model',
`serialno`= '$serialno',
`tempsetting`= '$tempsetting',
`gastype`= '$gastype',
`gastypeothertext`= '$gastypeothertext',
`regulatortype`= '$regulatortype',
`regulatorbrand`= '$regulatorbrand',
`ales`= '$ales',
`lager`= '$lager',
`nitrogen`= '$nitrogen',
`beerpourrate`= '$beerpourrate',
`beerpourtemp`= '$beerpourtemp',
`recommendations`= '$recommendations',
`recommendationsreplacetext`= '$recommendationsreplacetext',
`auditorcomment`= '$auditorcomment'  WHERE  id='$auditnumber';");
echo $auditnumber;
}

?>