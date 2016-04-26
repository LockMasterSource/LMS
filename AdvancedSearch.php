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
		
<form  action="AdvancedSearch.php" autocomplete="off">
<center><h1>Advanced Search Options</h1></center>
	
<center>
Search For Products: <input type="text" name="AdvancedSearch" value="<?php echo $search;?>">
	
<br><br>
</center>

 
</form> 
	
<script>
	
var btns = "";
var name = "Search";
	
	
btns += '<button class="mybtns" onclick="register(\''+name+'\');">'+name+'</button>';
			
function search()
{
	window.location = "adv_success.php?";	
}
</script>
	
<center>

<script> 
document.write(btns);
</script>
	
</center>
</body>
</html>