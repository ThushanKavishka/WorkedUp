<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2><br>";

echo "<fieldset><legend>Register & Create a WorkedUp Account</legend><table border=1><form id='register' action='getregister.php' method='post'
accept-charset='UTF-8'><br><tr>
	<td><label for='name'>First Name: </label></td>
	<td><input type='text' name='fName' id='fName' maxlength='50' /></td>
	</tr><tr>
	<td><label for='name'>Last Name: </label></td>
	<td><input type='text' name='lName' id='lName' maxlength='50' /></td>
	</tr><tr>
	<td><label for='name'>Address: </label></td>
	<td><input type='text' name='address' id='address' maxlength='100' /></td>
	</tr><tr>
	<td><label for='name'>Postcode: </label></td>
	<td><input type='text' name='postcode' id='postcode' maxlength='5' /></td>
	</tr><tr>
	<td><label for='name'>TelNo: </label></td>
	<td><input type='text' name='telNo' id='telNo' maxlength='10' /></td>
	</tr><tr>
	<td><label for='email'>Email Address:</label></td>
	<td><input type='text' name='email' id='email' maxlength='50' /></td>
</tr><tr>
	<td><label for='password'>Password:</label></td>
	<td><input type='password' name='password' id='password' maxlength='50' /></td>
	</tr><tr>
	<td><label for='password'>Confirm Password:</label></td>
	<td><input type='password' name='confirmPassword' id='confirmPassword' maxlength='50' /></td>
	</tr><tr>
	<td><input type='submit' name='Register' value='Register' /></td>
	<td><input type='button' name='Clear Form' value='Clear Form' /></td>

</form></table><br></fieldset>";

//include head layout
include("footfile.html");
?>
