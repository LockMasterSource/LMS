<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css"/>
	
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LockMaster";
    
try 
{

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$value1 = $_POST['input1'];
	$value2 = $_POST['input2'];
	$value3 = $_POST['input3'];
	$value4 = $_POST['input4'];
	$value5 = $_POST['input5'];

	
    // prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO Customer (firstname, lastname, email, username, password) 
        VALUES (:firstname, :lastname, :email, :username, :password)");
$stmt->bindParam(':firstname', $value1);
$stmt->bindParam(':lastname', $value2);
$stmt->bindParam(':email', $value3);
$stmt->bindParam(':username', $value4);
$stmt->bindParam(':password', $value5);

$stmt->execute();

    echo "New records created successfully";
}
    catch(PDOException $e)
	{
  	  echo "Error: " . $e->getMessage();
    }

$conn = null;

?>

</head>

<body bgcolor="#d2b48c">	
	
<div class="spacer">									
&nbsp;
</div>

</body>
</html>