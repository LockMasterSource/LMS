<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>

<head>
	
<title>Thank You For your Order</title>
	
</head>
	
<script language=Javascript>
<!-- hide

function go_with_cookie()
{
 parent.setCookieArray('gifttails',
 parent.ship_details.f_namea,
 parent.ship_details.l_namea,
 parent.ship_details.email,
 parent.ship_details.ad_onea,
 parent.ship_details.ad_twoa,
 parent.ship_details.citya,
 parent.ship_details.statea,
 parent.ship_details.countrya,
 parent.ship_details.zipa);
}//end function go_with_cookie

	
function format(val, post)
{
    var decpoint;
    var begin;
    var end;
    var valstr;
	var temp_char;

    valstr = "" + val;
	decpoint = valstr.indexOf(".")
    
	if (decpoint != -1) 
	       {
	    	begin = valstr.substring(0,decpoint);
			end = valstr.substring(decpoint+1,valstr.length);
		    } //end of if (decpoint != -1)
			  else 
			  {
				begin = valstr;
        		end = "";
			  }  //end of else
	
	if (end.length < post)
	 {
		 while (end.length < post)
	      {
           end += "0";
          } //end of while (end.length < post)
	 }   //end of if (end.length < post)
	
	end = end.substring(0,post);
	return (begin+"."+end);
}//end function format


<!-- end hide -->
	
</script>

<body background="images/thisback.gif" bgcolor="d2b48cF" text="#000000" link="#8000FF" vlink="#FF8000" alink="#FF0000">
	
<form name=form1>
	
<p><a name="top"></a></p>

<div align="center">
	
<script language="javascript">

<!-- hide

if (self==parent)
{
	document.write('<font color=#ff000><b>THIS IS A FRAME ELEMENT : GO TO  <a href=shopcartindex.htm>Start Page</a> TO LOAD MAIN PAGE</b></font><BR>')
}; //end of (self==parent)

<!-- end hide -->

</script>

<center>

<table border="0" cellpadding="0" width="100%">
<tr>
	
<td colspan="2"><p align="center"><font size="5"><b>:</b></font><font color="#0000FF" size="5">
<b>Thank You</b> </font> </p> </td>
	
</tr>
	
	
<tr>
        
<td align="center" colspan="2"><b><i>We should like to thank you for you order or enquiry and please be assured it will be dealt with promptly.</i></b></td>

</tr>

	
</table> </center>
	
<p align="center">

<br>

<script language="javascript">

<!-- hide

if (self==parent)
{
 document.write('<font color=#ff000><b> <a href=shopcartindex.htm>Start Page</a></b></font>')
}// end of if (self==parent)
	
	else
	{
		if (parent.all_order_totals() > 0)
		{
			var index = 0;
			document.write('Items Ordered');
			for (i =1;i < parent.item_num;i++)
   			{
	
   				if (parent.itemlist[i].quan > 0)
     			{
					index = index + 1;
	 				
					if (i == 1)
					{
						document.write('<table border=1><td>Item<br>Code</td><td>Item<br> Price</td><td>Item Description</td><td >Quantity Ordered</td><tr>');
					} //end of if (i == 1)
					
document.write('<td>' + parent.itemlist[i].code + '</td><td>' + parent.itemlist[i].price + '</td><td>   ' +  parent.itemlist[i].desc + '  </td><td align=center> ' +  parent.itemlist[i].quan + '</td><tr>');

     			}//end of if (parent.itemlist[i].quan > 0) 
			}//end of for(i = 1;i <parent.item_num;i++)
			
   
   
   document.write('</table>');
   document.write('Your Total order Value was : $' + format(parent.all_order_totals(),2));   
   document.write('<p>If you would like to maintain your order address details (Not your credit card Details), for future visits to this site please do so <a href="javascript:go_with_cookie()" >here.</a>');
  
		} //end of if (parent.all_order_totals() > 0)
		
	} //end of else



<!-- end hide -->
</script>

<br> 

</p> </div> </form>
	
</body>
</html>
