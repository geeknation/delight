<?php require_once('connection/dbConnect.php')?>
<!-- Delight 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.Delight.com/preview/Delight_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail </title>
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

</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>

<body>
<?php
   $id = $_GET['id'];
   $queryy = "SELECT image,details FROM products where id = $id";
   $result=mysql_query($queryy,$connect);

    while ($row = mysql_fetch_assoc($result)) {
	  $image = $row['image'];
	  $details = $row['details'];
    }
	

?>

<div id="Delight_wrapper_sp">
<div id="Delight_header_wsp">
	<div id="Delight_header" class="header_subpage">
    	<div id="site_title"><a rel="nofollow" href="http://www.Delight.com/preview/Delight_385_floral_shop" title="Floral Shop">Floral Shop</a></div>
        <div id="Delight_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
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
                <img src="images/Delight_image_01.jpg" alt="Flowers" />
                <a href="#">Citrus Burst Bouquet</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
      	<h2>Product Detail</h2>
        <div class="content_half left">
       	 <a href="beautiful-wedding.php"><img src="images/cakes/<?php echo $image;?>" /></a>
            
            <h4>Product Description</h4>
            <p><?php echo $details; ?> </p>
            <div class="cleaner h40"></div>
        <div class="blank_box">
        	
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="Delight_footer_wrapper">
<div id="Delight_footer">
	<div class="footer_left">
    	<a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
    </div>
	<div class="footer_right">
		<p><a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a></p>
        <p>Copyright © 2084 <a href="#">Company Name</a> <!-- Credit: www.Delight.com --></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>