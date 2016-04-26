<!DOCTYPE html>
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css" />	
	
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
	

<center><h2>Select a Letter to Browse Products</h2></center>
<center><script> document.write(btns);</script></center>
</body>
</html>