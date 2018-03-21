<?php

//echo "Thankyou for making a donation of ₹$amt";


$servername = "localhost";
$username = "root";
$password = "";
$db_database = "";
// Create connection
$db_server = mysql_connect('localhost', 'root', 'saveAlife','aria'); 

// Check connection
if (!$db_server) {
    die("Connection failed: " . mysqli_connect_error());
}


mysql_select_db('aria', $db_server)

or die("Unable to select database: " . mysql_error());



$fn = $_POST['first-name'];

$ln = $_POST['last-name'];

$adopt= $_POST['pet'];

$add1 = $_POST['address-1'];

$city = $_POST['city'];

$st = $_POST['state'];

$zip = $_POST['zip'];

$dph = $_POST['daytime-phone'];

$eph = $_POST['evening-phone'];

$eid = $_POST['email-address'];

$phtime = $_POST['contact-time'];

setcookie("fn", $fn);
setcookie("ln", $ln);
setcookie("adopt", $adopt);

//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "INSERT INTO adopt(fname,lname,pet,addr1,city,state,zip,dphno,ephno,eid,cntct_time) VALUES('$fn','$ln','$adopt','$add1','$city','$st','$zip','$dph','$eph','$eid','$phtime')";

if (!mysql_query($query, $db_server))

echo "INSERT failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END


<!DOCTYPE HTML>
<html>
<head>
<title>adoption step2</title>
<meta charset="UTF-8">
<link rel="icon" href="Img\paw.jpg"/>
<link rel="stylesheet" type="text/css" href="hdng.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="form2.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
</head>
</head>
<body>
<!--<img class="Banner" src="Banner.png">
--><div class = "fix" ></div>


<ul class="navbar">
  <li><a class="active" href="AdoptApal - Final.html">Home</a></li>
  <li><a href="RnA - Final.html">Rescue and Adoption (RnA)</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Health &amp Care</a>
    <div class="dropdown-content" id="myDropdown">
      <a href="healthncaredog.html">Puppy Basics</a>
      <a href="cat.html">Cat</a>
      <a href="hare.html">Hare</a>
      <a href="horse.html">Horse</a>
    </div>
  </li>
  <li><a href="faqs.html">FAQs</a></li>
  <li><a href="DonatePage.html">Donate</a></li>
  <li><a href="events.html">Events</a></li>
  <li><a href="aboutus.html">About Us</a></li>
  <li><a href="contactus.html">Contact Us</a></li>   
</ul>


<div class="ban">

<img src="AdoptPageBanner.jpg" alt="Image"  class="adoptbanner">

<h2 class="words" style="z-index:1;">Adopt</h2>

</div>



<div class="box fonts"><section class="adoption-process-application js-step-2">
   <form class="form-adoption-application" id="form-adoption-application"  action="Aform3.php" method="post">
      <div class="adoption-application-guide">
         <div class="progress1">
            <ul><li><div class="process-guide guide-start current">
               <div class="label">Personal Information</div>
               <div class="step-number">1</div>
            </div></li>
            <li><div class="process-guide guide">
               <div class="label">Residence Information</div>
               <div class="step-number">2</div>
            </div><li>
            <li><div class="process-guide guide">
               <div class="label">Past and Current Pets</div>
               <div class="step-number">3</div>
            </div></li>
            <li><div class="process-guide guide">
               <div class="label">Your Rescue Animal</div>
               <div class="step-number">4</div>
            </div></li>
            <li><div class="process-guide guide-end">
               <div class="label">Acceptance of Terms</div>
               <div class="step-number">5</div>
            </div></li></ul>

         </div>
      </div>
     
      <div class="step-headers">
         <h2>Residence Information</h2>
         <h3>Step 2 of 5</h3>
      </div>
      <div class="horizontal-divider"></div>
      
	  <!--
	  </div>
      -->
	  
	  <div class="grid-adoption-application">
         <div class="fieldset-group">
            <fieldset style="line-height:60px;">
               <legend class="legend">Current Residence Description</legend>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="rent-or-own">Do You Rent or Own?<span style="color:red;">*</span></label><select class="form-control" id="rent-or-own" name="rent-or-own" required="required">
                           <option value="">Choose</option>
                           <option value="rent">Rent</option>
                           <option value="own">Own</option></select></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="residence-type">Residence Type<span style="color:red;">*</span></label><select class="form-control" id="residence-type" name="residence-type" required="required">
                           <option value="">Choose</option>
                           <option value="Apartment">Apartment</option>
                           <option value="Condo">Condo</option>
                           <option value="Townhome">Townhome</option>
                           <option value="Single Family Residence">Single Family Residence</option></select></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="years-lived">Years Lived There?<span style="color:red;">*</span></label><select class="form-control" id="years-lived" name="years-lived" required="required">
                           <option value="">Choose</option>
                           <option value="<1 year">&lt;1 year</option>
                           <option value="1 year">1 year</option>
                           <option value="2 years">2 years</option>
                           <option value="3 years">3 years</option>
                           <option value="4 years">4 years</option>
                           <option value="5 years">5 years</option>
                           <option value="6+ years">6+ years</option></select></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="fenced-yard">Is Your Yard Fenced?<span style="color:red;">*</span></label><select class="form-control" id="fenced-yard" name="fenced-yard" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="fence-type">Fence Type<span style="color:red;">*</span></label><select class="form-control" id="fence-type" name="fence-type" required="required">
                           <option value="">Choose</option>
                           <option value="Not Applicable (N/A)">Not Applicable (N/A)</option>
                           <option value="Invisible">Invisible</option>
                           <option value="Wood - With Openings">Wood - With Openings</option>
                           <option value="Wood - Without Openings">Wood - Without Openings</option>
                           <option value="Chain Link">Chain Link</option>
                           <option value="Plastic">Plastic</option>
                           <option value="Electric">Electric</option>
                           <option value="Other">Other</option></select></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="fence-height">Fence Height<span style="color:red;">*</span></label><select class="form-control" id="fence-height" name="fence-height" required="required">
                           <option value="">Choose</option>
                           <option value="Not Applicable (N/A)">Not Applicable (N/A)</option>
                           <option value="<4 feet">&lt;4 feet</option>
                           <option value="4 feet">4 feet</option>
                           <option value="6 feet">6 feet</option>
                           <option value="8 feet">8 feet</option>
                           <option value="10 feet">10 feet</option>
                           <option value="12+ feet">12+ feet</option></select></div>
                  </div>
               </div>
            </fieldset>
         </div><br>
         <div class="horizontal-divider"></div>
         <div class="fieldset-group">
            <fieldset style="line-height:60px;">
               <legend class="legend"><span class="intexthighlight" phasehl="combinePhrases:en" id="xyoeu" title="" style="line-height: 25.7143px;">Landlord Contact Information</span> (If Applicable)</legend>
               <div class="row row-xs-collapse">
                  <div class="span4">
                     <div class="form-group"><label class="control-label" for="landlord-first-name">First Name</label><input type="text" class="form-control" id="landlord-first-name" name="landlord-first-name"></div>
                  </div>
                  <div class="span4">
                     <div class="form-group"><label class="control-label" for="landlord-last-name">Last Name</label><input type="text" class="form-control" id="landlord-last-name" name="landlord-last-name"></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span7">
                     <div class="form-group"><label class="control-label" for="landlord-address-1">Street Address</label><input type="text" class="form-control" id="landlord-address-1" name="landlord-address-1"></div>
                  </div>
               </div>
               
               <div class="row row-xs-collapse">
                  <div class="span4">
                     <div class="form-group"><label class="control-label" for="landlord-city">City</label><input type="text" class="form-control" id="landlord-city" name="landlord-city"></div>
                  </div>
                  <div class="span2">
                     <div class="form-group"><label class="control-label" for="landlord-state">State</label><select class="form-control" id="landlord-state" name="landlord-state">
                           <option value="">Choose</option>
                           <optgroup label="India">
                              <option value="AP">Andhra Pradesh</option>
                              <option value="AR">Arunachal Pradesh</option>
                              <option value="AS">Assam</option>
                              <option value="BR">Bihar</option>
                              <option value="CG">Chhattisgarh</option>
                              <option value="GA">Goa</option>
                              <option value="GJ">Gujarat</option>
                              <option value="HR">Haryana</option>
                              <option value="HP">Himachal Pradesh</option>
                              <option value="JK">Jammu & Kashmir</option>
                              <option value="JH">Jharkhand</option>
                              <option value="KA">Karnataka</option>
                              <option value="KL">Kerala</option>
                              <option value="MP">Madhya Pradesh</option>
                              <option value="MH">Maharashtra</option>
                              <option value="MN">Manipur</option>
                              <option value="ML">Meghalaya</option>
                              <option value="MZ">Mizoram</option>
                              <option value="NL">Nagaland</option>
                              <option value="OR">Odisha</option>
                              <option value="PB">Punjab</option>
                              <option value="RJ">Rajasthan</option>
                              <option value="SK">Sikkim</option>
                              <option value="TN">Tamil Nadu</option>
                              <option value="TA">Telangana</option>
                              <option value="TR">Tripura</option>
                              <option value="UK">Uttarakhand</option>
                              <option value="UP">Uttar Pradesh</option>
                              <option value="WB">West Bengal</option>
                           </optgroup></select></div>
                  </div>
                  <div class="span2">
                     <div class="form-group"><label class="control-label" for="landlord-zip">Zip</label><input type="text" class="form-control" id="landlord-zip" name="landlord-zip"></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label" for="landlord-daytime-phone">Daytime Phone</label><input type="text" class="form-control" id="landlord-daytime-phone" name="landlord-daytime-phone"></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label" for="landlord-evening-phone">Evening Phone</label><input type="text" class="form-control" id="landlord-evening-phone" name="landlord-evening-phone"></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span5">
                     <div class="form-group"><label class="control-label" for="landlord-email-address">Email Address</label><input type="email" class="form-control" id="landlord-email-address" name="landlord-email-address"></div>
                  </div>
               </div><br>
            </fieldset>
         </div>
         <div class="horizontal-divider"></div>
         <div class="continue-application-wrapper">
            <div class="button-row row">
               <div class="button-text"><input type="submit" style="color:white;background-color:orangered;padding:20px;cursor:pointer;font-size:25px;margin-top:10px;" value="Continue To Next Step"/></div>
               <div class="button-arrow"></div>
            </div>
         </div>
		 
         <div class="required-fields"><span style="color:red;font-size:20px;">* indicates required field</span></div>
		<br>
      </div>
   </form>
</section></div></div>


<br> <div class= "footer">
        <table class="links" style= "text-align: center; margin: auto;">
        
            
        <tr>
            <th>Pets</th>
            <th>Get Involved </th>
            <th>Shelter/Rescue</th>
            <th>Our Organisation</th>
            <th>Info</th>
		</tr>
		
		<tr>
            <td><a href="RnA.html">Find a Pet</a></td>
            <td><a href="events.html">Volunteer</a></td>
            <td><a href="healthncaredog.html">Dog</a></td>
            <td><a href="aboutus.html">About Us</a></td>
            <td><a href="#">Sitemap</a></td>
		</tr>
		
		<tr>
            <td><a href="RnA.html">New Pet Alerts</a></td>
            <td><a href="#">Donate</a></td>
            <td><a href="cat.html">Cat</a></td>
            <td><a href="#">FAQs</a></td>
            <td><a href="#">Terms &amp; Privacy</a></td>
		</tr>
		
		<tr>
            <td colspan="2"><a href="#">Spay &amp; Neuter</a></td>
			<!--<td>empty</td>
			<td>empty</td> -->
            <td><a href="hare.html">Hare</a></td>
            <td colspan="2"><a href="#">Press Room</a></td>
           <!-- <td>empty</td> -->
		</tr>
            
            
        <tr>
			<td colspan="2"></td>
			<!--<td>empty</td>
			<td>empty</td> -->
            <td><a href= "horse.html">Horse</a></td>
			<td colspan="2"><a href="#">Save-a-Pet Show</a></td>
            <!--<td>empty</td> -->
		</tr>
            
            
            
         <tr>
             <td colspan= "3"><a href="#"></a></td>
			<!--<td>empty</td>
			<td>empty</td> -->
             <td colspan="2"><a href="contactus.html">Contact Us</a></td>
            <!--<td>empty</td> -->
		</tr>
            
            
            
     </table>   
    </div>
    
    <div class= "info">
         
        <p style= "text-align: center; margin: auto;">___________________________________________________________________________________________________________________________________________________________________________________<br /> <br /> 
            Animal Rescue Initiative & Adoption, dba aria.org, is a non-profit, tax-deductible 501(c)(3) adoption advertising charity.<br />

                Our mission (and passion) is to help get homeless pets out of the shelters and into loving homes.
        
        
        </p>
        
    
        
        
    </div>
    
    
   
    
    
        <div class="copyright">
            <p style= "text-align: center; margin: auto;"> Copyright © 2016 | All Rights Reserved | Site Developed by PES students </p> 
        </div>



<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body></html>


_END;

//<input type= "hidden" name= "fname" value= "<?php echo $_POST['first-name'];	
//<input type= "hidden" name= "lname" value= "<?php echo $_POST['last-name'];" />
		 
mysql_close($db_server);
?>