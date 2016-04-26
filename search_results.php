<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css" />	

<?php
$results = "";
$letter = "";
if(isset($_GET['letter']) && strlen($_GET['letter;']) == 1)
{
	$letter = preg_replace('#[^a-z]#i', '', $_GET['letter']);
	
	
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LockMaster";
try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM Products"); 
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


	//Connect to DB
	//Select * FROM movies WHERE title LIKE '%$letter'
	//Use a while loop to append database results into the $results variable ($results .=)
	//Close your database connection here after your while loop closes
	//$results = "PHP recognizes the dynamic ".$letter." and can search MySQL using it";
}
?>

<?php echo $results; ?>
	
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
	
</body>
</html>