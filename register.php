<!-- Delight 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.Delight.com/preview/Delight_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Out </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="Delight_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "Delight_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

function validate()
{

if(document.getElementById("fullname").value == "")
{
  alert("Full Names field Empty");
  document.getElementById("fullname").focus();
  return false;
}
if(document.getElementById("address").value == "")
{
  alert("Adress field Empty");
  document.getElementById("address").focus();
  return false;
}
if(document.getElementById("city").value == "")
{
  alert("City field Empty");
  document.getElementById("city").focus;
  return false;
}
if(document.getElementById("country") == "")
{
  alert("Country field Empty");
  document.getElementById("country").focus();
  return false;
}
if(document.getElementById("email").value == "")
{
  alert("Email field Empty");
  document.getElementById("email").focus();
  return false;
}
if(document.getElementById("phone").value == "")
{
  alert("Phone field Empty");
  document.getElementById("phone").focus();
  return false;
}
return true;
}
</script>

</head>

<body>

<div id="Delight_wrapper_sp">
<div id="Delight_header_wsp">
	<div id="Delight_header" class="header_subpage">
    	<div id="site_title"><a rel="nofollow" href="http://www.Delight.com/preview/Delight_385_floral_shop" title="Floral Shop">Floral Shop</a></div>
        <div id="Delight_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="about.html">About</a></li>              
                <li><a href="login.html">Checkout</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faqs.html">FAQs</a></li>
            </ul>
            <div id="Delight_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> <!-- end of Delight_menu -->

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="Delight_main_wrapper">
<div id="Delight_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
                <ul class="sidebar_list">
                    <li><a href="#">Wedding</a></li>
                    <li><a href="#">Anniversary</a></li>
                    <li><a href="#">Birthday</a></li>
                    <li><a href="#">Baby Shower</a></li>
                    <li><a href="#">Valentine</a></li>
                    <li><a href="#">Bridal Shower</a></li>
          
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/product/valentine-cake-strawberries-Tamaras-Cakes-Oshkosh-WI.jpg" alt="Flowers" />
                <a href="#">strawberries Tamaras</a>
                <p>
                	Price:
                    <span class="price normal_price">Ksh1600</span>&nbsp;&nbsp;
                    <span class="price special_price">Ksh1300</span>
                </p>
            </div>
        </div>
    </div>
    <form name = "register" method = "post" action = "registry.php" onsubmit = "return validate()">
    <div id="content" class="right">
    	<h2>Checkout</h2>
        
		<h3>BILLING DETAILS</h3>
        
            <div class="content_half left form_field">
				Full Name (must be the same as on credit card)
                <input name="fullname" type="text" id="fullname" maxlength="40" />
                Address:
      			<input name="address" type="text" id="address" maxlength="40" />
                City:
                <input name="city" type="text" id="city" maxlength="40" />
                Country:
                <input name="country" type="text" id="country" maxlength="40" />				
            </div>
            
            <div class="content_half right form_field">
            	Email:
			  <input name="email" type="text" id="email" maxlength="40" />
                Phone:<br />
                <input name="phone" type="text" id="phone" maxlength="40" />
                <span>Please, specify your reachable phone number to call you for a verification.</span>
            </div>
            
            <div class="cleaner h40"></div>
            <tr><td></td>
			<td><input name="submit" type="submit" value="Register"  /></td></tr>
           
        
    </div>
    </form>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="Delight_footer_wrapper">
<div id="Delight_footer">
	<div class="footer_left">
    	
    </div>
	<div class="footer_right">
		<p><a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2014 <a href="#">Company Name</a> <!-- Credit: www.Delight.com --></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>