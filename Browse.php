<!DOCTYPE html>
<!--Browse.php-->
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css" />	
	
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
	
	<!--[End of Letter Array Script]-->
</head>
	
	<!--Navigation Bar -->
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

	<!--End of Navigation Bar -->
	
	<!--Spacer-->
<div class="spacer">
&nbsp;
</div>
	

<center><h2>Select a Letter to Browse Products</h2></center>
<center><script> document.write(btns);</script></center>  <!--write buttons A-Z to the screen
-->
</body>
</html>