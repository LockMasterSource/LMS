<html>
<head>
	
<title>Shopping Cart Template</title>

<script language=javascript>
<!-- hide

order_total =0;  
item_num = 1
present_item = 1;
items_ordered = 0;
total_item_price =0;
maxarray = 50
var st_astr = '<html><body bgcolor=#d2b48c>'
var en_astr = '</body></html>'

function getCookie (name) 
{
  var dcookie = document.cookie; 
  var cname = name + "=";
  var clen = dcookie.length;
  var cbegin = 0;
	
        while (cbegin < clen) 
		{
          var vbegin = cbegin + cname.length;
			
                if (dcookie.substring(cbegin, vbegin) == cname) 
				{ 
                  var vend = dcookie.indexOf (";", vbegin);
                        
					if (vend == -1) 
						{
						vend = clen;
						}
                    return unescape(dcookie.substring(vbegin, vend));
                }// The above Line May Be Incorrect Check here for an error 
       
				cbegin = dcookie.indexOf(" ", cbegin) + 1;
			
                if (cbegin == 0) 
				{
				break;
				}// end of if (cbegin == 0)
			
        }//end of while (cbegin < clen)
	
return null;
	
}//end of function getCookie (name)

function setCookie (name, value, expires) 
{
        if (!expires)
		{
			expires = new Date();
		}
	
document.cookie = name + "=" + escape (value) + 
"; expires=" + expires.toGMTString() +  "; path=/";
}//end of setCookie (name, value, expires)

function delCookie (name) 
{
 var expireNow = new Date();
 document.cookie = name + "=" +
"; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}//end of function delCookie (name)

var shiparray =  new parent.createArray(10);
	
function getCookieArray(name)
{
  var i = 0;
	
        while (getCookie(name + i) != null) 
		{
          shiparray[i + 1] = getCookie(name + i);
          i++;
		  shiparray.length = i; 
        } //end of while (getCookie(name + i) != null)
}//end of function getCookieArray(name)

 var expdate = new Date();
 
 expdate.setTime (expdate.getTime() +  (24 * 60 * 60 * 1000 * 365)); 

function setCookieArray(name)
{
    temp_length = setCookieArray.arguments.length - 1;
        
	for (var i = 0; i < temp_length; i++) 
		{
         data = setCookieArray.arguments[i + 1]
         setCookie (name + i, data, expdate);
        }  //end of for (var i = 0; i < temp_length; i++)      
	
} //end of function setCookieArray (name)
	

function go_with_cookie()
{
setCookieArray('gifttails',
parent.ship_details.f_namea,
parent.ship_details.l_namea,
parent.ship_details.email,
parent.ship_details.ad_onea,
parent.ship_details.ad_twoa,
parent.ship_details.citya,
parent.ship_details.statea,
parent.ship_details.countrya,
parent.ship_details.zipa);
}//end of function go_with_cookie()
	

function get_that_cookie()
{
var i;
getCookieArray('gifttails');

   for (i=0;i<shiparray.length+1;i++)
   {
		if (shiparray[i])
	  	{ 
         ship_details[i]  = shiparray[i];
		} //end of if (shiparray[i])
	   
			else
			{
	   		 ship_details[i] = ''
	        }//end of else
	   
   }//end of for (i=0; i<shiparray.length+1; i++)
	
parent.ship_details.f_namea = ship_details[1];
parent.ship_details.l_namea = ship_details[2];
parent.ship_details.email = ship_details[3];
parent.ship_details.ad_onea = ship_details[4];
parent.ship_details.ad_twoa = ship_details[5];
parent.ship_details.citya = ship_details[6];
parent.ship_details.statea = ship_details[7];
parent.ship_details.countrya = ship_details[8];
parent.ship_details.zipa = ship_details[9];
	
} //end of function get_that_cookie()

// shipping details object creation
ship_details = new shipp_details();

function shipp_details()
{

this.f_namea = ''
this.l_namea= ''
this.ad_onea = ''
this.ad_twoa = ''
this.citya = ''
this.statea =''
this.zipa = ''
this.countrya = ''
this.phonea = ''
this.faxa = ''
this.mailon = false
this.sameflag = false
this.shipname=''
this.ad_oneb = ''
this.ad_twob=''
this.shipb = ''
this.stateb=''
this.zipb=''
this.countryb=''
this.phoneb=''
this.faxb=''
this.email=''
this.comments = ''
} //end of function shipp_details()
	
function refresh_ship_details(shipform)
{
parent.main.document.order.comments.value = shipform.comments
parent.main.document.order.name_first.value= shipform.f_namea
parent.main.document.order.name_last.value= shipform.l_namea
parent.main.document.order.email.value=shipform.email
parent.main.document.order.address1.value=shipform.ad_onea
parent.main.document.order.address2.value=shipform.ad_twoa
parent.main.document.order.city.value=shipform.citya
parent.main.document.order.state.value=shipform.statea
parent.main.document.order.zip.value=shipform.zipa
parent.main.document.order.country.value=shipform.countrya
parent.main.document.order.phone.value=shipform.phonea
parent.main.document.order.fax.value=shipform.faxa
parent.main.document.order.mail_list.value=shipform.mailon
parent.main.document.order.same_flag.value=shipform.sameflag
parent.main.document.order.ship_name.value=shipform.shipname
parent.main.document.order.ship_address1.value=shipform.ad_oneb
parent.main.document.order.ship_address2.value=shipform.ad_twob
parent.main.document.order.ship_city.value=shipform.shipb
parent.main.document.order.ship_state.value=shipform.stateb
parent.main.document.order.ship_zip.value=shipform.zipb
parent.main.document.order.ship_country.value=shipform.countryb
parent.main.document.order.ship_phone.value=shipform.phoneb
} //end of function refresh_ship_details(shipform)

function add_ship_details(shipform)
{
shipform.comments = parent.main.document.order.comments.value
shipform.f_namea = parent.main.document.order.name_first.value
shipform.l_namea= parent.main.document.order.name_last.value
shipform.email = parent.main.document.order.email.value
shipform.ad_onea = parent.main.document.order.address1.value
shipform.ad_twoa = parent.main.document.order.address2.value
shipform.citya = parent.main.document.order.city.value
shipform.statea =parent.main.document.order.state.value
shipform.zipa = parent.main.document.order.zip.value
shipform.countrya =parent.main.document.order.country.value
shipform.phonea = parent.main.document.order.phone.value
shipform.faxa = parent.main.document.order.fax.value
shipform.mailon = parent.main.document.order.mail_list.value
shipform.sameflag = parent.main.document.order.same_flag.value
shipform.shipname=parent.main.document.order.ship_name.value
shipform.ad_oneb = parent.main.document.order.ship_address1.value
shipform.ad_twob=parent.main.document.order.ship_address2.value
shipform.shipb = parent.main.document.order.ship_city.value
shipform.stateb=parent.main.document.order.ship_state.value
shipform.zipb=parent.main.document.order.ship_zip.value
shipform.countryb=parent.main.document.order.ship_country.value
shipform.phoneb=parent.main.document.order.ship_phone.value
}//end of function add_ship_details(shipform)

// end of shipping details object handling

function item_tot_price(i)
{
 total_item_price = eval((itemlist[i].price * itemlist[i].quan));
 return total_item_price;
}

function all_order_totals()
{
	order_total = 0;
		
		if (item_num > 0)
		{  
			for (i =1;i < item_num;i++)
			{
				order_total = order_total + item_tot_price(i)
			}//end of for (i= 1; i < item_num; i++)
   
		}//end of if(item_num > 0)
	return order_total;
}//end of function all_order_totals()
	
function remove_nil_items(inputlist)
{
	var i = 0; 
 	var j = 1; 
	
  for (i=1;i<item_num;i++)
   {
	   if (itemlist[i].quan != 0)
	   {	
		temp_array[j]=itemlist[i]
        items_ordered =j 
        j=j+1
       } //end of if (itemlist[i].quan !=0)
	   
   } //end of for (i=1; i < item_num; i++)
	
  itemlist = temp_array
  item_num = items_ordered + 1
}//end of function remove_nil_items(inputlist)

function update_this_page()
{
	var i = 0; 
	var k = 0; 
 {for (i = 0;i < parent.main.document.form1.elements.length;i++)
  {for (k=1;k<=items_ordered;k++)
   {
if ((itemlist[k].code ==  parent.main.document.form1.elements[i].name) && (k<=items_ordered) && (i<=parent.main.document.form1.elements.length))
         parent.main.document.form1.elements[i].value = itemlist[k].quan
   }
  }
 }   
}//end of function update_this_page()
	
//the above function could get messy if i mess with it, got to ensure everything else works first

function item_quan(code)
{
  var loc = check_if_in(code)
  
  if (loc > 0)
  {
    var quantities = itemlist[loc].quan
  }//end of if (loc > 0)
     else
	 {
       var quantities = 0;
	 }//end of else
	
return quantities
}//end of function item_quan(code)
	
function display_pic(graphic,price)
{
parent.frames[0].document.close()
// parent.frames[1].document.open()
parent.frames[0].document.write(st_astr);
parent.frames[0].document.write('<img src=images/' + graphic + '><br>' + price);
parent.frames[0].document.write('<p><a href="javascript:parent.updatenav_nav()">Navigation Table</a>');
parent.frames[0].document.write(en_astr);
parent.frames[0].document.close()
}//end of function display_pic(graphic,price)

	//The Above Function may help display a picture from my database onto the screen
	
function createArray(n)
//n		size of array
//init	what you want all values initialized to
{              
	this.length = n
		var i = 0
		for (i = 1 ; i < n ; i++) 
			this[i] = null;	
                return this
}//end of function createArray(n)
	
function product(code,price,desc,quan,url)
{ 
  this.price = 0
  this.code = code
  this.price = price
  this.desc = desc
  this.quan = quan
  this.url = url
  return this;
}//end of function product (code,price,desc,quan,url)

var itemlist = new createArray(50);
var temp_array = new createArray(50);

function initialize_arrays(arraysa)
{
	for (i = 1;i < maxarray;i++)
	{
		arraysa[i] = new product('',0,'',0,'')
	} //end of for (i = 1; i < maxarray; i++)
} //end of function initalize_arrays(arraysa)

function updatemain_order()
{
parent.frames[1].document.close()
// parent.frames[1].document.open()
parent.frames[1].location = "order.php";
parent.frames[1].document.close()
}//end of function updatemain_order()

function updatenav_nav()
{
  parent.frames[0].document.close()
  // parent.frames[0].document.open()
  parent.frames[0].location = "navigate.php";
  parent.frames[0].document.close()
} //end of function updatenav_nav()

function check_if_in(code_check) // this works
{
	var i = 1
	loc = 0;
// line 47
while ((i < item_num) && (itemlist[i].code != code_check))
  i = i + 1;
   if (itemlist[i].code == code_check)
   {
     loc = i
   }//end of if (itemlist[i].code == code_check)
   	  else
	   {
		loc = -1;   
	   }//end of else
    
return loc;
}//end of function check_if_in


function additem(codes,prices,descrip,url)
{
// adds another item to a variable length array
// remember to do it via new product()
// line 61
loc = check_if_in(codes)
// present_item = item_num
//last_item = item_num;
//alert('item_num = ' + item_num)

if (loc != -1)
{
  // update existing item
  olditem =  itemlist[loc].quan
  //alert(' loc is before oldvalue ' + loc);
  //alert('olditem is ' + olditem);
  itemlist[loc] = new product(codes,prices,descrip,olditem + 1,url)
}//end of if (loc != -1)
    else // new item
    {
		olditem =  itemlist[item_num].quan
    	itemlist[item_num] = new product(codes,prices,descrip,olditem + 1,url);
    	items_ordered = item_num
		item_num = item_num + 1
     }//end of else
	
    remove_nil_items(itemlist)
     
   
 }//end of function additem(codes,prices,descrip,url)
// line 78

function subitem(codes,prices,descrip,url)
{
	loc = check_if_in(codes)
	
	if ((loc != -1) && (itemlist[loc].quan > 0)) 
	{
  		// update existing item
		olditem =  itemlist[loc].quan
		//alert(' loc is before oldvalue ' + loc);
		//alert('olditem is ' + olditem);
  		itemlist[loc] = new product(codes,prices,descrip,olditem - 1,url)
	}// end of if ((loc != -1) && (itemlist[loc].quan > 0))
  //updatepage(codes) 
  
}// end of function subitem(codes,prices,descrip,url)

initialize_arrays(itemlist)
initialize_arrays(temp_array)

function check_window()
{

	if (self == mainbody)
	{
	document.write('<head><META HTTP-EQUIV="Refresh" CONTENT="15; URL=shopcartindex.php"></head><body><center><h1>Warning!</h1><br><font color=#ff000><b>This is inside a multiple frame window.<br>The scripts may not work correctly!!!!,</font><BR>We are jumping you directly to our <a href="shopcartindex.php" target=_top>Main page</a> in 15 seconds.</center>');

		self.location = "shopcartindex.php";
		parent.document.close();

	}//end of if (self == mainbody)

}//end of function check_window

<!--  end hide -->
</script>

<!-- onLoad=parent.get_that_cookie();check_window() -->
	
</head>
	
<frameset cols=25%,*  resize=yes onLoad=parent.get_that_cookie()>
 <Frame src=navigate.php name=navigate>
 <frame src=welcome.php name=main>
<noframes>

This page requires frames.

</noframes>
</Frame>
<body bgcolor="#d2b48c">	
<div id="navigation">	
<a class="nav-bar-brand" href="Home.php" ><img id ="logo" src="http://i65.tinypic.com/xag7t.png">Lock Master</a>
<a href="Home.php">Home</a>
<a href="Browse.php">Browse A-Z</a>
<a href="AdvancedSearch.php">Advanced Search</a>
<a href="About.php">About Us</a>
<a href="shopcartindex.php">Shopping Cart</a>
<a href="Login.php">Login</a>  
<a href="Registration.php">Register</a>
</div>
	
</body> </frameset>
</html> 
