<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
//select the database and connection
mysql_select_db('workedup', $conn);
?>	
