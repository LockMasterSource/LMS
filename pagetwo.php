<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>

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
	  }//end of if
  }//end of while
}//end of function

function Loc_additem(code,price,desc,url)
{
 self.parent.additem(code,price,desc,url);
 write_to_field(code)
}//end of function

function Loc_subitem(code,price,desc)
{
self.parent.subitem(code,price,desc);
write_to_field(code)
}//end of function

	
function update_thiselem_page()
{
	if (self!=parent)
		{
		  parent.update_this_page()
		}//end of if
}//end of function

<!-- End -->
</script>

</head>

	
<body bgcolor="#d2b48c" alink="#FF0000" onload=update_thiselem_page()>
<form name=form1>

<!-- The script below is activated when this page is displayed outside of the frame model -->

<script language=javascript>
<!-- hide

if (self==parent)
{
	document.write('<center><font color=#ff000><b>THIS IS A FRAME ELEMENT : GO TO  <a href=shopcartindex.php>Start Page</a> TO LOAD MAIN PAGE</b></font><BR></center>')
};
<!-- end hide -->
</script>

<!-- Below are the links to the other pages -->

<center>
[ <a href="javascript:parent.updatemain_order()">Review Updated Order Form</a> ] 
</center>


<P><HR Width="60%"></HR></P>

<!-- Below are the shopping cart order items -->
<!-- If you haven't already looked, full instructions on -->
<!-- converting these so you can use them are located in the tutorial and on -->
<!-- pageone.htm -->
	
<!-- This is named p2i1.  That stands for Page Two, Item One -->

	<P>This Item Costs $2.22</P>		
	
<input name=addbox type=button value="Add This Item To My Order" onclick=Loc_additem('p2i1','2.22','Page_2_Item_1','pagetwo.php')>
	
<br>
	
<input type=button name=subbox value="Subtract This Item From My Order" onclick=Loc_subitem('p2i1','2.22','Page_2_Item_1','pagetwo.php')>
	
<br>
	
You Have Ordered This Many: <input type=text name=p2i1 size=2>

	<P><HR Width="60%"></HR></P>

<!-- This is named p2i2.  That stands for Page Two, Item Two -->

	<P>This Item Costs $3.33</P>
	
<input name=addbox type=button value="Add This Item To My Order" onclick=Loc_additem('p2i2','3.33','Page_2_Item_2','pagetwo.php')>
	
<br>
	
<input type=button name=subbox value="Subtract This Item From My Order" onclick=Loc_subitem('p2i2','3.33','Page_2_Item_2','pagetwo.php')>
	
<br>
	
You Have Ordered This Many: <input type=text name=p2i2 size=2>

	
<P><HR Width="60%"></HR></P>

	
<!-- This is named p2i3.  That stands for Page Two, Item Three -->

	
	<P>This Item Costs $4.44</P>	
	
<input name=addbox type=button value="Add This Item To My Order" onclick=Loc_additem('p2i3','4.44','Page_2_Item_3','pagetwo.php')>

<br>
	
<input type=button name=subbox value="Subtract This Item From My Order" onclick=Loc_subitem('p2i3','4.44','Page_2_Item_3','pagetwo.php')>
	
<br>
	
	
You Have Ordered This Many:<input type=text name=p2i3 size=2>

	
	<P><HR Width="60%"></HR></P>


<!-- Below are the links back to other pages pages -->


<center>
[ <a href="javascript:parent.updatemain_order()">Review updated Order Form</a> ] 

<br>
</center>   
	
</form>
	
</body>
</html>
