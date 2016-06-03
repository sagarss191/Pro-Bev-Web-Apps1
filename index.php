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
  <body class="">
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

              <fieldset>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Business Name</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="businessname" placeholder="" value="<?php if(isset($businessname)) echo $businessname;?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Address Line 1</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($businessaddress)) echo $businessaddress;?>" id="businessaddress">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Address Line 2</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($businessaddress2)) echo $businessaddress2;?>" id="businessaddress2">
                    </div>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label>City</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" placeholder="" id="city" name="city" value="<?php if(isset($city)) echo $city;?>">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label>State</label>
                        </div>
                        <div class="col-md-9">
                          <select name="state" id="state">
                            <option <?php if($state == "AK" || $state == ""){echo "selected";}?> value="AK">AK</option>
                            <option <?php if($state == "AL"){echo "selected";}?> value="AL">AL</option>
                          <option <?php if($state == "AR"){echo "selected";}?> value="AR">AR</option>
	            			<option <?php if($state == "AZ"){echo "selected";}?> value="AZ">AZ</option>
                            <option <?php if($state == "CA"){echo "selected";}?> value="CA">CA</option>
                          <option <?php if($state == "CO"){echo "selected";}?> value="CO">CO</option>
    			        <option <?php if($state == "CT"){echo "selected";}?> value="CT">CT</option>
                            <option <?php if($state == "DC"){echo "selected";}?> value="DC">DC</option>
                          <option <?php if($state == "DE"){echo "selected";}?> value="DE">DE</option>
            		<option <?php if($state == "FL"){echo "selected";}?> value="FL">FL</option>
                            <option <?php if($state == "GA"){echo "selected";}?> value="GA">GA</option>
                          <option <?php if($state == "HI"){echo "selected";}?> value="HI">HI</option>
            <option <?php if($state == "IA"){echo "selected";}?> value="IA">IA</option>
                            <option <?php if($state == "ID"){echo "selected";}?> value="ID">ID</option>
                          <option <?php if($state == "IL"){echo "selected";}?> value="IL">IL</option>
            <option <?php if($state == "IN"){echo "selected";}?> value="IN">IN</option>
                            <option <?php if($state == "KS"){echo "selected";}?> value="KS">KS</option>
                          <option <?php if($state == "KY"){echo "selected";}?> value="KY">KY</option>
            <option <?php if($state == "LA"){echo "selected";}?> value="LA">LA</option>
                            <option <?php if($state == "MD"){echo "selected";}?> value="MD">MD</option>
                          <option <?php if($state == "ME"){echo "selected";}?> value="ME">ME</option>
            <option <?php if($state == "MI"){echo "selected";}?> value="MI">MI</option>
                            <option <?php if($state == "MN"){echo "selected";}?> value="MN">MN</option>
                          <option <?php if($state == "MO"){echo "selected";}?> value="MO">MO</option>
            <option <?php if($state == "MS"){echo "selected";}?> value="MS">MS</option>
                            <option <?php if($state == "MT"){echo "selected";}?> value="MT">MT</option>
                          <option <?php if($state == "NC"){echo "selected";}?> value="NC">NC</option>
            <option <?php if($state == "ND"){echo "selected";}?> value="ND">ND</option>
                            <option <?php if($state == "NE"){echo "selected";}?> value="NE">NE</option>
                          <option <?php if($state == "NH"){echo "selected";}?> value="NH">NH</option>
            <option <?php if($state == "NJ"){echo "selected";}?> value="NJ">NJ</option>
                            <option <?php if($state == "NM"){echo "selected";}?> value="NM">NM</option>
                          <option <?php if($state == "NV"){echo "selected";}?> value="NV">NV</option>
            <option <?php if($state == "NY"){echo "selected";}?> value="NY">NY</option>
                            <option <?php if($state == "OH"){echo "selected";}?> value="OH">OH</option>
                          <option <?php if($state == "OK"){echo "selected";}?> value="OK">OK</option>
            <option <?php if($state == "OR"){echo "selected";}?> value="OR">OR</option>
                            <option <?php if($state == "PA"){echo "selected";}?> value="PA">PA</option>
                          <option <?php if($state == "PR"){echo "selected";}?> value="PR">PR</option>
            <option <?php if($state == "RI"){echo "selected";}?> value="RI">RI</option>
                            <option <?php if($state == "SC"){echo "selected";}?> value="SC">SC</option>
                          <option <?php if($state == "SD"){echo "selected";}?> value="SD">SD</option>
            <option <?php if($state == "TN"){echo "selected";}?> value="TN">TN</option>
                            <option <?php if($state == "TX"){echo "selected";}?> value="TX">TX</option>
                          <option <?php if($state == "UT"){echo "selected";}?> value="UT">UT</option>
            <option <?php if($state == "VA"){echo "selected";}?> value="VA">VA</option>
                            <option <?php if($state == "VT"){echo "selected";}?> value="VT">VT</option>
                          <option <?php if($state == "WA"){echo "selected";}?> value="WA">WA</option>
            <option <?php if($state == "WI"){echo "selected";}?> value="WI">WI</option>
                            <option <?php if($state == "WV"){echo "selected";}?> value="WV">WV</option>
                          <option <?php if($state == "WY"){echo "selected";}?> value="WY">WY</option>

                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label>Zip</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" placeholder="" id="zipcode" class="zip" maxlength="10" name="zipcode" value="<?php if(isset($zipcode)) echo $zipcode;?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Business Phone</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="zip"  maxlength="10" placeholder="" value="<?php if(isset($businessphone)) echo $businessphone;?>" id="businessphone">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Contact Name</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($contactname)) echo $contactname;?>" id="contactname">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Contact Email</label>
                    </div>
                    <div class="col-md-8">
                      <input type="email" placeholder="" value="<?php if(isset($contactemail)) echo $contactemail;?>" id="contactemail">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Contact Phone</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="zip"  maxlength="10" placeholder="" value="<?php if(isset($contactphone)) echo $contactphone;?>" id="contactphone">
                    </div>
                  </div>
                </div>



                <div class="form-group">

                  
                  
                  <div class="row">
                    <div class="col-md-4">
                      <label>Audit #</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="1000" id="auditnumber" value="<?php if(isset($auditnumber)) echo $auditnumber;?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Audit Date</label>
                    </div>
                    <div class="col-md-8">
                       <input type='text' class="form-control" id="auditdate" value="<?php if(isset($auditdate)) echo $auditdate;?>" />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Audit Name</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($auditname)) echo $auditname;?>" id="auditname">
                    </div>
                  </div>
                </div>

                <div class="audit-checklist-wrapper">

                  <div class="row">
                    <div class="col-md-12">
                      <h2>Audit Checklist:</h2>
                    </div>
                  </div>
                  
                  <div class="row audit-checklist-inner">
                    <div class="col-md-4">
                      <h3>Description</h3>
                    </div>
                    <div class="col-md-8">
                      <h3>Options</h3>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label># of Faucets</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="number" placeholder="" value="<?php if(isset($offaucets)) echo $offaucets;?>" id="offaucets">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Tower Type</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($towertype)) echo $towertype;?>" id="towertype">
                    </div>
                  </div>

                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>System Type</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="systemtype" value="Long Draw" <?php if(isset($systemtype) && $systemtype== "Long Draw " ) echo "checked";?>checked>Long Draw</label>
                        </li>
                        <li>
                          <label><input type="radio" name="systemtype" value="Short Draw" <?php if(isset($systemtype) && $systemtype== "Short Draw " ) echo "checked";?>>Short Draw</label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>Cooling Type</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="coolingtype" value="Air" <?php if(isset($coolingtype) && $coolingtype== "Air" ) echo "checked";?>>Air</label>
                        </li>
                        <li>
                          <label><input type="radio" name="coolingtype" value="Glycol" <?php if(isset($coolingtype) && $coolingtype== "Glycol" ) echo "checked";?>>Glycol</label>
                        </li>
                        <li>
                          <label><input type="radio" name="coolingtype" value="None" <?php if(isset($coolingtype) && $coolingtype== "None" ) echo "checked";?>>None</label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Length of Run</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" class="potu number" value="<?php if(isset($lengthofrun)) echo $lengthofrun;?>" id="lengthofrun">
                    </div>
                  </div>

                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>Cooler Type</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="coolertype" value="Keg Box" <?php if(isset($coolertype) && $coolertype== "Keg Box" ) echo "checked";?>>Keg Box</label>
                        </li>
                        <li>
                          <label><input type="radio" name="coolertype" value="Walk-In" <?php if(isset($coolertype) && $coolertype== "Walk-In" ) echo "checked";?>>Walk-In</label>
                        </li>
                        <li>
                          <label><input type="radio" name="coolertype" value="Reach-In" <?php if(isset($coolertype) && $coolertype== "Reach-In" ) echo "checked";?>>Reach-In</label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>Cooler Use</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="cooleruse" value="Shared" <?php if(isset($cooleruse) && $cooleruse== "Shared" ) echo "checked";?>>Shared</label>
                        </li>
                        <li>
                          <label><input type="radio" name="cooleruse" value="Dedicated" <?php if(isset($cooleruse) && $cooleruse== "Dedicated" ) echo "checked";?>>Dedicated</label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Beer Cooler Temp</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" class="potu number" value="<?php if(isset($beercoolertemp)) echo $beercoolertemp;?>" id="beercoolertemp">
                    </div>
                  </div>

                  

                  <div class="glycol-deck-wrapper">

                      <div class="row">
                        <div class="col-md-12">
                          <h4>Glycol Deck</h4>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-4">
                          <label>Brand</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="" value="<?php if(isset($brand)) echo $brand;?>" id="brand">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Model</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="model" value="<?php if(isset($model)) echo $model;?>" >
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Serial #</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="" value="<?php if(isset($serialno)) echo $serialno;?>" id="serialno">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Temp Setting</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" class="potu number" placeholder="" value="<?php if(isset($tempsetting)) echo $tempsetting;?>" id="tempsetting">
                        </div>
                      </div>

                  </div>

                  



                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>Gas Type</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="gastype" value="Mixed 60/40" <?php if(isset($gastype) && $gastype== "Mixed 60/40" ) echo "checked";?>>Mixed 60/40</label>
                        </li>
                        <li>
                          <label><input type="radio" name="gastype" value="Mixed 70/30" <?php if(isset($gastype) && $gastype== "Mixed 70/30" ) echo "checked";?>>Mixed 70/30</label>
                        </li>
                        <li>
                          <label><input type="radio" name="gastype" value="CO2" <?php if(isset($gastype) && $gastype== "CO2" ) echo "checked";?>>CO2</label>
                        </li>
                      </ul>
                      <ul class="no-bullet zero-margin-padding checklist-plus-input">
                        <li>
                          <div class="row">
                            <div class="col-md-5">
                              <input type="radio" name="gastype" value="Mixed Other" <?php if(isset($gastype) && $gastype== "Mixed Other" ) echo "checked";?>>
                              <label>Mixed Other</label>
                            </div>
                            <div class="col-md-7">
                              <input type="text" id="gastypeothertext" value="<?php if(isset($gastype) && $gastype== "Mixed Other" ) {echo $gastypeothertext;}?>" <?php if(isset($gastype) && $gastype== "Mixed Other" ) {} else {echo "disabled";}?> >
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>



                  <div class="row checklist-wrapper">
                    <div class="col-md-4">
                      <label>Regulator Type</label>
                    </div>
                    <div class="col-md-8">
                      <ul class="no-bullet zero-margin-padding">
                        <li>
                          <label><input type="radio" name="regulatortype" value="Individual" <?php if(isset($regulatortype) && $regulatortype== "Individual" ) echo "checked";?>>Individual</label>
                        </li>
                        <li>
                          <label><input type="radio" name="regulatortype" value="Common" <?php if(isset($regulatortype) && $regulatortype== "Common" ) echo "checked";?>>Common</label>
                        </li>
                      </ul>
                    </div>
                  </div>




                  <div class="row">
                    <div class="col-md-4">
                      <label>Regulator Brand</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" value="<?php if(isset($regulatorbrand)) echo $regulatorbrand;?>" id="regulatorbrand">
                    </div>
                  </div>

                  <div class="glycol-deck-wrapper">

                      <div class="row">
                        <div class="col-md-12">
                          <h4>Pressure Setting</h4>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-4">
                          <label>Ales</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" class="number potu" placeholder="" value="<?php if(isset($ales)) echo $ales;?>" id="ales">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Lager</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="" class="number potu" value="<?php if(isset($lager)) echo $lager;?>" id="lager">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <label>Nitrogen</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="" class="number potu" value="<?php if(isset($nitrogen)) echo $nitrogen;?>" id="nitrogen">
                        </div>
                      </div>

                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Beer Pour Rate (Oz/Sec)</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" class="number" value="<?php if(isset($beerpourrate)) echo $beerpourrate;?>" id="beerpourrate">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Beer Pour Temp</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" placeholder="" class="potu number" value="<?php if(isset($beerpourtemp)) echo $beerpourtemp;?>" id="beerpourtemp">
                    </div>
                  </div>

                  <div class="recommendations">
                    <div class="row checklist-wrapper">
                      <div class="col-md-4">
                        <label>Recommendations</label>
                      </div>
                      <div class="col-md-8">
                        <ul class="no-bullet zero-margin-padding">
                          <li>
                            <label><input type="checkbox" name="recommendations" value="Adjust Pressure" <?php if(isset($recommendations) && preg_match('/Adjust Pressure/',$recommendations) ) echo "checked";?>>Adjust Pressure</label>
                          </li>
                          <li>
                            <label><input type="checkbox" name="recommendations" value="Adjust Temp of Glycol Deck" <?php if(isset($recommendations) && preg_match('/Adjust Temp of Glycol Deck/',$recommendations) ) echo "checked";?>>Adjust Temp of Glycol Deck</label>
                          </li>
                          <li>
                            <label><input type="checkbox" name="recommendations" value="Adjust Cooler Temp" <?php if(isset($recommendations) && preg_match('/Adjust Cooler Temp/',$recommendations) ) echo "checked";?>>Adjust Cooler Temp</label>
                          </li>
                          <li>
                            <label><input type="checkbox" name="recommendations" value="Clean Evaporator Coil" <?php if(isset($recommendations) && preg_match('/Clean Evaporator Coil/',$recommendations) ) echo "checked";?>>Clean Evaporator Coil</label>
                          </li>
                          <li>
                            <label><input type="checkbox" name="recommendations" value="Clean Condensor Coil" <?php if(isset($recommendations) && preg_match('/Clean Condensor Coil/',$recommendations) ) echo "checked";?>>Clean Condensor Coil</label>
                          </li>
                        </ul>
                        <ul class="no-bullet zero-margin-padding checklist-plus-input">
                          <li>
                            <div class="row">
                              <div class="col-md-5">
                                <input type="checkbox" name="recommendations" value="Replace Parts" <?php if(isset($recommendations) && preg_match('/Replace Parts/',$recommendations) ) echo "checked";?>>
                                <label>Replace Parts</label>
                              </div>
                              <div class="col-md-7">
                                <input id="recommendationsreplacetext" type="text" value="<?php if(isset($recommendationsreplacetext)) echo $recommendationsreplacetext;?>" <?php if(isset($recommendations) && preg_match('/Replace Parts/',$recommendations) ) {echo "enabled";}else{echo "disabled";}?>>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Auditor Comments</label>
                    </div>
                    <div class="col-md-8">
                      <textarea id="auditorcomment"><?php if(isset($auditorcomment)) echo $auditorcomment;?></textarea>
                    </div>
                  </div>

                </div>

                <div class="row bottom-button-wrapper">
                    <div class="col-md-6">

                  <input type="submit" class="btn secondary-btn" id="Save" value="Save" />
                    </div>
                    <div class="col-md-6">
                                      <input type="submit" class="btn primary-btn" id="Email" value="Email" data-toggle="modal" data-target="#myModal" />

                    </div>
                    <div class="col-md-12 text-center">
                      <a target="_blank" href="/Pro-Bev-Web-Apps/History.php">History</a>
                    </div>
           
          
                  </div>

              </fieldset>

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
<script>

$(document).ready(function(){
	//get icrement value

//	$("#gastypeothertext").attr("disabled","disabled");
	//	$("#recommendationsreplacetext").attr("disabled","disabled");

	$.ajax({
				type: 'post',
				url: '/Pro-Bev-Web-Apps/getid.php',
				success: function(data1) {
	
	if( !$("#auditnumber").val() ) {
						$("#auditnumber").val(data1);
	}
				}
			});
$('input[type=radio][name=gastype]').change(function() {

if($("input[name='gastype']:checked").val() == "Mixed Other")
{

$("#gastypeothertext").removeAttr("disabled"); 
	}
else
{
	$("#gastypeothertext").attr("disabled","disabled");
	}

        });


$('input[type=checkbox][name=recommendations]').change(function() {
var recommendationslist1 = [];
            $.each($("input[name='recommendations']:checked"), function(){            
                recommendationslist1.push($(this).val());
            });

var recommendations1 =recommendationslist1.join(", ");

if(recommendations1.search("Replace Parts") != -1)
{
	$("#recommendationsreplacetext").removeAttr("disabled"); 
}
else
{
	$("#recommendationsreplacetext").attr("disabled","disabled");
	}

        });

			
	function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
    $("#Save").click(function(){
		if (!ValidateEmail($("#contactemail").val())) {
            alert("Invalid Cotact Email Address.");
        }
        else {
            
        $("body").addClass("loader-wrapper");
var businessname = $("#businessname").val();
var businessaddress = $("#businessaddress").val();
var businessaddress2 = $("#businessaddress2").val();
var city = $("#city").val();
var zipcode = $("#zipcode").val();
var state = $("#state").val();

var businessphone = $("#businessphone").val();
var contactname = $("#contactname").val();
var contactemail = $("#contactemail").val();
var contactphone = $("#contactphone").val();
var auditnumber = $("#auditnumber").val();
var auditdate = $("#auditdate").val();
var auditname = $("#auditname").val();
var offaucets = $("#offaucets").val();
var towertype = $("#towertype").val();
var systemtype =  $("input[name='systemtype']:checked").val();
var coolingtype =  $("input[name='coolingtype']:checked").val();
var lengthofrun = $("#lengthofrun").val();

var coolertype =  $("input[name='coolertype']:checked").val();
var cooleruse =  $("input[name='cooleruse']:checked").val();
var beercoolertemp = $("#beercoolertemp").val();
var brand = $("#brand").val();
var model = $("#model").val();
var serialno = $("#serialno").val();
var tempsetting = $("#tempsetting").val();

var gastype = $("input[name='gastype']:checked").val();
var gastypeothertext = $("#gastypeothertext").val();
var regulatortype = $("input[name='regulatortype']:checked").val();

var regulatorbrand = $("#regulatorbrand").val();

var ales = $("#ales").val();
var lager = $("#lager").val();
var nitrogen = $("#nitrogen").val();

var beerpourrate = $("#beerpourrate").val();
var beerpourtemp = $("#beerpourtemp").val();
var recommendationslist = [];
            $.each($("input[name='recommendations']:checked"), function(){            
                recommendationslist.push($(this).val());
            });

var recommendations =recommendationslist.join(", ");

var recommendationsreplacetext = $("#recommendationsreplacetext").val();


var auditorcomment = $("#auditorcomment").val();

			
			
			$.ajax({

				type: 'post',

				url: '/Pro-Bev-Web-Apps/insert.php',

				

				data: {businessname:businessname,
businessaddress:businessaddress,
businessaddress2:businessaddress2,
city:city,
zipcode:zipcode,
state:state,
businessphone:businessphone,
contactname:contactname,
contactemail:contactemail,
contactphone:contactphone,
auditnumber:auditnumber,
auditdate:auditdate,
auditname:auditname,
offaucets:offaucets,
towertype:towertype,
systemtype:systemtype,
coolingtype:coolingtype,
lengthofrun:lengthofrun,
coolertype:coolertype,
cooleruse:cooleruse,
beercoolertemp:beercoolertemp,
brand:brand,
model:model,
serialno:serialno,
tempsetting:tempsetting,
gastype:gastype,
gastypeothertext:gastypeothertext,
regulatortype:regulatortype,
regulatorbrand:regulatorbrand,
ales:ales,
lager:lager,
nitrogen:nitrogen,
beerpourrate:beerpourrate,
beerpourtemp:beerpourtemp,
recommendations:recommendations,
recommendationsreplacetext:recommendationsreplacetext,
auditorcomment:auditorcomment

},

				success: function(data1) {
	
	        $("body").removeClass("loader-wrapper");
	alert("Details Saved");

 window.open("http://www.jtechappz.co.in/Pro-Bev-Web-Apps/generatedocument.php?id="+data1);
 window.location.replace("http://www.jtechappz.co.in/Pro-Bev-Web-Apps/index.php");
 
				}
			});

}
    });


		$('.zip').keyup(function () { 
			this.value = this.value.replace(/[^0-9]/g,'');
		});
		
	$('.number').keypress(function(event) {
  if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
    event.preventDefault();
  }
});	
$('.potu').blur(function () {
var ids = $(this).attr('id');
			//alert(ids)
			if(ids =='lengthofrun')
			{
				if($(this).val().substring(0,-2)!=' Ft' && $(this).val()!=''){
						$(this).val($(this).val()+' Ft');

				}
			}
			if(ids =='beercoolertemp')
			{
				if($(this).val().substring(0,-1)!=' F' && $(this).val()!=''){
						$(this).val($(this).val()+' F');

				}
			}
		
		if(ids =='tempsetting')
			{
				if($(this).val().substring(0,-1)!=' F' && $(this).val()!=''){
						$(this).val($(this).val()+' F');

				}
			}
			if(ids =='beerpourtemp')
			{
				if($(this).val().substring(0,-1)!=' F' && $(this).val()!=''){
						$(this).val($(this).val()+' F');

				}
			}
			if(ids =='ales')
			{
				if($(this).val().substring(0,-3)!=' PSI' && $(this).val()!=''){
						$(this).val($(this).val()+' PSI');

				}
			}
			if(ids =='lager')
			{
				if($(this).val().substring(0,-3)!=' PSI' && $(this).val()!=''){
						$(this).val($(this).val()+' PSI');

				}
			}
			if(ids =='nitrogen')
			{
				if($(this).val().substring(0,-3)!=' PSI' && $(this).val()!=''){
						$(this).val($(this).val()+' PSI');

				}
			}
			


});

 $("#lengthofrun").focusout(function(){
			 
$(this).val($(this).val().replace(/\ Ft/g, ''));
    });
$("#beercoolertemp").focusout(function(){
			 
$(this).val($(this).val().replace(/\ F/g, ''));
    });
$("#tempsetting").focusout(function(){
			 
$(this).val($(this).val().replace(/\ F/g, ''));
    });
$("#beerpourtemp").focusout(function(){
			 
$(this).val($(this).val().replace(/\ F/g, ''));
    });
$("#ales").focusout(function(){
			 
$(this).val($(this).val().replace(/\ PSI/g, ''));
    });
$("#lager").focusout(function(){
			 
$(this).val($(this).val().replace(/\ PSI/g, ''));
    });
$("#nitrogen").focusout(function(){
			 
$(this).val($(this).val().replace(/\ PSI/g, ''));
    });



	
 $("#Email").click(function(){
	 $("#sendemailtotxt").val($("#contactemail").val()); 
 });
//email code
 $("#sendmail").click(function(){


		if (!ValidateEmail($("#contactemail").val())) {
            alert("Invalid Cotact Email Address.");
        }
        else {
 

        $("body").addClass("loader-wrapper");
	 
var businessname = $("#businessname").val();

var businessaddress2 = $("#businessaddress2").val();
var city = $("#city").val();
var zipcode = $("#zipcode").val();
var state = $("#state").val();

var businessaddress = $("#businessaddress").val();
var businessphone = $("#businessphone").val();
var contactname = $("#contactname").val();
var contactemail = $("#contactemail").val();
var contactphone = $("#contactphone").val();
var auditnumber = $("#auditnumber").val();
var auditdate = $("#auditdate").val();
var auditname = $("#auditname").val();
var offaucets = $("#offaucets").val();
var towertype = $("#towertype").val();
var systemtype =  $("input[name='systemtype']:checked").val();
var coolingtype =  $("input[name='coolingtype']:checked").val();
var lengthofrun = $("#lengthofrun").val();
var coolertype =  $("input[name='coolertype']:checked").val();
var cooleruse =  $("input[name='cooleruse']:checked").val();
var beercoolertemp = $("#beercoolertemp").val();
var brand = $("#brand").val();
var model = $("#model").val();
var serialno = $("#serialno").val();
var tempsetting = $("#tempsetting").val();
var gastype = $("input[name='gastype']:checked").val();
var gastypeothertext = $("#gastypeothertext").val();
var regulatortype = $("input[name='regulatortype']:checked").val();
var regulatorbrand = $("#regulatorbrand").val();
var ales = $("#ales").val();
var lager = $("#lager").val();
var nitrogen = $("#nitrogen").val();
var beerpourrate = $("#beerpourrate").val();
var beerpourtemp = $("#beerpourtemp").val();
var recommendationslist = [];
            $.each($("input[name='recommendations']:checked"), function(){            
                recommendationslist.push($(this).val());
            });

var recommendations =recommendationslist.join(", ");

var recommendationsreplacetext = $("#recommendationsreplacetext").val();


var auditorcomment = $("#auditorcomment").val();

var sendemailtochk = $("input[name='sendemailtochk']:checked").val();

var sendmailtoprodevchk = $("input[name='sendmailtoprodevchk']:checked").val();

var sendmailchk,prodevmail,sendemailtotxt ;
if(sendemailtochk == "SendEmailTochk")
{
	sendmailchk = "yes"
	sendemailtotxt = $("#sendemailtotxt").val();
	
}
if(sendemailtochk == "SendEmailTochk")
{
	sendmailchk = "no"
	sendemailtotxt = "";
	
}

if(sendmailtoprodevchk == "SendMailToProBevchk")
{
prodevmail = "yes";
}
else
{
	prodevmail = "no";
}
			
			$.ajax({

				type: 'post',

				url: '/Pro-Bev-Web-Apps/insert.php',

				

				data: {businessname:businessname,
businessaddress:businessaddress,
businessaddress2:businessaddress2,
city:city,
zipcode:zipcode,
state:state,
businessphone:businessphone,

businessphone:businessphone,
contactname:contactname,
contactemail:contactemail,
contactphone:contactphone,
auditnumber:auditnumber,
auditdate:auditdate,
auditname:auditname,
offaucets:offaucets,
towertype:towertype,
systemtype:systemtype,
coolingtype:coolingtype,
lengthofrun:lengthofrun,
coolertype:coolertype,
cooleruse:cooleruse,
beercoolertemp:beercoolertemp,
brand:brand,
model:model,
serialno:serialno,
tempsetting:tempsetting,
gastype:gastype,
gastypeothertext:gastypeothertext,
regulatortype:regulatortype,
regulatorbrand:regulatorbrand,
ales:ales,
lager:lager,
nitrogen:nitrogen,
beerpourrate:beerpourrate,
beerpourtemp:beerpourtemp,
recommendations:recommendations,
recommendationsreplacetext:recommendationsreplacetext,
auditorcomment:auditorcomment

},

				success: function(data1) {

				}
			});

			
			
			$.ajax({

				type: 'post',

				url: '/Pro-Bev-Web-Apps/sendmail.php',

				

				data: {businessname:businessname,
businessaddress2:businessaddress2,
city:city,
zipcode:zipcode,
state:state,
businessphone:businessphone,

				sendmailchk:sendmailchk,
				sendemailtotxt:sendemailtotxt,
				prodevmail:prodevmail,
businessaddress:businessaddress,
businessphone:businessphone,
contactname:contactname,
contactemail:contactemail,
contactphone:contactphone,
auditnumber:auditnumber,
auditdate:auditdate,
auditname:auditname,
offaucets:offaucets,
towertype:towertype,
systemtype:systemtype,
coolingtype:coolingtype,
lengthofrun:lengthofrun,
coolertype:coolertype,
cooleruse:cooleruse,
beercoolertemp:beercoolertemp,
brand:brand,
model:model,
serialno:serialno,
tempsetting:tempsetting,
gastype:gastype,
gastypeothertext:gastypeothertext,
regulatortype:regulatortype,
regulatorbrand:regulatorbrand,
ales:ales,
lager:lager,
nitrogen:nitrogen,
beerpourrate:beerpourrate,
beerpourtemp:beerpourtemp,
recommendations:recommendations,
recommendationsreplacetext:recommendationsreplacetext,
auditorcomment:auditorcomment

},

				success: function(data1) {
					        $("body").removeClass("loader-wrapper");
alert("Mail Sent");
 location.reload();
 
				}
			});


		}
    });
});



</script>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Email</h4>
      </div>
      <div class="modal-body">
         
        <ul class="no-bullet zero-margin-padding">
          <li>
            <div class="row">
              <div class="col-md-4">
                <label style="margin-top: 12px;">
                  <input type="checkbox" value="SendEmailTochk" name="sendemailtochk" id="sendemailtochk">
                  Send email to
                </label>
              </div>
              <div class="col-md-8">
                <input type="text" name="sendemailtotxt" id="sendemailtotxt">
              </div>
            </div>
          </li>
          <li>
            <label>
              <input type="checkbox" value="SendMailToProBevchk" name="sendmailtoprodevchk" id="sendmailtoprodevchk">
              Send email to Pro Bev
            </label>
          </li>
        </ul>

        <input type="submit" value="Submit" class="btn primary-btn" id="sendmail">
        
      </div>
    </div>

  </div>
</div>












  </body>
</html>