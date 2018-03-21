<?php // sqltest.php
$servername = "localhost";
$username = "root";
$password = "saveAlife";
$db_database = "ARIA"
// Create connection
//$db_server = mysql_connect($servername, $username, $password);
mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database, $db_server)

or die("Unable to select database: " . mysql_error());
/*
if (isset($_POST['delete']) && isset($_POST['isbn']))

{

$isbn = get_post('isbn');

$query = "DELETE FROM classics WHERE isbn='$isbn'";

if (!mysql_query($query, $db_server))

echo "DELETE failed: $query<br>" .

mysql_error() . "<br><br>";

}*/

if (isset($_POST['First Name']) &&

isset($_POST['Last Name']) &&

isset($_POST['Event']) &&

isset($_POST['Email id']) &&

isset($_POST['Phone Number']))

{

$fname = get_post('First Name');

$lname = get_post('Last Name');

$event = get_post('Event');

$eid = get_post('Email id');

$phno = get_post('Phone Number');

$query = "INSERT INTO register VALUES" .

"('$fname', '$lname', '$event', '$eid', '$phno')";

if (!mysql_query($query, $db_server))

echo "INSERT failed: $query<br>" .

mysql_error() . "<br><br>";

}

echo <<<_END

<p style="margin-left:30px;margin-right:30px;">Hiya!! Thankyou for taking some time off for these lovelies! We would love to have you at our events and it is going to be a BLAST! Your wittle pet is gonna love it! <br>But, before you're all set and done, there is one tiny little step.<br>We have requests and registrations pouring in from all parts of the country but sadly we have limited seats. So hurry up! Go ahead and register as soon as you can so that we can make preparations for your arrival!<br><br>Hoping to see you there!</p>
<form action= "" method= "post" style="margin-top:30px;">
    <label>    
    First Name:<span style="color:red;">*</span></label>	<input type="text" size="30" name="First Name" placeholder=" First" required="required"/><br>
    <br><br><br>
    <label>    
    Last Name:<span style="color:red;">*</span></label>	<input type="text" size="30" name="Last Name" placeholder=" Last" required="required"/><br>
    <br><br><br>
	<label>Event:<span style="color:red;">*</span></label><select class="event" id="event" name="Event" style="font-size:16px;"required="required">
                           <option value="">Select</option>
                           <option value="Seminar">Seminar</option>
                           <option value="meentngreet">Meet and Greet</option>
                           <option value="dogE">All-dogs event</option>
                           <option value="catE">All-cats event</option></select><br><br><br><br>
	<label>E-mail id:<span style="color:red;">*</span> format(forexample@domain.com)</label>	<input type="email" name="Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  size="30" placeholder=" Enter Email Id" required="required"/><br>
    <br><br><br><br>
    <label>Phone Number:<span style="color:red;">*</span> format(xxx-xxx-xxxx)</label>	<input type="tel" maxlength="10" name="Phone Number" pattern="[0-9]{10}" size="30" placeholder=" Enter Ph No." required="required"/><br>
    <br><br><br><span style="color:red;float:left;font-size:15px;">* indicates required field</span>
    <input type="submit"  name="signup" value="Register"/></form>

_END;

$query = "SELECT * FROM register";
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)

{

$row = mysql_fetch_row($result);}
/*
echo <<<_END

<pre>

Author $row[0]

Title $row[1]

Category $row[2]

Year $row[3]

ISBN $row[4]

</pre>

<form action="sqltest.php" method="post">

<input type="hidden" name="delete" value="yes">

<input type="hidden" name="isbn" value="$row[4]">

<input type="submit" value="DELETE RECORD"></form>

_END;

}
*/
//mysql_close($db_server);

function get_post($var)

{

return mysql_real_escape_string($_POST[$var]);

}

?>