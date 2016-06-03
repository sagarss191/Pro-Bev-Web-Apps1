<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>PROBEV</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">




  </head>
  <body>
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
	
}
	
?>    

    
    <div class="wrapper inner-page-wrapper">



      

        <header>
          <div class="header-inner">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 header-logo text-center">
                  <a href="#"><img src="images/logo.png" alt="PROBEV"></a>
                </div>
              </div>
            </div>
          </div>
        </header>



        <div class="main-form-wrapper">
          <div class="container">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

              
<table class="table table-hover">
    <thead>
      <tr>
        <th>Business Name</th>
        <th>Business Address</th>
        <th>Business Phone</th>
                <th>Audit Number</th>
      </tr>
    </thead>
    <tbody>
      <?php
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><a href='/Pro-Bev-Web-Apps/index.php?id=".$row["id"]."'>" .$row["businessname"]. "</a></td><td>" . $row["businessaddress"]. "</td><td>" . $row["businessphone"]. "</td><td>" . $row["auditnumber"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

?>

    </tbody>
  </table>
            </div>
            <div class="col-sm-2"></div>


          </div>
          
          


        </div>
      

        <footer>
          <div class="container">
            <div class="footer-contact-info">
              
              <p>For more Information, Contact PRO BEV</p>
              <ul class="no-bullet zero-margin-padding">
                <li><a href="tel:727-710-4761"><i aria-hidden="true" class="fa fa-phone"></i>727-710-4761</a></li>
                <li><a href="www.PRO-BEV.com"><i aria-hidden="true" class="fa fa-globe"></i>www.PRO-BEV.com</a></li>
              </ul>

            </div>

            <div class="footer-basic-info">
                <p>Florida Contractor License CAC 1818535<br>
                Copyright 2016 PRO BEV. All Rights Reserved.<br></p>
            </div>

          </div>
        </footer>





    </div>
    


    
    

    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/moment-with-locales.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#auditdate').datetimepicker();
        });
    </script>













  </body>
</html>