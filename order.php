<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>

<head>
	
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1">
<meta name="GENERATOR" content="Microsoft FrontPage 2.0">
<title>LockMaster</title>
	
</head>

	
<script language="javascript">

// Alterations and additions by Gordon Smith Mearns@mearns.org.uk

index = 0;
	
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
    }
    	else 
		{
          begin = valstr;
          end = "";
		} 
	
	if (end.length < post)
	 {
		 while (end.length < post)
	     {
          end += "0";
         }
	 }
	      end = end.substring(0,post);
		  return (begin+"."+end);
}

function orderSubmit(type) 
{
    if (type == 'order')
	    
  {
	if (  !  ( (document.order.order_type.checked) ||
                checkRequired() ))
				
		{	
	     alert('first true');
         document.order.form_action.value = type;
         document.order.submit();
         return true;	 
		}
	  		else 
			{
		      alert('first false');
              return false;
			}
   }
   
}

var infowin = null;

function copyToShipping() 
{
    if (document.order.same_flag.checked) 
	{
        document.order.ship_name.value = document.order.name_first.value+' '+document.order.name_last.value;
        document.order.ship_address1.value = document.order.address1.value;
        document.order.ship_address2.value = document.order.address2.value;
        document.order.ship_city.value = document.order.city.value;
        document.order.ship_state.value = document.order.state.value;
        document.order.ship_zip.value = document.order.zip.value;
        document.order.ship_country.value = document.order.country.value;
        document.order.ship_phone.value = document.order.phone.value;
    }
}

function disableSameFlag() 
{
 document.order.same_flag.checked = false;
}



function checkRequired() 
{
    if (!document.order.name_first.value.length ||
            !document.order.name_last.value.length ||
            !document.order.email.value.length ||
            !document.order.address1.value.length ||
            !document.order.city.value.length ||
            !document.order.state.value.length ||
            !document.order.zip.value.length ||
            !document.order.country.value.length ||
            !document.order.ship_name.value.length ||
            !document.order.ship_address1.value.length ||
            !document.order.ship_city.value.length ||
            !document.order.ship_state.value.length ||
            !document.order.ship_zip.value.length ||
            !document.order.ship_country.value.length) 
	{ 
        alert('You have not completed all required fields:\n' +
              'Please complete the Name, Address, City,\n' +
              'County, Post Code, and Country in both the\n' +
              'Customer Info and Shipping Address sections');
        return true;
    }
		else 
		{
          return false;
    	}
}

	
<!-- -->
</script><!-- --><a name="top"></a>

<body background="images/thisback.gif" bgcolor="#d2b48c"
text="#000000" onLoad=parent.refresh_ship_details(parent.ship_details) onUnload=parent.add_ship_details(parent.ship_details)>
<center>
	
	
<script
language="javascript">
<!-- hide

if (self==parent){document.write('<font color=#ff000><b>This is a frame element, click <a href=index.htm> here </a>for correct page</b></font>')};

<!-- end hide -->
</script>

	
<p><font color="#FF0000" size="7"><i>Lock Master Order Form</i><br>
</font></p>
 <br>

<!-- HEY!!!  PUT YOUR EMAIL ADDRESS IN THE LINK BELOW SO THEY CAN WRITE TO YOU -->




<!-- YOU CAN PUT YOUR EMAIL ADDRESS IN THE FORM COMMAND BELOW AND THE -->
<!-- THEN IT WILL BE SENT TO YOU AS A SIMPLE MAILTO GUESTBOOK FORM -->
<!-- IF YOU DO THAT - BE SURE TO ADD THE COMMAND enctype="plain/text" -->
<!-- IN ORDER TO DELINEATE THE MAIL FOR YOU -->
<!-- YOU CAN ALSO USE TE .PL FILE AS A CGI TO HELP WTH THE MAIL.  SEE THE TUTORIAL  -->
<!-- FOR MORE ON HOW THAT IS DONE -->


<form action="MAILTO:youremail@addesss.here.com" method="POST" name="order">
	
<input type="hidden" name="subject" value="Order Forms - NAME OF FORM HERE">
	
<input type="hidden" name="recipient" value="YOUR EMAIL ADDRESS HERE">

<input type="hidden" name="redirect" value="thanku.htm">
	
<input type="hidden" name="retailer" value="NAME OF YOUR BUSINESS HERE">

<input type="hidden" name="form_action" value="order">

	
	
<script language="javascript">
	
	
<!-- hide from Browsers

document.write('<table width=400><td align=center>'); 

document.write('<table width=400 ><tr><tr><td align=right colspan=3 BGCOLOR=#FF9999><font size=+2>Running Total : $ </td><td colspan=3 BGCOLOR=FF9999> <input type=text name=total size=6 value='+ format(parent.all_order_totals(),2) + '></font></td><tr>');

 
document.write('<td colspan=6 align=center><b>This is your Order Total so far<br> <i>(Including Shipping Woldwide)</i>.</td></tr><tr></table>');

if (parent.items_ordered == 0)
document.write('<font color=#000080><b>You have not ordered any items so far<b></font>');



if (parent.item_num > 0)
{
	for (i =1;i < parent.item_num;i++)
   	{ 
	
		if (parent.itemlist[i].quan > 0)
     	{
			index = index + 1;
document.write('<a href='+ parent.itemlist[i].url + '><i><b> review : </b></i></a><input size=10 type=text name= ' + parent.itemlist[i].code + '   value= ' +  parent.itemlist[i].code + '><input size=6  type=text name= ' + parent.itemlist[i].code + ' value=' +  parent.itemlist[i].price + '><input size=20 type=text  name= ' + parent.itemlist[i].code + '  value= '+  parent.itemlist[i].desc + '><input size=2 type=text name= ' + parent.itemlist[i].desc + '  value= '+  parent.itemlist[i].quan + '><br>');

     	} 
   	}
}
	
<!-- end hiding -->
</script>	

	
<table border="0" width=400>


<tr>
<td align="center" colspan="6" bgcolor="#FF9999"><b>Comments &amp; Additional Information <br><font color=#ffff00>Can be written in the box below</font>
<br> </b> </td>
</tr>

	
<tr>
<td colspan="6"><center><textarea name="comments" rows="10" cols="40">
</textarea></center></td>        
</tr>
	
</table>
	
	
<!-- Customer Info Table -->    
<table border="0" cellpadding="0" cellspacing="0" bgcolor="#00FFFF" width=400>

	
<tr>         
<td align="center" colspan="5" bgcolor="#CCFFFF"><b>Customer Information / Details</b> </td>
</tr>

	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>First Name: </b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="30" name="name_first"></td>
</tr>
        
	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Last Name:</b> </td>
         
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="30" name="name_last"></td>
</tr>
        
	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Email Address:</b> </td>
           
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="60" name="email"></td>
</tr>
	
	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Address:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="60" name="address1"></td>
</tr>
        

<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF">&nbsp; </td>
	
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="60" name="address2"></td>
</tr>
	
	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>City:</b> </td>
           
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="30" name="city"></td>
</tr>

	
<tr>
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>County:</b> </td>
            
<td bgcolor="#CCFFFF"><input type="text" size="8" maxlength="10" name="state"></td>
            
<td align="right" bgcolor="#CCFFFF"><b>Post Code:</b> </td>
	
<td bgcolor="#CCFFFF"><input type="text" size="9" maxlength="10" name="zip"></td>
</tr>
	

<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Country:</b> </td>
           
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="25" maxlength="25" name="country" value="UK"> </td>
</tr>
        
<tr>
           
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Phone:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="25" maxlength="25" name="phone"></td>
</tr>
	
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Fax:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="25" maxlength="25" name="fax"></td>
</tr>
	
	
<tr>
            
<td align="center" colspan="5" bgcolor="#CCFFFF"><input type="checkbox" name="mail_list">Check here to be included on our mailing list </td>
</tr>
	
</table>
	
	
<p align="center"><br> <!-- Shipping Address Table --></p>
	
	
<table border="0" cellspacing="0" width=400>
        
<tr>
            
<td align="center" colspan="2" bgcolor="#CCFFFF"><font size="4"><b>Shipping Address:</b></font></td>
            
	
<td align="center" colspan="3" bgcolor="#CCFFFF"><input type="checkbox" name="same_flag" onclick="copyToShipping()"><font size="2" color=#ff000><blink>Same as above</blink></font> </td>
        
</tr>
        
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Recipient Name: </b></td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="50" name="ship_name"
onchange="disableSameFlag()"></td>
	
</tr>
     
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Address:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="60" name="ship_address1"
onchange="disableSameFlag()"></td>
       
</tr>
        

<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF">&nbsp; </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="60" name="ship_address2"
onchange="disableSameFlag()"></td>
        
</tr>
	
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>City:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="30" maxlength="30" name="ship_city"
onchange="disableSameFlag()"></td>
       
</tr>
       
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>County:</b> </td>
            
<td bgcolor="#CCFFFF"><input type="text" size="8" maxlength="10" name="ship_state"
onchange="disableSameFlag()"></td>
            
<td align="right" bgcolor="#CCFFFF"><b>Post Code:</b> </td>
            
<td bgcolor="#CCFFFF"><input type="text" size="9" maxlength="10" name="ship_zip"
onchange="disableSameFlag()"></td>
</tr>
	
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Country:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"><input type="text" size="25" maxlength="25" name="ship_country"
onchange="disableSameFlag()"></td>
       
</tr>
	
	
<tr>
            
<td align="right" colspan="2" bgcolor="#CCFFFF"><b>Phone:</b> </td>
            
<td colspan="3" bgcolor="#CCFFFF"> <input type="text"  size="25" maxlength="25" name="ship_phone" onchange="disableSameFlag()"></td>
       
</tr>
        
	
<tr>
            
<td>&nbsp;</td>
        
</tr>
	
</table>
	
	
<p align="center"><br> <!-- Order Method Table --> </p>
	
	
<table border="0" cellspacing="0" width=400>
        
<tr>
            
<td align="center" colspan="5" bgcolor="#CCFFFF"><font size="4"><b>Choose Payment Method:</b>
</font> </td>
	
</tr>
	
	
<tr>
           
<td align="center" colspan="5" bgcolor="#CCFFFF">&nbsp;&nbsp; <font size="2">Credit Card: <input type="radio" name="order_type" value="credit"></font>&nbsp;&nbsp; </td>

</tr>
	
	
<tr>
        
<td align="center" colspan="5" bgcolor="#CCFFFF"> <a href="options.htm" target=navigate></a> </td>
			
</tr>

</table>
	
    
<p><br> <!-- Intenational Shipping Info Table --> </p>
    
<table border="0" cellspacing="0" width=400>
        
<tr>
            
<td align="center" colspan="2" bgcolor="#CCFFFF"><font size="4"><b>International Shipping:</b></font></td>
  
	
</tr>
	

<tr>
            
<td align="center" colspan="2" bgcolor="#CCFFFF"><b>Prices cover shipment worldwide</b></td>
        
</tr>
	
</table>
		
<br>

<p align="center"><br>

<input type="button" value="Place Order" onclick="orderSubmit('order')"> <input type="reset"
value="Reset card / Address Details"> </p>
</form> </center>
	
	
</body>
</html>