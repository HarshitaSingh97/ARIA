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

$ref1 = $_POST['reference-one'];

$ref2 = $_POST['reference-two'];

$aboutaria = $_POST['hear-about-us'];
//static $date;
//echo $_POST['First_Name'];
//
	//if($_POST['Event']=='Seminar') $date="2016-11-16";
//	elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	//elseif($_POST['Event']=='dogE') $date="2016-11-30";
	//elseif($_POST['Event']=='catE') $date="2016-11-19";
	//elseif($_POST['Event']=='meetngreet') $date="2016-11-23";
	
	
$query = "Update adopt set ref1='$ref1',ref2='$ref2',abtus='$aboutaria' where fname='$fn' and lname='$ln'";

if (!mysql_query($query, $db_server))

echo "INSERT failed: $query<br>" .

mysql_error() . "<br><br>";

echo <<<_END

<!DOCTYPE html>
<html>
<head>
<title>Thankyou!</title>
<meta charset="UTF-8">
<link rel="icon" href="Img\paw.jpg"/>
<link rel="stylesheet" type="text/css" href="hdng.css">
<link rel="stylesheet" href="">
</head>
<body>
<!--<img class="Banner" src="Banner.png">
--><div class = "fix" ></div>


<ul class="navbar"> 
	<li><a href="AdoptApal.html">Home</a></li>
	<!--<li><a href="">Animals</a></li>-->
	<li><a href="RnA.html" class="selected">Rescue and Adoption (RnA)</a></li>
	<li><a href="healthncaredog.html">Health &amp Care</a></li>
	<li><a href="faqs.html">FAQs</a></li>
	<li><a href="DonatePage.html">Donate</a></li>
	<li><a href="events.html">Volunteer</a></li>
	<li><a href="aboutus.html">About Us</a></li>
	<li><a href="contactus.html">Contact Us</a></li>
</ul>

<h1 align="center">Thankyou for Time!</h1>
We would like to inform you that we receive two adoption requests per pet every week! Therefore, filling this form does not ensure the completion of the adoption process.<br>
We will get back to you after seeing and verifying all requests. Thankyou for your patience! Happy Day to you!


</body>
</html>


_END;

mysql_close($db_server);
?>