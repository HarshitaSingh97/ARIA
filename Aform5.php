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

$agenname = $_POST['living-with-rescue-animal'];

$anyonethere = $_POST['home-during-day'];

$alone =$_POST['length-alone'];

$day = $_POST['kept-during-day'];

$night = $_POST['kept-during-night'];

$caretake = $_POST['primary-caretaker'];

$away = $_POST['vacation-plans'];

$crate = $_POST['crate-train'];

$bite = $_POST['bite-description'];

$giveup = $_POST['give-up-reasons'];

$excercise = $_POST['exercise-plan'];

$obedience = $_POST['pet-obedience'];

$htrain = $_POST['pet-house-training'];
//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "update adopt set age_name='$agenname',anyonethere='$anyonethere',alonetime='$alone',dayplace='$day',nightplace='$night',caretaker='$caretake',duringvacation='$away',crate='$crate',onbite='$bite',giveup='$giveup',exercise='$excercise',obey='$obedience',housetrain='$htrain' where fname='$fn' and lname='$ln' ";

if (!mysql_query($query, $db_server))

echo "update failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END


<!DOCTYPE HTML>
<html>
<head>
<title>adoption step5</title>
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


<div class="fonts box">

<div class="forms"><section class="adoption-process-application js-step-5">
   <form class="form-adoption-application" id="form-adoption-application" action="thnks.php" method="post">
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
         <h2>Acceptance of Terms</h2>
         <h3>Step 5 of 5</h3>
      </div>
      <div class="horizontal-divider"></div>
      <div class="row">
         <div class="alert alert-danger js-fh-error-invalid-fields" style="display: none;"><p>Please fill out all of the required fields to continue the application process.</p>
            
            
         </div>
      </div>
      <div class="grid-adoption-application">
         <div class="fieldset-group">
            <fieldset  style="line-height:70px;">
               <legend class="legend">References</legend>
               <div class="reference-notes">
                  <div class="note">Please provide the names, addresses and phone numbers for two people who are not relatives
                     and do not reside in your household.
                  </div>
                  <div class="note highlight">Please also notify the references mentioned below that we will be contacting them.</div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label control-label-required" for="reference-one">Reference #1<span style="color:red;">*</span></label><textarea class="form-control" id="reference-one" name="reference-one" required="required" placeholder="Name / Address / Phone Number"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label control-label-required" for="reference-two">Reference #2<span style="color:red;">*</span></label><textarea class="form-control" id="reference-two" name="reference-two" required="required" placeholder="Name / Address / Phone Number"></textarea></div>
                  </div>
               </div>
            </fieldset>
         </div>
         <div class="horizontal-divider"></div>
         <div class="fieldset-group">
            <fieldset  style="line-height:70px;">
               <legend class="legend">Acceptance of Terms</legend>
               <div class="terms-checkboxes">
                  <div class="row row-xs-collapse checkbox-position">
                     <div class="span8">
                        <div class="form-group
						">
                           <div class="checkbox"><label><input type="checkbox" name="leash-terms" value="accept"><span class="checkbox-label">I fully understand and accept the fact that a pet may sometimes be unpredictable/craving love and great care will be taken to make sure he/she is never left unattended.</span></label></div>
                        </div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse checkbox-position">
                     <div class="span8">
                        <div class="form-group
						">
                           <div class="checkbox"><label><input type="checkbox" name="abuse-terms" value="accept"><span class="checkbox-label">I affirm that I nor any household member have ever been arrested for, or convicted,
                                    of animal abuse or neglect.</span></label></div>
                        </div>
                     </div>
                  </div>
                  <div class="row row-xs-collapse checkbox-position">
                     <div class="span8">
                        <div class="form-group
						">
                           <div class="checkbox"><label><input type="checkbox" name="visit-terms" value="accept"><span class="checkbox-label">I agree to and am willing to have a representative from A.R.I.A. visit my home by appointment.</span></label></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label control-label-required" for="hear-about-us">How Did You Hear About A.R.I.A.<span style="color:red;">*</span></label><textarea class="form-control" id="hear-about-us" name="hear-about-us" required="required"></textarea></div>
                  </div>
               </div>
               <div class="row row-xs-collapse">
                  <div class="span8">
                     <div class="form-group"><label class="control-label" for="additional-comments">Additional Comments</label><textarea class="form-control" id="additional-comments" name="additional-comments"></textarea></div>
                  </div>
               </div>
               <div class="reference-notes">
                  <div class="note"><strong>We reserve the right to refuse or deny any application</strong></div>
               </div>
            </fieldset>
         </div>
         <div class="horizontal-divider"></div>
         <div class="review-application-wrapper">
            <div class="button-row row">
               <div class="button-text"><input type="submit" style="color:white;background-color:orangered;padding:20px;cursor:pointer;font-size:25px;margin-top:10px;" value="Submit Application"/></div>
               <div class="button-arrow"></div>
            </div>
         </div>
         <div class="required-fields"><span style="color:red;font-size:20px;">* indicates required field</span></div>

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

mysql_close($db_server);
?>