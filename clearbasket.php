<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Basket";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
//start the session
session_start();

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

unset($_SESSION['basket']);

$_SESSION['basket'][0] = 0;

echo "<p>Ordering basket is clear now!</p>";

//include head layout
include("footfile.html");
?>
