<!DOCTYPE html>
<!--search_results.php-->
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css" />	
	<!-- The Following is a Spacer to Seperate Page Content -->
     <div class="spacer">
    &nbsp;
</div>
	
<!--[Letter Array] The following script creates an array of letters as buttons and sets up a page that corresponds to each button-->
	
<script>
var btns = "";
var letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var letterArray = letters.split("");
		
for(var i = 0; i < 26; i++)
{
	var letter = letterArray.shift();
	btns += '<button class="mybtns" onclick="alphabetSearch(\''+letter+'\');">'+letter+'</button>';
}
		
function alphabetSearch(let)
{
	window.location = "search_results.php?letter="+let;
	window.bgColor="#CCCCCC";
}
</script>
	
<!-- End [Letter Array] Script -->
	
	<center><script> document.write(btns);</script></center> <!--Writes the Array of Buttons A-Z to the Screen -->
    <center><h2>Products Available</h2></center>
    <center> <p>
    
		
		
<!--[MYSQL||SELECTQUERY||VISUAL] The following is a PHP script that creates a Table, then a Mysql connection is made followed by a select statement. Lastly, the select statement displays information that is based on the letter specified by the button you clicked in the button array.-->
		

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>ItemName</th><th>ItemPrice</th><th>ItemDetails</th><th>ItemDescription</th><th>Quantity</th><th>Item Picture</th></tr>";

class TableRows extends RecursiveIteratorIterator 
{ 
	
 function __construct($it) 
 { 
  parent::__construct($it, self::LEAVES_ONLY); 
 }

 function current() 
 {
	 return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
 }
	
 function beginChildren() 
 { 
  echo "<tr>"; 
 } 

 function endChildren() 
 { 
  echo "</tr>" . "\n";
 } 
		
} 
		
//The Following Section Recieves the Letter specified from the Button Selection on the Browse.php page nd stores that letter in a variable called $letter.
		
$results = "";
$letter = "";
if(isset($_GET['letter']) && strlen($_GET['letter']) == 1) 

	$letter = preg_replace('#[^a-z]#i', '', $_GET['letter']);
		
		
//Create a Database Connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LockMaster";
try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  $stmt = $conn->prepare("SELECT * FROM Products WHERE ProductName LIKE '$letter%'"); //Select Query 
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);  // set the resulting array to associative
	
   foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
  { 
	  	  $iters++; //Create a Variable to count the interations of the foreach loop
	  
	  
		  if ($iters == 2) 			//Item Name
		  {
			 echo $v;
		  }
		  else if ($iters == 3) 	//Item Price
		  {
			 echo $v;
		  }
		  else if ($iters == 4) 	//Item Details
		  {
			 echo $v;
		  }
		  else if ($iters == 5)     //Item Description
		  {
			 echo $v;
		  }
		  else if ($iters == 6)     //Item Quantity
		  {
			 echo $v;
		  }  
		  else if ($iters == 11)    //Item Image
		  {
			  echo $v;
		  }
		  else if ($iters == 12)    //Paypal Button
				   {
					  echo $v;
			  		$iters=0;
				   }
 
  } //End of For Each Statement
	
}//End of Try Block
		
  catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage(); //Error Statement
} //End of Catch Block
		
  $conn = null; //Close the Mysql Connection.
  echo "</table>";
?>
      
</p></center>
<!-- End [MYSQL||SELECTQUERY||VISUAL]--> 	
</head>
	
<!--The Following Section is the Navigation Bar -->
<body bgcolor="#d2b48c">	
<div id="navigation">	
<a class="nav-bar-brand" href="Home.php" ><img id ="logo" src="http://i65.tinypic.com/xag7t.png">Lock Master</a>
<a href="Home.php">Home</a>
<a href="Browse.php">Browse</a>
<a href="About.php">About Us</a>
<a href="Login.php">Login</a>  
<a href="Registration.php">Register</a>
	<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<!--End Navigation Bar-->

<!--The Following Section is a Spacer to seperate page content -->

<div class="spacer">
&nbsp;
</div>
	
</body>
</html>