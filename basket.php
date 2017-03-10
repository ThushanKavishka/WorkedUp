<?php
session_start();
//include a db.php file to connect to database
include ("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="My Basket";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");


echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

if(isset($_POST['quantityDropDown'])){
@$newprodid = $_POST['h_prodid'];
@$reququantity = $_POST['quantityDropDown'];
$_SESSION['basket'][$newprodid] = $reququantity;

  echo "<p> Your product has been added successfully </p>";
}



echo "<table border=1>
<tr>
	<th>Product Name</th> 
	<th>Price</th>
	<th>Quantity</th>
	<th>SubTotal</th>
</tr>";

$total = 0;
if(isset($_SESSION['basket'])){

	foreach($_SESSION['basket'] as $key => $value){
		
		        if (!$key == 0) {
	
		$SQL="select * from product where prodId='".$key."';";

		$exeSQL=mysql_query($SQL) or die(mysql_error());

		$thearrayprod=mysql_fetch_array($exeSQL);	

		echo "<tr>";
		echo "<td>".$thearrayprod['prodName']."</td>";
		echo "<td>".$thearrayprod['prodPrice']."</td>";
		echo "<td>".$value. "</td>";
		echo "<td> $".$thearrayprod['prodPrice']*$value."</td>";
		echo "</tr>";
		
		$total += $value * $thearrayprod['prodPrice'];
				}
	}
}

echo "<tr>
          <td colspan='3'>Total: </td>
          <td>**$total.00**</td>
      </tr>
      </table>";

echo "<p><a href='clearbasket.php'>Clear Basket</a></p><br>";
echo "<p>New Workedup Customers <a href='register.php'>REGISTER</a></p>";
echo "<p>Registered Workedup Members <a href='login.php'>LOGIN</a></p>";


//include head layout
include("footfile.html");
?>
