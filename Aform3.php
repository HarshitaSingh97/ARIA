<?php

//echo "Thankyou for making a donation of ₹$amt for these lovelies! You help make this world a better place!";


$servername = "localhost";
$username = "root";
$password = "saveAlife";
$db_database = "aria";
// Create connection
$db_server = mysql_connect('localhost', 'root', 'saveAlife','aria'); 

// Check connection
if (!$db_server) {
    die("Connection failed: " . mysqli_connect_error());
}


mysql_select_db('aria', $db_server)

or die("Unable to select database: " . mysql_error());

$fn=$_COOKIE['fn'];

$ln=$_COOKIE['ln'];

$adopt=$_COOKIE['$adopt'];

$house = $_POST['rent-or-own'];

$type = $_POST['residence-type'];

$time = $_POST['years-lived'];

$fence = $_POST['fenced-yard'];

$f_type = $_POST['fence-type'];

$f_ht = $_POST['fence-height'];
//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "update adopt set RorO='$house',r_type='$type',yrslived='$time',fence='$fence',ftype='$f_type',fheight='$f_ht' where fname='$fn' and lname='$ln'";

if (!mysql_query($query, $db_server))

echo "Update failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END



<!DOCTYPE HTML>
<html>
<head>
<title>adoption step3</title>
<meta charset="UTF-8">
<link rel="icon" href="Img\paw.jpg"/>
<link rel="stylesheet" type="text/css" href="hdng.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="form2.css">
<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
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



<div class="box fonts"><section class="adoption-process-application js-step-3">
   <form class="form-adoption-application" id="form-adoption-application"  action="Aform4.php" method="post">
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
         <h2>Past and Current Pets</h2>
         <h3>Step 3 of 5</h3>
      </div>
      <div class="horizontal-divider"></div>
      <div class="row">
         <div class="alert alert-danger js-fh-error-invalid-fields" style="display: none;"><p>Please fill out all of the required fields to continue the application <span class="intexthighlight" phasehl="km:en" id="faZeR" title="" style="line-height: 21.4286px;">process</span>.</p>
            
            
         </div>
      </div>
      <div class="grid-adoption-application">
         <div class="fieldset-group">
            <fieldset style="line-height:70px;">
               
			   <legend class="legend">Past and Current Pets</legend>

			   
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="owned-pet">Have You Owned a Pet Before?<span style="color:red;">*</span></label><select class="form-control" id="owned-pet" name="owned-pet" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
               </div>
              <br> <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="owned-breeds">What Pet Types/Breeds Have You Owned?</label><textarea class="form-control" id="owned-breeds" name="owned-breeds"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="other-pets">Are There Any Other <span class="intexthighlight" phasehl="combinePhrases:en" id="hLUYt" title="" phase-click="smallbubble:feed" hoverdone="true" style="line-height: 21.4286px; opacity: 1;">Pets In Your Home</span>? <span style="color:red;">*</span></label><select class="form-control" id="other-pets" name="other-pets" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="pets-you-own">List The Other Pets You Own</label><textarea class="form-control" id="pets-you-own" name="pets-you-own" placeholder="Please indicate their name, breed, age, temperament, sex and whether they are spayed/neutered"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="pets-others-own">List Pets That Others May Own (Roommates / Parents / etc...)</label><textarea class="form-control" id="pets-others-own" name="pets-others-own" placeholder="Please indicate their name breed, age, temperament, sex and whether they are spayed/neutered"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="test-heartworm">Have Your Current Animals Been Tested For Heartworm?<span style="color:red;">*</span></label><select class="form-control" id="test-heartworm" name="test-heartworm" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="taking-heartworm-preventative">Are Your Current Animals Takeing Heartworm Preventative?<span style="color:red;">*</span></label><select class="form-control" id="taking-heartworm-preventative" name="taking-heartworm-preventative" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="other-pet-characteristics">List Any Abnormal Characteristics About Current Pets That A.R.I.A. Should Know</label><textarea class="form-control" id="other-pet-characteristics" name="other-pet-characteristics"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span3">
                     <div class="form-group"><label class="control-label control-label-required" for="put-animal-to-sleep">Have You Ever Had To Put an Animal to Sleep?<span style="color:red;">*</span></label><select class="form-control" id="put-animal-to-sleep" name="put-animal-to-sleep" required="required">
                           <option value="">Choose</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option></select></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="reasons-put-animal-to-sleep">What Reasons Were The Animal(s) Put Down For?</label><textarea class="form-control" id="reasons-put-animal-to-sleep" name="reasons-put-animal-to-sleep"></textarea></div>
                  </div>
               </div>
            </fieldset>
         </div>
         <div class="horizontal-divider"></div>
         <div class="continue-application-wrapper">
            <div class="button-row row">
               <div class="button-text"><input type="submit" style="color:white;background-color:orangered;padding:20px;cursor:pointer;font-size:25px;margin-top:10px;" value="Continue To Next Step"/></div>
               <div class="button-arrow"></div>
            </div>
         </div>
         <br><div class="required-fields"><span style="color:red;font-size:20px;">* indicates required field</span></div>
         
      </div>
   </form>
</section></div>
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
</body>

</html>

_END;

mysql_close($db_server);
?>