<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
  
<META NAME="description" CONTENT="">
<META NAME="keywords" CONTENT="">

<script language=javascript>

<!-- hide

function write_to_field(code)
{
 var found = false;
 var i =0;
	
 while ((found == false) && (i < document.form1.elements.length))
  {
	  i = i + 1
   
	  	if (document.form1.elements[i].name == code)
     	{ 
		  found = true;
          document.form1.elements[i].value = parent.item_quan(code);
        } //end if
  } //end while
	
} //end function

	
function Loc_additem(code,price,desc,url)
{
 self.parent.additem(code,price,desc,url);
 write_to_field(code)
} //end function Loc_additem

	
function Loc_subitem(code,price,desc)
{
self.parent.subitem(code,price,desc);
write_to_field(code)
} //end function Loc_subitem
	
<!-- End -->
</script>
	
</META> </META>
	
</head>

<body TEXT="#000000" BGCOLOR="#d2b48c" LINK="#8000FF" VLINK="#FF8000" ALINK="#FF0000" BACKGROUND="images/thisback.gif" onload=parent.update_this_page()>

<form name=form1> <a name="top"></a>


<!-- The script below is activated if this page is not within the frame model -->

	
<script language="javascript">
<!-- hide
if (self==parent)
{
 document.write('<font color=#ff000><b>THIS IS A FRAME ELEMENT : GO TO  <a href=shopcartindex.php>Start Page</a> TO LOAD MAIN PAGE</b></font><BR>')
};
<!-- end hide -->
</script>



<center><FONT COLOR="#0000FF">One Item On This Page</FONT></center>


<!-- Below are the add and subtract buttons and the window showing number ordered -->
<!-- Update it for your needs by changing out the 'p1','1.11','Page_one_order','pageone.htm' section.-->
<!-- All updates must occur for both the add and subtract statement equally -->
<!-- pl is the name of the text window.  If you change that - you must change it in the window also -->
<!-- 1.11 is the price -->
<!-- Page_one_order is the name of the page and section where the order came from -->
<!-- pageone.htm is the name of this page -->

<!-- This is the only page that has these instructions -->
<!-- All other pages with shopping cart items work the same way -->


<center>
<P><input name=addbox type=button value="Add This Item To My Total" onclick=Loc_additem('p1i1','1.11','Page_1_item_1','pageone.php')></P>
	
<br>

<P><input type=button name=subbox value="Subtract This Item From My Total" onclick=Loc_subitem('p1i1','1.11','page_1_item_1','pageone.php')></P>

<br>
	
<P>You Have Ordered This Many Of This Item:<input type=text name=p1i1 size=2></P>
</center>



<!-- These are the links at the bottom of the page -->


<center>
[ <a href="javascript:parent.updatemain_order()">Review Updated Order Form</a> ]  <br>
</center>
</form>
</body>
</html>
