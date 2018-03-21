<?php

//


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



$fn = $_POST['fname'];

$ln = $_POST['lname'];

$amt = $_POST['amount'];

$eid = $_POST['email'];

$phno = $_POST['num'];
//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "INSERT INTO donation(f_name,l_name,amt,eid,phno) VALUES('$fn','$ln','$amt','$eid','$phno')";

if (!mysql_query($query, $db_server))

echo "INSERT failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END

<!DOCTYPE HTML>
<html>
<head>
<title>Thankyou!</title>
<meta charset="UTF-8">
<link rel="icon" href="Img\paw.jpg"/>
<link rel="stylesheet" type="text/css" href="hdng.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="footer.css">

<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme|Cabin|Chewy|Coiny|Sansita+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
<!--<img class="Banner" src="Banner.png">
--><div class = "fix" ></div>


<ul class="navbar"> 
	<li><a href="AdoptApal.html">Home</a></li>
	<!--<li><a href="">Animals</a></li>-->
	<li><a href="RnA.html" >Rescue and Adoption (RnA)</a></li>
	<li><a href="healthncaredog.html">Health &amp Care</a></li>
	<li><a href="faqs.html">FAQs</a></li>
	<li><a href="DonatePage.html" class="selected">Donate</a></li>
	<li><a href="events.html">Volunteer</a></li>
	<li><a href="aboutus.html">About Us</a></li>
	<li><a href="contactus.html">Contact Us</a></li>
</ul>

<div class="ban">

<img src="AdoptPageBanner.jpg" alt="Image"  class="adoptbanner">

<h2 class="words" style="z-index:1;">Donate</h2>

</div>

<div class="fonts dondiv">
<div class="inside">

<h1 align="center">Thankyou for Donating!</h1>
To view your donation details:
<form action="view.php" method="post">
<label>Enter Your First Name<span style="color:red;">*</span></label><input id="name" class="input" name="dname" type="text" value="" size="30" placeholder=" First Name" required="required"/><br><br>
<label>Enter Your Last Name<span style="color:red;">*</span></label><input id="name" class="input" name="dlname" type="text" value="" size="30" placeholder=" Last Name" required="required"/><br><br>
<input id="submit" type="submit" value="View Details" />

</form>
</div>
</div>
 <div class= "footer">
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
    
    
</body>
</html>
_END;


//echo "<h1>Congratulations!</h1>You have successfully registered for an event. An email will be sent to you shortly, giving you the details about the event. Keep in touch!";


//echo "Connected successfully";
mysql_close($db_server);
?>





