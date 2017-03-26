<?php
session_start();
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

		$fname = $_POST["fName"];
		$lname = $_POST["lName"];
		$address= $_POST["address"];
		$postcode= $_POST["postcode"];
		$telNo= $_POST["telNo"];
        $email = $_POST['email'];
		$password= $_POST["password"];
		$confirmPassword= $_POST["confirmPassword"];

		
			$sql = "INSERT INTO users (userId,userType,userFName.userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword) VALUES(NULL ,NULL,'$fname','$lname','$address','$postcode','$telNo','$email','$password')";
			$exeSQL = mysql_query($sql) or $err = mysql_errno();






//include head layout
include("footfile.html");
?>
