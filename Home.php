<!DOCTYPE html>
<html>
<head>
	
<link href="main.css" rel="stylesheet" type="text/css" />	
	
</head>
	
	
<body bgcolor="#d2b48c">	
<div id="navigation">	
<a class="nav-bar-brand" href="Home.php" ><img id ="logo" src="http://i65.tinypic.com/xag7t.png">Lock Master</a>
<a href="Home.php">Home</a>
<a href="Browse.php">Browse</a>
<a href="AdvancedSearch.php">Advanced Search</a>
<a href="About.php">About Us</a>
<a href="shopcartindex.php">Shopping Cart</a>
<a href="Login.php">Login</a>  
<a href="Registration.php">Register</a>
</div>
	
	
<div class="spacer">
&nbsp;
</div>
	
	
<center><img id="banner" src="http://i66.tinypic.com/10igz1s.jpg"></center>
<div class="col-md-6 col-sm-8 col-xs-11 navbar-left">
<div class="navbar-form " role="search">
<center><div class="input-group">	  
<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" style="max-width: 50%; width: 50%;">
<center><p class="signin button"> 
<input type="submit" value="Search"/> 
    
</p> </center> </div> </center> </div> </div>  

	
<div class="spacer">
&nbsp;
</div>
	
	
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>UserName</th><th>Password</th></tr>";

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

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LockMaster";

try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM Customer"); 
  $stmt->execute();

// set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
  { 
   echo $v;
  }
	
}

  catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}

  $conn = null;
  echo "</table>";
?>

</body>
</html>