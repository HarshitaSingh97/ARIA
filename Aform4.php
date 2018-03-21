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

$adopt=$_COOKIE['adopt'];

$own = $_POST['owned-pet'];

$tested = $_POST['test-heartworm'];

$prevent = $_POST['taking-heartworm-preventative'];

$sleep = $_POST['put-animal-to-sleep'];



//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "update adopt set pet='$adopt', owner='$own', test='$tested', prevent='$prevent', sleep= '$sleep' where fname='$fn' and lname='$ln' ";

if (!mysql_query($query, $db_server))

echo "Update failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END

<!DOCTYPE HTML>
<html>
<head>
<title>adoption step4</title>
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



<div class="box fonts"><section class="adoption-process-application js-step-4">
   <form class="form-adoption-application" id="form-adoption-application"  action="Aform5.php" method="post">
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
         <h2>Your Rescue Animal</h2>
         <h3>Step 4 of 5</h3>
      </div>
      <div class="horizontal-divider"></div>
      <div class="row">
         <div class="alert alert-danger js-fh-error-invalid-fields" style="display: none;"><p>Please fill out all of the required fields to continue the application process.</p>
            
            
         </div>
      </div>
      <div class="grid-adoption-application">
         <div class="js-general">
            <div class="horizontal-divider"></div>
            <div class="fieldset-group">
               <fieldset style="line-height:70px;">
                  <legend class="legend">About The Environment at Home</legend>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label control-label-required" for="living-with-rescue-animal">Please Indicate the Names/Ages of Who Will Be Living with This Rescue Animal<span style="color:red;">*</span></label><textarea class="form-control" id="living-with-rescue-animal" name="living-with-rescue-animal" required="required"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span3">
                        <div class="form-group"><label class="control-label control-label-required" for="home-during-day">Is Someone Normally <span class="intexthighlight" phasehl="combinePhrases:en" id="jngEg" title="" style="line-height: 21.4286px;">Home During</span> The Day?<span style="color:red;">*</span></label><select class="form-control" id="home-during-day" name="home-during-day" required="required">
                              <option value="">Choose</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option></select></div>
                     </div>
                     <div class="span3">
                        <div class="form-group"><label class="control-label control-label-required" for="length-alone">How Long Will The Animal Normally Be Alone?<span style="color:red;">*</span></label><select class="form-control" id="length-alone" name="length-alone" required="required">
                              <option value="">Choose</option>
                              <option value="1 hour">1 hour</option>
                              <option value="2 hours">2 hours</option>
                              <option value="3 hours">3 hours</option>
                              <option value="4 hours">4 hours</option>
                              <option value="5 hours">5 hours</option>
                              <option value="6 hours">6 hours</option>
                              <option value="7 hours">7 hours</option>
                              <option value="8 hours">8 hours</option>
                              <option value="9 hours">9 hours</option>
                              <option value="10 hours">10 hours</option>
                              <option value="11 hours">11 hours</option>
                              <option value="12+ hours">12+ hours</option></select></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span6">
                        <div class="form-group"><label class="control-label control-label-required" for="kept-during-day">Where Will He/She Be Kept During The Day?<span style="color:red;">*</span></label><input type="text" class="form-control" id="kept-during-day" name="kept-during-day" required="required"></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span6">
                        <div class="form-group"><label class="control-label control-label-required" for="kept-during-night">Where Will He/She Be Kept During The Night?<span style="color:red;">*</span></label><input type="text" class="form-control" id="kept-during-night" name="kept-during-night" required="required"></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span6">
                        <div class="form-group"><label class="control-label control-label-required" for="primary-caretaker">Who Will Be The Primary Caretaker?<span style="color:red;">*</span></label><input type="text" class="form-control" id="primary-caretaker" name="primary-caretaker" required="required"></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label control-label-required" for="vacation-plans">Please Describe Plans For Care of Your Animal While Away (<span class="intexthighlight" phasehl="km:en" id="XrGqU" title="" style="line-height: 21.4286px;">Vacation</span>)<span style="color:red;">*</span></label><textarea class="form-control" id="vacation-plans" name="vacation-plans" required="required"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span3">
                        <div class="form-group"><label class="control-label control-label-required" for="crate-train">Are You Willing to Crate Train Your Animal?<span style="color:red;">*</span></label><select class="form-control" id="crate-train" name="crate-train" required="required">
                              <option value="">Choose</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option></select></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label" for="reasons-against-crate-training">If <span class="intexthighlight" phasehl="combinePhrases:en" id="cUTZV" title="" style="line-height: 21.4286px;">You Are Against Crate Training</span>, Please Explain Why</label><textarea class="form-control" id="reasons-against-crate-training" name="reasons-against-crate-training"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label control-label-required" for="bite-description">What Would You Do If Your Rescue Animal Bit Someone?<span style="color:red;">*</span></label><textarea class="form-control" id="bite-description" name="bite-description" required="required"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label control-label-required" for="give-up-reasons">For What Reasons Would You Give Up an Animal to a Shelter or Rescue?<span style="color:red;">*</span></label><textarea class="form-control" id="give-up-reasons" name="give-up-reasons" required="required"></textarea></div>
                     </div>
                  </div>
               </fieldset>
            </div>
            <div class="horizontal-divider"></div>
            <div class="fieldset-group">
               <fieldset style="line-height:70px;">
                  <legend class="legend">Exercise And Training</legend>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label control-label-required" for="exercise-plan">Describe Your Exercise Plan For Your Rescue Animal<span style="color:red;">*</span></label><textarea class="form-control" id="exercise-plan" name="exercise-plan" required="required"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span3">
                        <div class="form-group"><label class="control-label control-label-required" for="pet-obedience">Are You Willing To Take Your Dog To a Basic Obedience Class, If Necessary?<span style="color:red;">*</span></label><select class="form-control" id="pet-obedience" name="pet-obedience" required="required">
                              <option value="">Choose</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option></select></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label" for="reasons-against-obedience-training">If <span class="intexthighlight" phasehl="combinePhrases:en" id="loHBz" title="" style="line-height: 21.4286px;">You Are Against Obedience Training</span>, Please Explain Why</label><textarea class="form-control" id="reasons-against-obedience-training" name="reasons-against-obedience-training"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span3">
                        <div class="form-group"><label class="control-label control-label-required" for="pet-house-training">Do You Have Time To <span class="intexthighlight" phasehl="combinePhrases:en" id="gyOcf" title="" style="line-height: 21.4286px;">House Train Your Dog</span>, If Necessary?<span style="color:red;">*</span></label><select class="form-control" id="pet-house-training" name="pet-house-training" required="required">
                              <option value="">Choose</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option></select></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse">
                     <div class="span8">
                        <div class="form-group"><label class="control-label" for="house-training-method">If You Agree To House Training, Please Describe Your Training Method</label><textarea class="form-control" id="house-training-method" name="house-training-method"></textarea></div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse checkbox-position">
                  <div class="row row-xs-collapse checkbox-position">
                     <div class="span8">
                        <div class="form-group
						">
                           <div class="checkbox"><label><input type="checkbox" name="pet-maintenance" value="accept"><span class="checkbox-label">I am aware of the yearly maintenance cost of a pet.</span></label></div>
                        </div>
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
            <div class="required-fields"><span style="color:red;font-size:20px;">* indicates required field</span></div>
            
         </div>
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



</body></html>

_END;

mysql_close($db_server);
?>