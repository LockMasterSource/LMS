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

	
<center><h1>Lock Master Login</h1></center>
<center><p>Enter your Username and Password to Login.</p></center>
	
	
	
<form  action="Login.php" autocomplete="on">
<center>	
Username: <input type="text" name="username" value="<?php echo $username;?>">
	
<br><br>
	
Password: <input type="text" name="password" value="<?php echo $password;?>">
</center>

<br>
	
</form>

<script>
	
var btns = "";
var name = "Login";
	
	
btns += '<button class="mybtns" onclick="Login(\''+name+'\');">'+name+'</button>';
			
function Login()
{
	window.location = "reg_success.php?";
	
}
</script>
	
<center>

<script> 
document.write(btns);
</script>
	
</center>

 

</body>
</html>