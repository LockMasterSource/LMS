<!DOCTYPE html>
<!--reg_success.php-->
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css"/>

<!-- The following php script takes the values passed from the Registration.php form and binds them to fields in the Customer Table within the Database-->
<?php
//Create a Connection to the Database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "LockMaster";
    
try 
{

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Retrieving The Form Values from the registration page and storing them in variables value 1-5
	$value1 = $_POST['input1'];
	$value2 = $_POST['input2'];
	$value3 = $_POST['input3'];
	$value4 = $_POST['input4'];
	$value5 = $_POST['input5'];

	
    // prepare sql query, bind parameters, and execute the transfer of information from the website to the database.
$stmt = $conn->prepare("INSERT INTO Customer (firstname, lastname, email, username, password) 
        VALUES (:firstname, :lastname, :email, :username, :password)");
$stmt->bindParam(':firstname', $value1);
$stmt->bindParam(':lastname', $value2);
$stmt->bindParam(':email', $value3);
$stmt->bindParam(':username', $value4);
$stmt->bindParam(':password', $value5);

$stmt->execute();

    echo "New records created successfully";
}//End of Try Block
    catch(PDOException $e)
	{
  	  echo "Error: " . $e->getMessage();
    }//End of Catch Block

$conn = null; //Close the Connection to Mysql

?>
<!-- End of Php Script -->
</head>

<body bgcolor="#d2b48c">	
	
<!--Spacer-->
<div class="spacer">									
&nbsp;
</div>

</body>
</html>